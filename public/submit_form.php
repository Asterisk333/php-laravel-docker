<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Read data from Json-File
    $file = 'messages.json';
    if (file_exists($file)) {
        $json_data = file_get_contents($file);
        $data_array = json_decode($json_data, true);
    } else {
        $data_array = array();
    }

    // Add new Entry
    $new_data = array('name' => $name, 'email' => $email, 'message' => $message);
    $data_array[] = $new_data;

    // Convert to Json and write output
    $json_data = json_encode($data_array, JSON_PRETTY_PRINT);
    file_put_contents($file, $json_data);

    // Send E-Mail
    // mail('sean.kessi@hftm.ch', 'Neue Nachricht von: '. $name, $message, 'From: ' . $email);
}

