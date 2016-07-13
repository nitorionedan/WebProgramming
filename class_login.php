<?php

class LoginMng
{
    public $loginID;
    public $loginPass;


    function Login()
    {
        $arrIdPw = array
        (
            0 => array('id' => 'Natoyama Natohiro', 'pass' => 'NatoDaisuki'),
            1 => array('id' => 'Sonna Soubi',       'pass' => 'Daijobuka'),
            2 => array('id' => 'Abe San',           'pass' => 'abesanndayone'),
            3 => array('id' => 'Yokai',             'pass' => 'watch2016'),
        );

        for($i = 0; $i < count($arrIdPw); $i++)
        {
            if ($arrIdPw[$i]['id']   === $this->loginID &&
                $arrIdPw[$i]['pass'] === $this->loginPass)
                return true;
        }

        return false;
    }
}