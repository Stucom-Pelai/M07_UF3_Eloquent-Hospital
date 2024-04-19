<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;

class Contactus extends Component
{
    public $name;
    public $phone;
    public $subject;
    public $message;
    public $email;
    public $captcha = false;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required',
        'email' => 'required|email',
    ];

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
        $this->validate();

        if (!$this->captcha) {
            $this->addError('captcha', 'Are you human? Please check the captcha to proceed.');
            return;
        }

        Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // Clear form fields
        $this->reset(['name', 'phone', 'email', 'subject', 'message']);

        session()->flash('message', 'Message Submitted Successfully!.');
    }

    public function render()
    {
        return view('livewire.contactus');
    }
}

// use Livewire\Component;
// use App\Models\contact;
// use Illuminate\Support\Facades\Http;


// class Contactus extends Component
// {
//     public $name;
//     public $phone;
//     public $subject;
//     public $message;
//     public $email;
//     public $captcha = false;

//     public function updatedCaptcha($token)
//     {
//         $response = Http::post(
//             'https://www.google.com/recaptcha/api/siteverify?secret=' .
//                 env('CAPTCHA_SECRET_KEY') .
//                 '&response=' . $token
//         );

//         $success = $response->json()['success'];

//         if (!$success) {
//             $this->captcha = false;
//         } else {
//             $this->captcha = true;
//         }
//     }


//     public function add_to_contact()
//     {
//         $this->validate([
//             'name' => 'required',
//             'phone' => 'required',
//             'subject' => 'required',
//             'message' => 'required',
//             'email' => 'required|email',
            
//         ]);

//         contact::create([
//             'name'         => $this->name,
//             'phone'         => $this->phone,
//             'email'         => $this->email,
//             'subject'         => $this->subject,
//             'message'         => $this->message,
//         ]);

//         //unset variables
//         $this->email = "";
//         $this->name = "";
//         $this->phone = "";
//         $this->subject = "";
//         $this->message = "";

//         session()->flash('message', 'Message Submitted Successfully!.');
//     }
//     public function render()
//     {
//         return view('livewire.contactus');
//     }
// }
