<body>
<form method="POST" action="Reset.php">
    Email: <input type="text" name="email">
    <input type="submit" value="verstuur" name="submit">


<?php

include_once 'DatabaseConnect.php';
$connect = new DatabaseConnect();
$db = $connect->connect();

if(isset($_POST['email'])) {
    $customerID = $_POST['email'];
    $stmt = $db->prepare("SELECT * FROM  where email='" . $customerID . "'");
    $row = ($stmt);
    $fetch_email = $row['email'];
    $email_id = $row['email'];
    $password = $row['wachtwoord'];
    if ($customerID == $fetch_email) {
        $to = $email_id;
        $subject = "Wachtwoord";
        $txt = "Uw wachtwoord is : $password.";
        mail($to, $subject);
    } else {
        echo 'geen gebruiker gevonden';
    }
}
