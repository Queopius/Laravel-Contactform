<?php
    
namespace Queopius\LaravelContactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Validation\Rule;
use Queopius\LaravelContactform\Models\Contact;
use Queopius\LaravelContactform\Rules\CheckEmailDns;
use Queopius\LaravelContactform\Mail\ContactMailable;

class ContactFormController extends Controller
{

    public function index()
    {
       return view('laravel_contactform::contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:25',
            'email'    => ['required', 'email:rfc,dns'],
            'message'  => 'required|string|min:10|max:255'
        ]);

        $contact = Contact::create($request->all());   
        
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable($request->name, $request->message)
        );                   
        
        return redirect(route('contact'))
            ->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}