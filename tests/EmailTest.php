<?php

use PHPUnit\Framework\TestCase;
use Queopius\LaravelContactform\Rules\CheckEmailDns;

class EmailTest extends TestCase
{
	public function rule_object_version_with_valid_hosts() : void{
		$validator = Validator::make([
			'email' =>'somebody@gmail.com'], 
			[
				'email'  => new CheckEmailDns(),
			]
		);

		$this->assertTrue($validator->passes());
	}

	Public function rule_object_version_with_invalid_hosts() : void
	{
		$validator = Validator::maker([
			'email' =>'somebody@gmail.com'], 
			[
				'email'  => new CheckEmailDns(),
			]
		);

		$this->assertTrue($validator->fails());
        $this->assertEquals(
            'The email has an invalid host.',
            $validator->errors()->first()
        );
	}
}