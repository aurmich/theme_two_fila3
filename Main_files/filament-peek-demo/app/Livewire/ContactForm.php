<?php

namespace App\Livewire;

use App\Models\ContactEntry;
use Livewire\Component;

class ContactForm extends Component
{
<<<<<<< HEAD
    public $first_name;
=======
    public $name;
>>>>>>> aurmich/dev

    public $email;

    public $message;

    public $quiz;

    protected $rules = [
<<<<<<< HEAD
        'first_name' => 'required|max:250',
=======
        'name' => 'required|max:250',
>>>>>>> aurmich/dev
        'email' => 'required|email|max:250',
        'message' => 'required',
        'quiz' => 'required',
    ];

    public $isSent = false;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $this->validate();

        if ((string) $this->quiz !== '7') {
            $this->addError('quiz', 'The answer is not correct');

            return;
        }

        $this->isSent = true;

        ContactEntry::create([
<<<<<<< HEAD
            'first_name' => $this->first_name,
=======
            'name' => $this->name,
>>>>>>> aurmich/dev
            'email' => $this->email,
            'message' => $this->message,
        ]);
    }
}
