<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['E-mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($firstname) || empty($lastname) || empty($mailFrom) || empty($subject) || empty($message)) {
        header("Location: ../contact.php?mailsent=empty");
    } else {
        if (filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../contact.php?mailsent=invalidemail");
        }
    }

    $mailTo = "edwyn__4@hotmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have recieved an e-mail from " . $firstname . $lastname .
            " regarding the following subject. " . " \n\n " .
            " Subject is: " . $subject . " . \n\n " . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsent");
} else {
    header("Location: ../contact.php?mailsent=error");
}

?>