<?php
    
namespace Queopius\LaravelContactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Rule;
use Queopius\LaravelContactform\Models\ContactForm;
use Queopius\LaravelContactform\Rules\CheckEmailDns;
use Queopius\LaravelContactform\Mail\ContactMailable;

class ContactFormController extends Controller {

    public function index()
    {
       return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:25',
            'email'    => ['required', 'email:rfc', new CheckEmailDns],
            'message'  => 'required|string|min:10|max:255'
        ]);

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
        ContactForm::create($request->all());

        return redirect(route('contact'))
            ->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}