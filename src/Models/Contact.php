<?php

namespace Queopius\LaravelContactform\Models;

//use Illuminate\Database\Eloquent\Model;

class Contact //extends Model
{
    protected $guarded = [];

    protected $table = 'contacts';


    public function setName($name)
    {
    	$this->name = trim($name);
    }

    public function setMessage($message)
    {
    	$this->message = $message;
    }

    public function setEmail($email)
    {
    	$this->email = trim($email);
    }

    public function getName()
    {        
    	return $this->name;
    }    

    public function getMessage()
    {
    	return $this->message;
    }

    public function getEmail()
    {
    	return $this->email;
    }    
}