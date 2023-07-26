<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['comment'];

    $mailTo = "phuongltt.hvsg@gmail.com";
    $headers = "From Customer: " . $mailFrom;
    $txt = "You have received an email from".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("location: index.html?mailsend");

}

?>