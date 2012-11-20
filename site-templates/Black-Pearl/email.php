<?
$host = "";
$port = "";
$username = "";
$password = "";

//error_reporting(E_ALL);
//ini_set("display_errors", 1);

// Check to make sure it is coming from the place it is hosted on
if ( strpos($_SERVER['HTTP_REFERER'],$_SERVER['SERVER_NAME']) === false){ 
	die("<b>Error</b>, Cannot Run Script Error Line:".__LINE__." = 'This is not coming from the place where it is hosted.'");
}

require_once('C:/users/__ programming/phpmailer/config.php');
require_once('C:/users/__ programming/phpmailer/class.phpmailer.php');
//include_once("C:/users/__ programming/phpmailer/class.smtp.php"); 


$verbage = "<p>If you are repeatedly getting this message but you are sending a legitimate email please send your message to ".$_POST["To"]."</p>";
//Prevent XSS attack on the email form
$xssErrorMsg = "
	<font color='#C60000'><b>Error:</b> A illegal character was detected in your url or submission.</font>
	<br><br>
	If you feel this is a error please contact us and we will look into the issue. 
	In the contact please be sure to tell us exactly what page you were on when this 
	occured and what page you came from so can fix this issue.
	<br><br>Sorry for any inconvience.
";


foreach ($_GET as $key => $v) {
	if (!preg_match("/^[\(\)\/\'\"\.\-\&\s@\?#_a-zA-Z\d]+$/",$v)            ){
	//echo "error 1: A match was found in   $key:   $v<br><br>";
	   die($xssErrorMsg);
	}
}
$mw="";
foreach ($_POST as $key => $value) {
	$_POST[$key] = strip_tags($_POST[$key]);
	$_POST[$key] = htmlentities($_POST[$key]);
	$v = $_POST[$key];
	
	if (!empty($v) AND $key!="LocOK"){
		if (!preg_match("/^[\(\)\/\'\,\"\.\\\+\!\:\;\$\%\=\-\&\s@\?#_a-zA-Z\d]+$/",$v)         ){
			//echo "error 2: A match was found in   $key:   $v<br><br>";
			die($xssErrorMsg);
		}
		
		/* prevent &#x0040 and &#00064 Type stuff  */
		if (  preg_match('/&#x([a-f0-9]+)/', $v) || preg_match('/&#0([0-9]+)/', $v) ){ 
			//echo "error 3: A match was found in   $key:   $v<br><br>";
			die($xssErrorMsg);
		}
	}
	if ($value!="Submit" AND $key != "LocOK" AND $key !="Subject" AND $key !="To" AND $key != "key"){
		if (is_array($value)){
			$mw .= "<b>$key</b>: ".implode(", ", $value)."<br />\n";
		}else{
			$mw .= "<b>$key</b>: $value<br />\n";
		}
	}
}

if ($_POST["To"]=="" || $_POST["LocOK"]=="" || $_POST["Subject"]==""){
	print "
	<H3>Error Operation Failed: Possible Reasons.</h3>
	<pre>
		-no submit to address.
		-no ok location submitted.
		-no subject submitted.
	</pre>
	";
	
}else{

	$subject = $_POST["Subject"];
	$from = $_POST["Sender"];
	$to  = $_POST["To"];
	//$to = "jim@appnet.com";
	if (isset($_POST["cc"])){ $cc  = $_POST["cc"]; }
	if (isset($_POST["bcc"])){ $bcc  = $_POST["bcc"]; }

	$message = '
	<body bgcolor="#FFFFFF">
	<style type="text/css">	
	<!--
		body {
			font-size: 9pt;
			font-family: Arial, Helvetica, sans-serif;
		}
		-->
	</style>
	<body>
	<div align="center"><A href="mailto:'.$from.'">'.$from.'</a> submitted this request from '.$_SERVER['SERVER_NAME'].'<br><br></div>
	'.$mw.'
	</body>
	';
	$mail = new PHPMailer(true); 
	$mail->IsSMTP();
	
	try {
	  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
	  $mail->SMTPAuth   = true;                  // enable SMTP authentication
	  $mail->Host       = $host; // sets the SMTP server
	  $mail->Port       = $port;                    // set the SMTP port for the GMAIL server
	  $mail->Username   = $username; // SMTP account username
	  $mail->Password   = $password;        // SMTP account password
	  
	  $mail->AddReplyTo($from,'');
	  $mail->AddAddress($to, '');
	  $mail->SetFrom($from,'');
	  $mail->AddReplyTo($from,'');
	  $mail->AddCC($from,'');
	  
	  $mail->Subject = $subject;
	  //	$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
	  $mail->MsgHTML($message);
	  //	$mail->AddAttachment('images/phpmailer.gif');      // attachment
	  //	$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
	  $mail->Send();
	  //	echo "Message Sent OK</p>\n";
	} catch (phpmailerException $e) {
	  echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} catch (Exception $e) {
	  echo $e->getMessage(); //Boring error messages from anything else!
	}
	header("Location:".$_POST["LocOK"]);
	exit;
}

?>
