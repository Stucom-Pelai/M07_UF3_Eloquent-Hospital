<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaveGraphQLResult
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Ejecutar el siguiente middleware en la cadena
        $response = $next($request);

        // Acceder al resultado de la consulta GraphQL
        $result = $response->original;

        //TODO: Implementar función para guardar el json en mongoDB, esto es un ejemplo que lo guarda en un json
        if ($response->getData(true)) {
            // Convertir la respuesta a formato JSON
            $jsonResponse = json_encode($response->getData(true));

            // Guardar el resultado en un archivo JSON
            Storage::put('graphql_results.json', $jsonResponse);
        }


        // Devolver la respuesta original
        return $response;
    }
}
