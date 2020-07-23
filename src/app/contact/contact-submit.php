
<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require '.\assets\PHPMailer-master\src\Exception.php';
  require '.\assets\PHPMailer-master\src\PHPMailer.php';
  require '.\assets\PHPMailer-master\src\SMTP.php';

  $email= new PHPMailer(true);

  // from
  $email->From= 'from@example.com';
  $email->FromName= 'mr. example example';

  // to
  $email->addAddress("adegboye72@gmail.com");
  
  // reply to
  $email->addReplyTo("replyto@example.com", "Reply To");

  // cc & bcc
  $email->addCC("cc@example.com");
  $email->addBCC("bcc@example.com");

  // send html or plain text
  $email->isHTML(true);

  $email->Subject= 'subject here.';
  $email->Body= '<i>message body in html here...</i>';
  $email->AltBody= 'message body in plain text here...';

  // send
  /*try{
    $email->send();
    echo 'Mail sent successfully';
  }catch(Exception $e){
    echo 'Mail Not Sent, error: ' . $email->ErrorInfo;
  }*/

  // new send
  if(!$email->send()){
    echo 'Message not sent o!';
    echo 'Mailer Error: ' . $email->ErrorInfo;
  }else{
    echo 'Message has been sent.';
  }

  /*if(isset($_POST['submit'])){
    function sanitizeEmail($field){
      $field= filter_var($field, FILTER_SANITIZE_EMAIL);
      
      if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return true;
      }else{
        return false;
      }
    }
  
    $to= 'adegboye72@gmail.com';
    $subject= 'Contact Us Form';
    $message= 'message sent using php mail function.';
    $headers= 'From: Contact Us @ laurel-ng.herokuapp.com';
  
    // check if email address is valid or not.
    $secureCheck= sanitizeEmail($to);
    if($secureCheck == false){
      echo "Invalid recipient email.";
    }else{
      // send email.
      mail($to, $subject, $message, $headers);
      echo 'email sent!';
    }

  }*/

  // require_once "contactForm.php";

?>

