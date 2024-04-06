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
    public $captcha = false;

    public function updatedCaptcha($token)
    {
        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret=' .
            env('CAPTCHA_SECRET_KEY') .
            '&response=' . $token
        );

        $success = $response->json()['success'];

        if (!$success) {
            $this->captcha = false;
        } else {
            $this->captcha = true;
        }
    }
 

    public function add_to_contact()
    {
        if (!$this->captcha) {
            // if no clicked captchav2 show error
            dd("You must check I'm not a robot");
        }
        
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
