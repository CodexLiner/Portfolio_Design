<?php
	if(isset($_POST['send'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];
		$sbj=$_POST['subject'];
		$reply="Hello Dear ".$name."\n"."Thank You For Contacting CodeErgo i Will Contact You Soon";

		$to='meenagopal24@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject=$sbj;
		$message=$name."\n"."Is Wanting To know Something About You :"."\n\n".$msg;
		$headers="From: ".$email;
		$header="From: ".'No-Reply@CodeErgo.com';

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	
		(mail($email, $subject, $reply, $header));
	}
?>