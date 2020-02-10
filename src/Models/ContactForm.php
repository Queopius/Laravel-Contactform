<?php

namespace Queopius\LaravelContactform\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $guarded = [];

    protected $table = 'contact';

    private $name;

    private $email;

    private $message;
}