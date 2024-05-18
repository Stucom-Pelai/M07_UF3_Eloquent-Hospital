<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

class LocaleController extends Controller
{
    public function updateLocale(Request $request)
    {
        // get value from request
        $locale = $request->input('locale');

        // validate possible values
        if ($locale === 'es' || $locale === 'en') {
            // update locale value
            App::setLocale($locale);
            session()->put('locale', $locale);
            return redirect()->back();    
        }
    }    
}