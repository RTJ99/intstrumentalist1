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
            
            
        </ul>
    
    </nav>

    <form action="reply.php" method="POST">
        CLIENT_ID:
        <input type="text" name="Client_ID" id="">
        <br>
        <br>
        RESPONSE:
        <textarea name="response1" id="" cols="30" rows="10" style="font-family: 'Times New Roman', Times, serif;"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="RESPOND" class="btn">
        
    </form>
        <?php

// php code to Update data from mysql database Table

if(isset($_POST['submit']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "instrumentalist";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   if(isset($_POST['response1']))
    {
   $query = "UPDATE `enquiries` SET `response`='".$_POST['response1']."' WHERE `email` = '". $row['name'] ."'";
   $result = mysqli_query($connect, $query);
   $row = mysqli_fetch_array($result);
   $id = $row['name'] ;
   $response = $_POST['response1'];

           
   // mysql query to Update data
   $query = "UPDATE `enquiries` SET `response`='".$response."' WHERE `email` = 'e@gmail.com'";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}
}
else{
    echo"akdhk";
}
?>
    </form>


</body>
</html>



