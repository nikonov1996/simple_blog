<?php
use Faker\Factory;

class UserAuthCest
{
    private static $user;

    public function _before(ApiTester $I)
    {
        $faker = Factory::create();
        self::$user = [
            'username' => $faker->firstName . ' ' . $faker->lastName,
            'email' => $faker->email,
            'password' => "qwerty"
        ];
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->haveInDatabase('Users',
            [
                'user_name' => self::$user['username'] ,
                'user_email' => self::$user['email'],
                'user_password'=>self::$user['password']
            ]);
        $I->sendPost('/auth/login',
        [
            'email' => self::$user['email'],
            'password' => self::$user['password'] ]
        );

        $I->seeResponseCodeIs(200);
        $I->seeResponseContains('Welcome dear ' . self::$user['username'] . ' !');
    }
}
