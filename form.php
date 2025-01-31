<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
If(!$conn) {
    die("connection failed: ".  mysqli_connect_error());
    }
        if (isset($_POST["Submit"])){
        
        // $Staff_ID=$_POST["Staffid"];
        $First_Name=$_POST["Fname"];
        $Last_Name=$_POST["Lname"];
        $Password=$_POST["Password"];
        $Email=$_POST["Email"];
        $Gender=$_POST["Gender"];
        
        
    
    $sql= "INSERT INTO proj (`Fname`, `Lname`, `Password`, `Email`, `Gender`) VALUES(
        '$First_Name', '$Last_Name', '$Password', '$Email', '$Gender')";
        // If(mysqli_query($conn, $sql)){
        // echo"New record created successfully";
        // } else{
        // echo "error: ". "<br>" . $sql. Mysqli_error($conn);
        // }
        mysqli_query($conn, $sql);
        header("Location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>CREATE ACCOUNT</h2>
            <div class="input-group">
            <label for="Name">First Name</label>
            <input type="text" name="Fname" id="" required>
        </div>
        <div class="input-group">
            <label for="Name">Last Name</label>
            <input type="text" name="Lname" id="" required>
        </div>
        <div class="input-group">
            <label for="Password">Password</label>
            <input type="Password" name="Password" id="" required>
        </div>
            <div class="input-group">
            <label for="Email">Email</label>
            <input type="Email" name="Email" id="" required>
        </div>
            <div class="input-group">
            <label for="Gender">Gender</label>
            <input type="text" name="Gender" id="" required>
        </div>
        <input type="checkbox" name="" id="" required>
        I agree to the <a href=""> terms of conditions</a>
        <br>
            <button type="Submit" value="Submit" name="Submit">SIGN UP</button>
            <br>
            
            
            <p>Already have an account? <a href="login.php"><b>Login here</b></a></p>
        </form>
</div>
</body>
</html>