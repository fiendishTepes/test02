<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123456789');
define('DB', 'db_mvc');
define('TBL', 'tbl_member');
$con = new mysqli(HOST,USER,PASS,DB);
for($n=1;$n<=50;$n++)
{
	$fName = 'My TESTER NUMBER '.$n;
	$lName = 'TESTER '.$n;
	$password = 'USERNAME = '.$n;
	$email =  'tester number '.$n.'@localhost.com';
	$sql = "INSERT INTO tbl_member(memberFName,memberLName,memberEmail,memberUser,memberPass) 
	VALUES('$fName','$lName','$email','$USERNAME','password')";
	$con->query($sql);
}
