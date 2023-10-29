<?php
$Firstname = $_POST['firstname'];
$Lastname =$_POST['lastname'];
$gender=$_POST['gender'];

$email = $_POST['email'];
$phone =$_POST['phone'];
$password=$_POST['password'];
$confirmpassword=$_POST['conpassword'];


 $host = "localhost";
    $dbUsername = "id10998604_blockbustercineplex";
    $dbPassword = "12345678";
    $dbname = "id10998604_blockbustercineplex_database";

    $conn = new mysqli($host, $dbUsername, $dbPassword,$dbname);

    $sql = "INSERT INTO registration (FirstName, LastName,gender,E_mail,phone,password,confirm_password)
    values('$Firstname','$Lastname','$gender','$email','$phone','$password','$confirmpassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



    /*if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
     //$SELECT = "SELECT id From Loginform Where id = ? Limit 1";
     $INSERT = "INSERT Into Loginform (id, password) values($id,'$password')";

     $stmt->close();*/
     $conn->close();


?>
