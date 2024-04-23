<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class LanguageSwitcher extends Component
{
    public $locale;

    public function mount()
    {
        // Establecer el idioma actual del selector
        $this->locale = App::getLocale();
    }

    public function updatedLocale()
    {
        // Cambiar el idioma cuando se selecciona un nuevo valor
        App::setLocale($this->locale);
        session(['locale' => $this->locale]);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}