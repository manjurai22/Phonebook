<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$phonenum = $_POST['phonenum'];  
$Email = $_POST['Email'];
$gender = $_POST['gender'];
$country = $_POST['country'];

# Database connection
$conn = new mysqli('localhost', 'root', '', 'phonebook');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $statement = $conn->prepare("INSERT INTO registration (firstName, lastName, address, phonenum, Email, gender, country) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $statement->bind_param("sssssss", $firstName, $lastName, $address, $phonenum, $Email, $gender, $country);
    $statement->execute();
    echo "Registration successful";
    $statement->close();
    $conn->close();
}
?>
