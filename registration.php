<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$country= $_POST['country'];
$city= $_POST['city'];
$region= $_POST['region'];
$pin= $_POST['pin'];

// Database Connection

$conn = mysqli_connect("localhost", "root", "", "amtrondb");
if ($conn-> connect_error) {
    die("Connection failed: " .$conn->connect_error);
}else
{
    $stmt = $conn->prepare("Insert into registration (name, email, phone, dob, gender, address1, address2, country, city, region, pin)
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stnt->bind_param("ssissssssi", $name, $email, $phone, $dob, $gender, $address1, $address2, $country, $city, $region, $pin);
    $stmt->execute();
    echo "Your registration is sucessfully completed";
    $stmt->close();
    $conn->close();
}
?>
