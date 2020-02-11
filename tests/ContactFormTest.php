<?php

namespace Queopius\Test;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use Queopius\LaravelContactform\Models\Contact;
use Queopius\LaravelContactform\Rules\CheckEmailDns;

class ContactFormTest extends TestCase
{
	protected $user;

	public function setUp() : void
	{
		$this->user = new Contact;
	}

	public function test_i_can_the_name()
	{
		$this->user->setName("Queopius");

		$this->assertEquals($this->user->getName(), 
			"Queopius"
		);
	}

	public function test_i_can_the_message()
	{
		$this->user->setMessage("My Test Package is Good");

		$this->assertEquals($this->user->getMessage(), 
			"My Test Package is Good"
		);
	}

	public function test_i_can_the_email()
	{
		$this->user->setEmail("queopius@gmal.com");

		$this->assertEquals($this->user->getEmail(), 
			"queopius@gmal.com"
		);
	}

	public function test_name_email_without_spaces()
	{
		$this->user->setName("   Queopius   ");
		$this->user->setEmail("queopius@gmal.com      ");

		$this->assertEquals($this->user->getName(), 
			"Queopius"
		);
		$this->assertEquals($this->user->getEmail(), 
			"queopius@gmal.com"
		);
	}
	
	// public function test_rule_object_version_with_valid_hosts($request)
	// {
	// 	$validate = Validator::make(
	// 		[
	// 			'name'   => 'Queopius'
	// 		],
	// 		[
	// 			'message'  => 'Este es un email de prueba'
	// 		],
	// 		[
	// 			'email'  =>'somebody@gmail.com'
	// 		], 
	// 		[
	// 			'email'  => new CheckEmailDns(),
	// 		]
	// 	);

	// 	$this->assertTrue($validator->passes());
	// }

	// public function test_rule_object_version_with_invalid_hosts()
	// {
	// 	$validator = Validator::maker([
	// 		'email' =>'somebody@gmail.com'], 
	// 		[
	// 			'email'  => new CheckEmailDns(),
	// 		]
	// 	);

	// 	$this->assertTrue($validator->fails());
 //        $this->assertEquals(
 //            'The email has an invalid host.',
 //            $validator->errors()->first()
 //        );
	// }
}