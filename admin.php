<!DOCTYPE html>
<html>
<head>
  <title>Javascript submit form</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <script type="text/javascript" src="js/validate.js" ></script>
  <link rel="stylesheet" href="css/main.css">
  
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
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    
    </nav>

    <form  action="" method="POST" class="modal-content" onSubmit="return validateForm()" name="enquiries"   >
      <div class="container">
        
        
        <div class="clearfix">
        <input type="submit" name="submit" class="btn2"
                    value="check enquiry" />

                    
        </div>
        
        
      </div>
                    

      <?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "instrumentalist";

if(isset($_POST['submit'])){
$conn = new mysqli ( $host, $dbusername,  $dbpassword, $dbname);
$sql = "SELECT  * from enquiries";

                        if($result = mysqli_query($conn, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo"<div class ='enquiriesAD'>" ;
                                    echo "<h4> Name:\r\r". $row['name'] ."</h4>\n";
                                    echo "<h4>Number:\r\r". $row['number'] ."</h4>\n";
                                    echo "<h4>Email:\r\r". $row['email'] ."</h4>\n";
                                    echo "<h4>Enquiry:\r\r". $row['enquiry'] ."</h4>\n";
                                    echo "<h4>Response:\r\r". $row['response'] ."</h4>\n";
                                    
                                    echo" <textarea name='response1' cols='30' rows='10' style='padding:0'></textarea>";
                                    echo"<div style =' margin-top:5px; overflow:hidden'>";
                                    
                                    echo"<a  style ='color:white; background-color: #627777 ;padding:5px; border-radius:10px; text-decoration:none;'href='#'>Respond</a>";
                                    echo"</div>";
                                    echo "</div>";
                                }
                            }
                        }
                    }


                                   
?>
        </form>
        
    



</body>
</html>

