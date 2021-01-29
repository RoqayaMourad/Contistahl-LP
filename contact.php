
<?php
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$to='leads@lp-quadsolutions.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."subject :".$subject."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header('Location : thank-you.html');
			echo "test" ;
exit();
		}
		else{
			echo "Something went wrong!";
		}
	
?>