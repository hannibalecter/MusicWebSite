<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 12.05.2017
 * Time: 00:23
 */

$activePage = "contact";
$title = "Contact";
$result = "";

//TODO: Array ( [type] => 2 [message] => mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() [file] => C:\Users\erens\OneDrive\Belgeler\GitHub\MusicWebSite\contact.php [line] => 88 )


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && isset($_POST['submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "erensozen94@gmail.com";
    $email_subject = "MusicWebSite";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['phone']; // not required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }


    if(strlen($message) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }



    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }


    $email_message = "First Name: ".$name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Comments: ".$message."\n";

    $body = "From: $name\n E-Mail: $email_from\n Message:\n $message";
// create email headers
    $headers = "From: ".$email_from."\r\n".
        "Reply-To: ".$email_from."\r\n".
        "Content-type: text/html; charset=iso-8859-1\r\n";


    $success = @mail($email_to, $email_subject, $body, $headers);

    if($success)
        $result .= "Thank you for contacting us. We will be in touch with you very soon.";
    else{
        $result = "error";
        print_r(error_get_last());

    }

}

require_once("PresentationLayer/contact_pre.php");
?>
