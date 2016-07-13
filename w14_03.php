<?php
// Read the Login classes define
require_once("class_login.php");

$obj_login = new LoginMng();

$obj_login->loginID = $_POST['id'];
$obj_login->loginPass = $_POST['password'];

if ( $obj_login->Login() )
{
    print "Successful! :D<br />";
}
else
{
    print "Failed. Go your home!<br />";
}

?>

<A Href="w14_03_submit.php">Log out</A>