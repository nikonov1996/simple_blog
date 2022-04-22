<?php

class UserAuthCest
{
    private static $user;

    public function _before(AcceptanceTester $I)
    {
        self::$user = [
            'username' => 'Nikonov Vladislav',
            'email' => 'nva@mail.ru',
            'password' => 'qwerty'
            ];
    }

    // tests
    public function UserSuccessAuthTest(AcceptanceTester $I)
    {
        $I->amOnPage('/auth');
        $I->fillField('input[name="email"]', self::$user['email']);
        $I->fillField('input[name="password"]', self::$user['password']);
        $I->click('button.btn-lg');
        $I->see('Welcome dear ' . self::$user['username'] . ' !','.card-header > h4');
//        $I->seeInDatabase('Users', ['user_name' => 'Vilma Hayes']);
    }
}
