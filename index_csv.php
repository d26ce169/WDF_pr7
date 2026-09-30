<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    $file = fopen("data.csv", "a");

    fputcsv($file, [$name, $email]);

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

    <button type="submit">Submit</button>

</form>

</body>
</html>
