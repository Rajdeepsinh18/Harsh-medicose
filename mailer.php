<?php
	//print_r($_FILES);
	//include("dbconnection.php");
	//include("header.php");
	//include('st.html');
	//include('contact.php');
	//print_r($_POST);
	//session_start();
	
?>
<?php 
 $to = "info@harshmedicose.com";
 $subject = $_REQUEST['subject'] ;
 $email = $_REQUEST['email'] ; 
 
    $message .= " Name: ".$_REQUEST['name'] ; 
	$message .= "\n E-Mail: ".$_REQUEST['email'] ; 
	$message .= "\n Address: ".$_REQUEST['address'] ; 
	$message .= "\n Phone: ".$_REQUEST['phone'] ; 
	$message .= "\n Mobile: ".$_REQUEST['mobile'] ;  
	$message .= "\n Message: ".$_REQUEST['message'] ; 
 $headers = "From: $email"; 
 $sent = mail($to, $subject, $message, $headers) ; 

 if($sent) 
 {
echo "<script>window.location='index.html'</script>";
}
 else 
 {
echo "<script>window.location='index.html'</script>";
 }
 ?> 
