<?php

require "validations.php";
require "functions.php";
// print_r($_POST['name']);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // $name = $_POST['name'];
    // $address = $_POST['address'];
    // $phone = $_POST['phone'];
    // $message = $_POST['message'];
    $name = sanitizeFields($_POST['name']);
    $address = sanitizeFields($_POST['address']);
    $phone = sanitizeFields($_POST['phone']);
    $message = sanitizeFields($_POST['message']);

    $error = contactValidation($name, $address, $phone, $message);

    if ($error !== true) {
        setMessage("danger", $error);
        header('Location:../views/contact.php');
        exit;
    }
    if (saveContact($name, $address, $phone, $message)==true) {
        setMessage("success", "The contact info is added successfully we will call you soon");
        header('Location:../index.php');
        exit;
    }
}

// test
// saveContact(sanitizeFields("abdallah   @    "), sanitizeFields("abdallahmatar25@gmail.com   "), sanitizeFields("    @01204     267500       "), sanitizeFields("      kslfhdgkhsj hsdkjhadkljhs hfadjkhdf"));
