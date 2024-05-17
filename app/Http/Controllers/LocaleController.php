<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

class LocaleController extends Controller
{
    public function updateLocale(Request $request)
    {
        //dd($_SERVER);
        // Obtener el valor de locale desde la solicitud
        $locale = $request->input('locale');

        // Validar que el valor de locale sea "es" o "en" para evitar posibles problemas de seguridad
        if ($locale === 'es' || $locale === 'en') {
            // Actualizar el locale en la sesión
            // dd($_SERVER);
            App::setLocale($locale);
            session()->put('locale', $locale);
            return view('index');
            //return redirect('/about');     
        }
    }

    public function refreshLocale()
    {        
        return view('index');      
    }
}