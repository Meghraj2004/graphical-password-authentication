<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $pass=$_POST["password"];
    $gpa=$_POST["gpa"];
   
    // MySQL server credentials
    $servername = "localhost"; // Change this to your MySQL server hostname
    $username = "root"; // Change this to your MySQL username
    $password = ""; // Change this to your MySQL password
    $database = "db1"; // Change this to your MySQL database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $string = $gpa;
    // $gpa = password_hash($string, PASSWORD_DEFAULT);
   
    
// SQL query to select data from table
$sql = "SELECT * FROM users"; // Replace "your_table" with your actual table name

// Execute query
$result = $conn->query($sql);

// Check if query was successful
if ($result) {
    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
           // echo "Name: " . $row["name"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
            if($email==$row["email"] && $pass==$row["password"] && $gpa==$row["GPA"])
            {
                header("Location:index.html");
                 exit;
            }
            
        }
        
            echo "<h1>You don't have any account please register first !!!</h1>";
        
    } else {
        echo "0 results"; // No rows found
    }
} else {
    echo "Error: " . $conn->error; // Query execution failed
}
}
?>