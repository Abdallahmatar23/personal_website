<?php
// session_start();

function trimFields($field)
{
    return trim($field);
}
function removeHtml($field)
{
    return htmlspecialchars($field);
}

// حل اخر
function sanitizeFields($field)
{
    $tfield = trim($field);
    $sfield = htmlspecialchars($tfield);
    return $sfield;
}
function validateRequired($value, $fieldName)
{
    return empty($value) ? "$fieldName is required" : null;
}


function validateEmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? null : "Enter Valid Email";
}

function validatePhone($phone)
{
    $pattern = "/^(\\+20|0)1[0-5][0-9]{8}$/";
    return (preg_match($pattern, $phone)) ? null : "Invalid Phone Number";
}

function validateMessage($message)
{
    return (strlen($message) > 5 && strlen($message) < 500) ? null : "Message Must Be Between 5 And 500 chars";
}


function contactValidation($name, $address, $phone, $message)
{
    $fields = [
        'name' => $name,
        'email' => $address,
        'phone' => $phone,
        'message' => $message
    ];

    foreach ($fields as $key => $val) {
        // $val =trimFields($val);  
        // $val =removeHtml($val);  
        if ($error = validateRequired($val, $key)) {
            return $error;
        }
    }

    if ($error = validateEmail($address)) {
        return $error;
    }

    if ($error = validatePhone($phone)) {
        return $error;
    }
    if ($error = validateMessage($message)) {
        return $error;
    }

    return true;
}
