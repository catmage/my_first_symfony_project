<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setFirstname('firstname')
             ->setLastname('lastname')
             ->setEmail('true@test.com')
             ->setPassword('password')
             ->setAddress('address')
             ->setCity('city')
             ->setZipcode('zipcode');
        
        $this->assertTrue($user->getFirstname() === 'firstname');
        $this->assertTrue($user->getLastname() === 'lastname');
        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAddress() === 'address');
        $this->assertTrue($user->getCity() === 'city');
        $this->assertTrue($user->getZipcode() === 'zipcode');

    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setFirstname('firstname')
             ->setLastname('lastname')
             ->setEmail('true@test.com')
             ->setPassword('password')
             ->setAddress('address')
             ->setCity('city')
             ->setZipcode('zipcode');

        $this->assertFalse($user->getFirstname() === 'false');
        $this->assertFalse($user->getLastname() === 'false');
        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAddress() === 'false');
        $this->assertFalse($user->getCity() === 'false');
        $this->assertFalse($user->getZipcode() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getLastname());
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAddress());
        $this->assertEmpty($user->getCity());
        $this->assertEmpty($user->getZipcode());
    }
   

}
