<?php

require_once 'php/DBBlackbox.php';
require_once  'php/data.php';



$message = [];

if (!empty($_GET['id'])) {
    $mail = find($_GET['id']);
    //$mail = $data['title'];
} else {
    $mail = [
        'first_name' => null,
        'surname' => null,
        'email' => null,
        'phone' => null,
        'long_text' => null,
    ];
}

//dd($_GET);

if ($_POST) {
    $mail['first_name'] = isset($_POST['first_name']) ? $_POST['first_name'] : $mail['first_name'];
    $mail['surname'] = isset($_POST['surname']) ? $_POST['surname'] : $mail['surname'];
    $mail['email'] = isset($_POST['email']) ? $_POST['email'] : $mail['email'];
    $mail['phone'] = isset($_POST['phone']) ? $_POST['phone'] : $mail['phone'];
    $mail['long_text'] = isset($_POST['long_text']) ? $_POST['long_text'] : $mail['long_text'];



    $valid = true;
    
    if ($mail['email'] == '') {
        $message[] = 'not valid';
        $valid = false;
    }

    if ($valid) {
        if(!empty($_GET['id'])) {
            update($_GET['id'], $mail);
            $id = $_GET['id'];
        } else {
            $id = insert ($mail);
        }

        header('Location: form.php?success=1&id='.$id);
    }
}

