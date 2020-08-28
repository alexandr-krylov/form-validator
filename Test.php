<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function setUp(): void
    {
        spl_autoload_register();
    }



    /**
     * @dataProvider formProvider
     */
    public function testTest($values, $result)
    {
        //var_dump($values);
        $form = new Form(new Validator());
        $form->getField('login')->setValue($values['login']);
        $form->getField('password')->setValue($values['password']);
        $form->getField('confirmpass')->setValue($values['confirmpass']);
        //var_dump($form);
        $this->assertSame($form->validate(), $result);
        //$this->assertTrue(1 == 1);
    }

    /**
     * @return array[]
     */
    public function formProvider()
    {
        return [
            [
                ['login' => 'u_)sername', 'password' => 'passswooord', 'confirmpass'=>'passswooord'],
                false
            ],  //login wrong
            [
                ['login' => 'User123', 'password' => 'Passsw0~oord4', 'confirmpass'=>'Passsw0~oord4'],
                true
            ],  //ALL right
            [
                ['login' => 'User123', 'password' => 'passswoord', 'confirmpass'=>'passswoord'],
                false
            ],   //password wrong
            [
                ['login' => 'user123', 'password' => 'Passsw0~oord4', 'confirmpass' => 'passsw0~oord4'],
                false
            ]    //confirmation wrong
        ];
    }

}
