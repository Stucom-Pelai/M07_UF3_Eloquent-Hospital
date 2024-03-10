<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;
use Laminas\Soap\AutoDiscover as WsdlAutoDiscover;
use Laminas\Soap\Server as SoapServer;

class DepartmentController extends Controller
{

    //
    public function __construct()
    {
        // Constructor logic, if any
    }

    public function wsdlAction(Request $request)
    {
        // dd(phpinfo());
        if (!$request->isMethod('get')) {
            return $this->prepareClientErrorResponse('GET');
        }

        $wsdl = new WsdlAutoDiscover();

        $wsdl->setUri(route('soap-server'))
            ->setServiceName('MySoapService');


        $this->populateServer($wsdl);


        return response()->make($wsdl->toXml())
            ->header('Content-Type', 'application/xml');
    }

    public function serverAction(Request $request)
    {
        // dd("hola");
        // dd($request);
        if (!$request->isMethod('post')) {
            return $this->prepareClientErrorResponse('POST');
        }

        $context = stream_context_create(
            array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,

                )
            )
                );

        $soapClientOptions = array(
            'stream_context' => $context,
            'actor' => route('soap-server'),
            'soap-version' => SOAP_1_2,
            'uri' => route('soap-wsdl')
        );
        

        $server = new SoapServer(null, $soapClientOptions);
        // $server = new SoapServer(
        //     route('soap-wsdl'),
        //     [
        //         'actor' => route('soap-server'),
        //     ]
        // );

        $server->setReturnResponse(true);
        $this->populateServer($server);
        $soapResponse = $server->handle();

        return response()->make($soapResponse)->header('Content-Type', 'application/xml');
    }

    private function prepareClientErrorResponse($allowed)
    {
        return response()->make('Method not allowed', 405)->header('Allow', $allowed);
    }

    private function populateServer($server)
{
    // Expose a class and its methods:
    $server->setClass(ResponseController::class);

    // Expose an object instance and its methods:
    // $server->setObject($this->env);

    // Expose a function:
    // $server->addFunction('Acme\Model\ping');
}

    // public function soapServer()
    // {
    //     SoapWrapper::add(function ($service) {
    //         $service
    //             ->name('sample')
    //             ->wsdl('http://path/to/your/wsdl')
    //             ->trace(true);
    //     });

    //     return response()->view('soap.wsdl')->header('Content-Type', 'text/xml');
    // }

    /**
     * Your SOAP service method.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function yourSoapMethod(Request $request)
    {
        // Your SOAP service logic here
        // Access SOAP request data using $request
        dd($request);

        // Example response
        $response = [
            'result' => 'Your SOAP response',
        ];

        return response()->json($response);
    }
}
