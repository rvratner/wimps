<?php

// require_once "Mail.php";

// $from = '<rachelratner@gmail.com>';
// $to = '<wimpsmail@gmail.com>';
// $subject = 'Hi!';
// $body = "Hi,\n\nHow are you?";

// $headers = array(
//     'From' => $from,
//     'To' => $to,
//     'Subject' => $subject
// );

// $smtp = Mail::factory('smtp', array(
//         'host' => 'ssl://smtp.gmail.com',
//         'port' => '465',
//         'auth' => true,
//         'username' => 'wimpsmail@gmail.com',
//         'password' => 'Davelikespizza69'
//     ));

// $mail = $smtp->send($to, $headers, $body);

// if (PEAR::isError($mail)) {
//     echo('<p>' . $mail->getMessage() . '</p>');
// } else {
//     echo('<p>Message successfully sent!</p>');
// }

// ?>

<?php
    include('Mail.php');
    $mail = Mail::factory("mail");

    $headers = array("From"=>"me@example.com", "Subject"=>"Test Mail");
    $body = "This is a test!";
    $mail->send("wimpsmail@gmail.com", $headers, $body);
?>