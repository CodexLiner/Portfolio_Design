<?php 
$name = $_REQUEST['name'];
$name = $_REQUEST['email'];
$name = $_REQUEST['subject'];
$name = $_REQUEST['message'];
 if(empty($name) || empty($email) || empty($subject) || empty($message))
 {
     echo "Please Fill All ";
 }
 else
 {
 mail("meenagopal24@gmail.com" , "CodeErgo.Com" $subject , $message , "From: $name <
 $email>");
 }
?>
