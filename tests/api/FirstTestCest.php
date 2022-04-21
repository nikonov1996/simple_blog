<?php

class FirstTestCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $response = $I->sendPost('/articles_list');
        $I->seeResponseCodeIs(200);
        $I->haveInDatabase('Users', ['user_name' => 'Nikonov User' , 'user_email' => 'nva3@mail.ru','user_password'=>'qwerty']);
        $I->seeInDatabase('Users', ['user_name' => 'Nikonov User']);
    }
}
