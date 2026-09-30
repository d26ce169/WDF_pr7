<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $number = trim($_POST["number"]);
    $password = trim($_POST["password"]);

    $filename = "data.json";

    if (file_exists($filename)) {
        $jsondata = file_get_contents($filename);
        $users = json_decode($jsondata, true);

        if (!is_array($users)) {
            $users = [];
        }
    } else {
        $users = [];
    }

    $newuser = [
        "name" => $name,
        "email" => $email,
        "number" => $number,
        "password" => $password
    ];

    $users[] = $newuser;

    $json = json_encode($users, JSON_PRETTY_PRINT);

    if (file_put_contents($filename, $json)) {
        echo "<h3>REGISTERED SUCCESSFULLY</h3>";
    } else {
        echo "<h3>Error saving data!</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Number:
    <input type="number" name="number" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>