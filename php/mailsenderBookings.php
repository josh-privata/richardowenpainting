<?php

	// Enter your email for feedbacks here
	$emailTo = "support@privata.com.au";
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ".$_POST['rsEmail']."\r\n";
	
	$subject = "BOOKING REQUEST"; // Enter your subject here

	
	reset($_POST);
	
	$body = "";
	$body .= "<p><b>Name: </b>".$_POST['rsName']."</p>";
	$body .= "<p><b>Email: </b>".$_POST['rsEmail']."</p>";
    $body .= "<p><b>Phone Number: </b>".$_POST['rsPhone']."</p>";
    $body .= "<p><b>Date: </b>".$_POST['rsDate']."</p>";
    $body .= "<p><b>Time: </b>".$_POST['rsTime']."</p>";
	$body .= "<p><b>Message: </b>".$_POST['rsMessage']."</p>";	
	
	if( mail($emailTo, $subject, $body, $headers) ){
		$mail_sent = true;
	} else {
		$mail_sent = false;
	}	
	if(!isset($resp)){
		echo json_encode($mail_sent);
	}
?>