<?php
if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $mailFrom = $_POST['mail'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $mailTo = "anand92490@gmail.com";
     $headers = "From: My Portfolio Website";
     $txt = "You've got a mail from".$name.".\n\n".$message;

     mail($mailTo, $subject, $txt, $headers);
     header("Location: contact.html?mailsend");
}

?>