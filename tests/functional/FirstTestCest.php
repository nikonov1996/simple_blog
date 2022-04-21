<?php

class FirstTestCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Try service!','a.btn-primary');
        $I->haveInDatabase('Users', ['user_name' => 'Nikonov User' , 'user_email' => 'nva3@mail.ru','user_password'=>'qwerty']);
        $I->seeInDatabase('Users', ['user_name' => 'Nikonov User']);
//        $I->seeInDatabase('Users', ['user_name' => 'Nikonov User2']);
        $I->seeNumRecords(4,'Users');
    }
}
