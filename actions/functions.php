<?php
session_start();


//setMessage
function setMessage($type, $alert)
{
    $_SESSION['alert'] = [
        'type' => $type,
        'error' => $alert
    ];
}
//showMessage
function showMessage()
{
    if (isset($_SESSION['alert'])) {
        $type = $_SESSION['alert']['type'];
        $alert = $_SESSION['alert']['error'];

        echo "<div class= 'alert alert-$type'>$alert</div>";
        // test
        // var_dump($alert);
        // var_dump($type);
        unset($_SESSION['alert']);
    }
}


function saveContact($name, $address, $phone, $message)
{
    $file = "../data/contactInfo.json";
    $contactData = [
        "name" => $name,
        "address" => $address,
        "phone" => $phone,
        "message" => $message
    ];

    $oldData = file_get_contents($file);
    $oldDataContact = json_decode($oldData, true);
    $oldDataContact[] = $contactData;

    file_put_contents($file, json_encode($oldDataContact, JSON_PRETTY_PRINT));

    // return var_dump(is_writable($file));
    return true;
}

function getContacts()
{
    $file = __DIR__ . "/../data/contactInfo.json";
    $dataJson = file_get_contents($file);
    return file_exists($file) ? json_decode($dataJson, true) : [];
}



// function saveContact($name, $address, $phone, $message)
// {
//     $file = __DIR__ . '/../data/contactInfo.json';
//     if (file_exists($file) && filesize($file) > 0) {
//         $contacts = json_decode(file_get_contents($file), true) ?? [];
//     }
//     $contacts[] = [
//         'name' => $name,
//         'address' => $address,
//         'phone' => $phone,
//         'message' => $message
//     ];

//     file_put_contents($file, json_encode($contacts, JSON_PRETTY_PRINT));
//     var_dump(is_writable($file));
//     return true;
// }
