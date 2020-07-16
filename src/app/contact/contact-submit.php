
<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require '.\assets\PHPMailer-master\src\Exception.php';
  require '.\assets\PHPMailer-master\src\PHPMailer.php';
  require '.\assets\PHPMailer-master\src\SMTP.php';

  $email= new PHPMailer(true);

  // from
  $email->From= 'example@example.com';
  $email->FromName= 'mr. example example';

  // to
  $email->addAddress("adegboye72@gmail.com");
  
  // reply to
  $email->addReplyTo("example@example.com", "reply");

  // cc & bcc
  $email->addCC("cc@example.com");
  $email->addBCC("bcc@example.com");

  // send html or plain text
  $email->isHTML(true);

  $email->Subject= 'subject here.';
  $email->Body= '<i>message boddy in html here...</i>';
  $email->AltBody= 'message boddy in plain text here...';

  // send
  try{
    $email->send();
    echo 'Mail sent successfully';
  }catch(Exception $e){
    echo 'Mail Not Sent, error: ' . $email->ErrorInfo;
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

  }

  require_once "contactForm.php";*/

?>

