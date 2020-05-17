<html>
<head>
<link rel="stylesheet" href="web.css" type="text/css">
     </head>
     <body>
     <a href="#" class="l_log"><img src="logo.png" alt="logo" height="50px" width="150px" class="logo"></a>
     <div class="head">  
     <a href="login_page.php">LOGIN</A>
     </div>
     <br>
     <div class="content">
     <center>
     <form name = "frm" method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
     <fieldset class = "fs">
     <legend>SIGN UP</legend>
     <table cellspacing = 20px>
     <tr>
     <td> Name </td>
     <td> <input type="textbox" name = "uname"> </td>
     </tr>
     <tr>
     <td> Email </td>
     <td> <input type="textbox" name = "ema"> </td>
     </tr>
     <tr>
     <td> Password </td>
     <td> <input type="password" name = "pass"> </td>
     </tr>
     <tr>
     <td colspan="2" align = "center"><input type = "submit" name = "btn" value="submit"></td>
     </tr>
     </table>
<?php
     if(isset($_POST['btn'])){
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "website";
         $conn = mysqli_connect($servername,$username,$password,$database);
         if(!$conn){die("connection not established");}
         if($_POST['uname'] != "" && $_POST['pass'] != "" && $_POST['ema'] != ""){
             $sql = "insert into login values('".$_POST['uname']."','".$_POST['pass']."','".$_POST['ema']."')";
             $result = $conn->query($sql);
             $conn->close();
             header("Location: login_page.php");
             exit;
         }
         
         else{
             echo "<centre>Enter each and every date</centre>";
         }
     }	
?>
     </fieldset>
    </center>
</form>
</div>
</body>
</html>