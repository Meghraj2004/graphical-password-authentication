<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["username"];
    $email = $_POST["email"];
    $pass=$_POST["password"];
    $gpa = $_POST["gpa"];

    // MySQL server credentials
    $servername = "localhost"; // Change this to your MySQL server hostname
    $username = "root"; // Change this to your MySQL username
    $password = ""; // Change this to your MySQL password
    $database = "db1"; // Change this to your MySQL database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // $string = $gpa;
    // $gpa = password_hash($string, PASSWORD_DEFAULT);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }
    // SQL query to insert data into table
    if(!$gpa==""){
         $sql = "INSERT INTO users VALUES ('$name', '$email','$pass','$gpa')";
    }else{
        header("Location: Registration.html");
    }


    

if ($conn->query($sql) === TRUE) {
    header("Location: login.html");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    // Close connection (optional)
    $conn->close();
}
    


?>