<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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

        // Guardar el resultado en la base de datos MONGODB...
        // DB::table('graphql_results')->insert([
        //     'result' => json_encode($result),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        
        // Devolver la respuesta original
        return $response;
    }
}
