<?php
    $host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "instrumentalist";
	
	if(isset($_POST['submit'])){
	$conn = new mysqli ( $host, $dbusername,  $dbpassword, $dbname);


$message="";
if(count($_POST)>0) {
    $con = mysqli_connect("localhost", "root", "", "instrumentalist");
    $query="SELECT * FROM login_user WHERE u_name='" . $_POST["user_name"] . "' and pass = '". $_POST["password"]."'";
    $result = mysqli_query($con,$query);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['name'];
    
    } else {
    $message = "Invalid Username or Password!";
    }
    }
    if(isset($_SESSION["id"])) {
    header("Location:admin.php");
		}    
	}
    ?>