<?php
// define variables and set to empty values
$firstname = $lastname = $email = $phone = $questions = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $questions = test_input($_POST["questions"]);
    $country = test_input($_POST["country"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["lastname"])) {
            $lastnameErr = "Last name is required";
        } else {
            $lastname = test_input($_POST["lastname"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }

        if (empty($_POST["questions"])) {
            $questions = "Add a question or comment";
        } else {
            $questions = test_input($_POST["questions"]);
        }

        if (empty($_POST["country"])) {
            $countryErr = "Country is required";
        } else {
            $country = test_input($_POST["country"]);
        }
    }
  


    if (isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "valerie.h@codeur.online";
        $email_subject = "Message du site web";
    }
    ?> 