<?php
require 'server.php';
?>

<?php 
    if(isset($_POST['email'])){
        
        $email_to = "londontoursuks@gmail.com";
        $email_subject = "Customer enquiry | London Tours";
        function died($error){
            echo "<h5>Error, please try again later.</h5>";
            die();
            
        }
    }elseif (!isset($_POST['name'])  ||
       !isset($_POST['email']) ||
       !isset($_POST['reason'])||
       !isset($_POST['message'])) 
    {
       echo-("Apologies, it appears there is a problem with the form you submitted .");
    } 
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $message = $_POST['message'];
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
    
    if(!(preg_match($string_exp,$name))){
        $error_message .= 'Please check the details entered in the name field <br />';
    }
    if(strlen($message) < 3){
        $error_message .= 'The message you are trying to send has to be more than three characters <br />';
    }
    if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "An email sent from London Tours website, please see details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
    $email_message .= "------------------------------------------\n";                    
    $email_message .= "Customer Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Reason: ".clean_string($reason)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    $email_message .= "------------------------------------------\n";
    
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);  
    
    echo '<h3 style="color:#4BB543">Thank you for contacting us ! We will get back to you as soon as possible ! </h3>';
            
    ?>
