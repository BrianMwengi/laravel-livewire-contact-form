<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;


class ContactForm extends Component
{
   public $name;
   public $email;
   public $message;
   public $successMessage;

   protected $rules = [
       'name' =>'required',
       'email' => 'required|email',
       'message' => 'required|min:6'
   ];

   public function updated($propertyName)
   {
       $this->validateOnly($propertyName);
   }

   public function submitForm()
   {
       $contact =$this->validate();

       Mail::to('mwengibrian@gmail.com')->send(new ContactFormMailable($contact));

       $this->successMessage="thank you for your message";

       $this->resetForm();
   }
   
   private function resetForm()
   {
       $this->name="";
       $this->email="";
       $this->message="";

   }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
