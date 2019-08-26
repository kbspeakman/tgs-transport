<?php

if(!isset($_POST['submit']))

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

if(empty($name)||empty($visitor_email))
{echo "Name and email are mandatory!";
exit;
}

$email_from='kbspeakman14@gmail.com';
$email_subjet= "FORM TEST WORKING";
$email_body "it worked. Email from $name. \n". "email address: $visitor_email\n".

$to='kbspeakman14@gmail.com'
$headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

function IsInjected($str)
  {
      $injections = array('(\n+)',
             '(\r+)',
             '(\t+)',
             '(%0A+)',
             '(%0D+)',
             '(%08+)',
             '(%09+)'
             );
                  
      $inject = join('|', $injections);
      $inject = "/$inject/i";
       
      if(preg_match($inject,$str))
      {
        return true;
      }
      else
      {
        return false;
      }
  }
   
  if(IsInjected($visitor_email))

  {
      echo "Bad email value!";
      exit;
  }
  ?>
  
  ?>