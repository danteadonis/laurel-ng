
<?php
  if(!empty($_POST['contactForm'])){
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

  require_once "contactForm.php";

?>

