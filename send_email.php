<?php
  $to = "me.aajinkya@gmail.com";

  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
  $finalcomment= <<<EOT
comments are"$comment ". 
senderName is "$name ". 
senderEmail is "$email ".
senderPhone is "$phone ". 
EOT;
if(!(mail($to, $subject, $finalcomment, "From:".$email)))
   header("Location: index.html");
else 
echo "Thank You!";
?>
