<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $file = fopen("data.txt", "a");

    fputcsv($file, [$name, $email, $number]);

    fclose($file);

    echo "Data saved successfully!";
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
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Number:
    <input type="number" name="number">
    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>