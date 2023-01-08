<?php

If (isset($_POST['Send Message'])) {

    $name = $_POST['name'];
    $subject = $_POST['email'];
    $mailFrom = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jraggent@uoguelph.ca";
    $headers = "From: $mailFrom via Website Portfolio";
    $txt = "You have receved an email from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend");
}



?>