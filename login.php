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
        // $First_Name=$_POST["Fname"];
        // $Last_Name=$_POST["Lname"];
        $Password=$_POST["Password"];
        $Email=$_POST["Email"];
        // $Gender=$_POST["Gender"];
        
        
    
    $sql= "SELECT * FROM proj WHERE Email = '$Email' AND Password = '$Password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            header("Location:dashboard.php");
            exit;
        }else{
            echo "Invalid Email or Password";
        }
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
            <h2>LOGIN</h2>
            <div class="input-group">
            <label for="Name">Email</label>
            <input type="text" name="Email" id="" required>
        </div>
        <div class="input-group">
            <label for="Name">Password</label>
            <input type="Password" name="Password" id="" required>
        </div>
        <a href=""> Forgot Password?</a>
        <button type="Submit" value="Submit" name="Submit">LOGIN</button>
            <br>
            
            
            <p>Don't have an account? <a href="form.php"><b>Register here</b></a></p>
        </form>
</body>
</html>