<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            session(['locale' => $locale]);
            
        }

        // Redireccionar de vuelta a la misma página
        return back();
    }
}
