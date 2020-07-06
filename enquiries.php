<!DOCTYPE html>
<html>
<head>
  <title>Javascript submit form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <script type="text/javascript" src="js/validate.js" ></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="fa/css/all.css">
</head>


  <body onLoad="document.enquiries.userid.focus();">
    <div id="main">

      <nav>
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <a href="index.html"><img src="img/Instrumentalist-logos_white1.png" class="logo" alt=""></a>
        <ul class="navigation-bar" id="nav">
            <li><a href="index.html" class="current" >Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="enquiries.php">Enquiries</a></li>
            <li><a href="login.php">Login</a></li>
            
        </ul>
    
    </nav>

    <form  action="" method="POST" class="modal-content" onSubmit="return validateForm()" name="enquiries"   >
      <div class="container">
        <h1>Enquiries</h1>
        <label for="userid"></label>
        <input type="text" placeholder="Enter  your Name" name="name1"
                id ="userName"    >
        <div class="status" id="status"></div>
        
        <label for="email"></label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" id="userEmail" >
        <div class="help-block with-errors"></div>
        
        <label for="phone"></label>
        <input type="number" placeholder="Enter Phone number"name="number1" id="subject"  >
        <label for="enquiries"></label>
        <textarea name="enquiry" id="content" placeholder="Enquiry" class="txt-area" ></textarea>
        <div class="clearfix">
        <input type="submit" name="submit" class="btn2"
                    value="submit" />
        </div>
        <div class="enq-btn">
        <a href="check.php" >Check enquiry</a>
        </div>
        
      </div>
                    

      <?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "instrumentalist";

if(isset($_POST['submit'])){
$conn = new mysqli ( $host, $dbusername,  $dbpassword, $dbname);
$name = $_POST['name1'];
$email = $_POST['email'];
$number = $_POST['number1'];
$enquiry = $_POST['enquiry'];

if (!empty($name) && (!empty($email)) && (!empty($number)) && (!empty($enquiry))) {    
    $sql = "INSERT INTO enquiries (name, email, number, enquiry) VALUES ('$name', '$email', '$number', '$enquiry')";
    $query_run = mysqli_query($conn, $sql);
    
    
}
else{
       echo 'Error!!!!';
    } 
    
}


?>
        </form>
        
    

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>


</body>
</html>