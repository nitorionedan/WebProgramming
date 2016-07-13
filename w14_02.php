<?php
// Read the Login classes define
require_once("class_login.php");

$obj_login = new LoginMng();

$obj_login->loginID = 'Natoyama Natohiro';
$obj_login->loginPass = 'NatoDaisuki';

if ( $obj_login->Login() )
{
    print "Successful<br />";
}
else
{
    print "Failed<br />";
}