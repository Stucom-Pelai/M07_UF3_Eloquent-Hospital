<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contact;
use Illuminate\Support\Facades\Http;


class Contactus extends Component
{
    public $name;
    public $phone;
    public $subject;
    public $message;
    public $email;
    public $captcha = 0;

    public function updatedCaptcha($token)
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);
        $this->captcha = $response->json()['score'];
dd($this->captcha);
        if (!$this->captcha = .3) {
            $this->add_to_contact();
        } else {
            return session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
        }
    }

    public function add_to_contact()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);

        contact::create([
            'name'         => $this->name,
            'phone'         => $this->phone,
            'email'         => $this->email,
            'subject'         => $this->subject,
            'message'         => $this->message,
        ]);

        //unset variables
        $this->email = "";
        $this->name = "";
        $this->phone = "";
        $this->subject = "";
        $this->message = "";

        session()->flash('message', 'Message Submitted Successfully!.');
    }
    public function render()
    {
        return view('livewire.contactus');
    }
}
