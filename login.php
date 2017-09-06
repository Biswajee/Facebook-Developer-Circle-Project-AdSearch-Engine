<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form : : CodeKings</title>
  
  
  
      <link rel="stylesheet" href="css/style_signup.css">
        <link rel="stylesheet" href="css/bootstrap.css">

  
</head>

<body background="images/wall.jpg">
    
    <img src="images/logo.png" width="30%" height="30%" />
     
  <div class="login-page">
  <div class="form">
   <p align=center><font face="Arial" color=#2ECC71>Enter your <b>Login Credentials</b></font></p>
  
    <form class="login-form" action="login.php" method="POST">
      <input type="text" name="usr" placeholder="username"/>
      <input type="password" name="pwd" placeholder="password"/>
      <button type="submit" value="submit" name="submit">login</button>
      <p class="message">Not registered? <a href="sign_up.php">Create an account</a></p>
    </form>
  </div>
</div>


</body>
</html>



 <?php
 
$conn = mysqli_connect("localhost","root","");
 mysqli_select_db($conn, "search");


 if(isset($_POST['submit'])){

     
    /*  $usr_val=$_POST['usr'];
      $pwd_val=$_POST['pwd'];

if($usr_val=='' or pwd_val==''){
 echo "<script>alert:'Please insert all the fields !'</script>";
 exit();
 }*/


 $query="select * from users where username =aaa and password =aaa";
     
      $run_result = mysqli_query($conn, $query);
echo "$run_result";
     if($run_result == null){
     
     echo "<script>alert:'Oops!! Sorry, Nothing was found in the Database!'</script>";
        
         
    }else{
     header("Location:insert.php");
    
     
     }

 }
mysqli_close($conn);
 ?>