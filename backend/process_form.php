<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $pronouns = htmlspecialchars($_POST['pronouns']);
    $area = htmlspecialchars($_POST['area']);
    $message = htmlspecialchars($_POST['Message']);

    $to = "julianeanjos034@gmail.com";
    $subject = "New Contact Request from TechInVision";
    $body = "Name: $name\nPronouns: $pronouns\nArea: $area\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: ../pages/thankyou.html");
    } else {
        header("Location: ../pages/error.html");
    }
    exit();
}
?>
