<?php
    
namespace Queopius\LaravelContactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Queopius\LaravelContactform\Models\ContactForm;

class ContactFormController extends Controller {

    public function index()
    {
       return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('contact'))
            ->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}