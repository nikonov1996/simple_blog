<?php
use Faker\Factory;

class UserRegisterCest
{   private static $user;

    public function _before(AcceptanceTester $I)
    {
        $faker = Factory::create();
        self::$user = [
            'username' => $faker->firstName . ' ' . $faker->lastName,
            'email' => $faker->email,
            'password' => "qwerty"
        ];
    }

    // tests
    public function RegisterUserWithCorrectDataTest(AcceptanceTester $I)
    {

        $I->amOnPage('/registration');
        $I->fillField('input[name="username"]', self::$user['username']);
        $I->fillField('input[name="email"]', self::$user['email']);
        $I->fillField('input[name="password"]', self::$user['password']);
        $I->fillField('input[name="rep_password"]', self::$user['password']);
        $I->click('button.btn-lg');
        $I->seeInDatabase('Users', ['user_name' => self::$user['username']]);
    }

    public function clearDB(AcceptanceTester $i){
        //fake test for database cleaning
    }
}
