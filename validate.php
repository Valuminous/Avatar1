<?php

$to_email = "valerie.h@codeur.online";
$subject = "Email from website";
$from_email = "webmaster@promo.23.codeur.online";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$questions = $_POST['questions'];
$message = "First Name: " . ($firstname) . "\r\n" . "Last Name: " . ($lastname) . "\r\n" . "Email: " . ($email) . "\r\n" . "Telephone: " . ($phone) . "\r\n" . "Country : " . ($country) . " \r\n " . "Comments or questions : " . ($questions) . " \r\n ";
                  

if (mail($to_email, $subject, $message)) {
    echo ("Email successfully sent.");
    // echo $mcs ("Votre email a bien été envoyé.");
    } else {
    echo ("Email sending failed...");
    // echo $mcs("Votre email n'a pas été envoyé...");
}

// if (isset($firstname)) {
//     echo ("Your first name is" . $firstname);
//     echo $mcs("Votre nom est" . $firstname);
// } else {
//   // do something;
// }

// if (empty($firstname)) {
//     echo '<p>You forgot to enter your first name.</p>';
// } else {
//   // do something;
// }
// if (empty($lastname)) {
//     echo '<p>You forgot to enter your last name.</p>';
// } else {
//   // do something;
// }
    // function died($error)
    // {
    //     // your error code can go here
    //     echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    //     echo "These errors appear below.<br /><br />";
    //     echo $error . "<br /><br />";
    //     echo "Please go back and fix these errors.<br /><br />";
    //     die();
    // }
 
 
    // // validation expected data exists
    // if (!isset($_POST['firstname']) ||
    //     !isset($_POST['las_name']) ||
    //     !isset($_POST['email']) ||
    //     !isset($_POST['phone']) ||
    //     !isset($_POST['questions'])) {
    //     ('We are sorry, but there appears to be a problem with the form you submitted.');
    // }


    // $error_message = "";
    // $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/';

    // if (!preg_match($email_exp, $email)) {
    //     $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    // }

    // $string_exp = "/^[A-Za-z .'-]+$/";

    // if (!preg_match($string_exp, $firstname)) {
    //     $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    // }

    // if (!preg_match($string_exp, $lastname)) {
    //     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    // }

    // if (strlen($questions) < 2) {
    //     $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    // }

    // if (strlen($error_message) > 0) {
    //     died($error_message);
    // }



    ?>
