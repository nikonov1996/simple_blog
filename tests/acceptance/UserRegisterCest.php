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

    public function RegisterUserWithIncorrectEmailTest(AcceptanceTester $I)
    {

        $I->amOnPage('/registration');
        $I->fillField('input[name="username"]', self::$user['username'].'_new');
        $I->fillField('input[name="email"]', str_replace('@','', self::$user['email']) );
        $I->fillField('input[name="password"]', self::$user['password']);
        $I->fillField('input[name="rep_password"]', self::$user['password']);
       // $I->click('button.btn-lg');
        $I->dontSeeInDatabase('Users', ['user_name' => self::$user['username'].'_new']);

        //for test smth
        $I->haveInDatabase('Users', ['user_name' => 'Nikonov User' , 'user_email' => 'nva3@mail.ru','user_password'=>'qwerty']);
        $I->seeInDatabase('Users', ['user_name' => 'Nikonov User']);
    }

/*
возникает проблема, что база не очищается после прогона тестов , если мы используем приемочные и функциональные тесты и апи тесты которые меняют базу
если включен cleanup (очистка базы перед каждым тестом) то в конце каждого теста можно ставить пустой метод перед которым бд очистится ,
а сам метод ничего не нарушит/не сделает
если включена очистка перед
*/
}
