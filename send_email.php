<?php
  $to = "me.aajinkya@gmail.com";

  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];

$str = "comments are $comment senderName is $name senderEmail is $email senderPhone is $phone ". 
if(!(mail($to, $subject, $str, "From: ".$email)))
   header("Location: index.html");
else 
    echo "Thank You!";
?>
