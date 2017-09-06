<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign_up form : : CodeKings</title>
  
  
  
      <link rel="stylesheet" href="css/style_signup.css">

  
</head>

<body>
   <img src="images/logo.png" width="30%" height="30%" />
  <div class="login-page">
  <div class="form">
   <p align=center><font face="Arial" color=#2ECC71>*Enter all the <b>Fields</b></font></p>
  
    <form class="login-form" action="sign_up.php" method="post" enctype="multipart/form-data">
      
        <input type="text" name="username" placeholder="username"/>
      <input type="text" name="email" placeholder="E-Mail"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="password" name="password2" placeholder="repeat password"/>
      <button type="submit" name="submit" value="create account">Create my Account</button>
      
    </form>
      <p class="message">Already registered? <a href="login.html">Click here to login</a></p>
  </div>
</div>
 

  <!-- <script src="js/index.js"></script>-->

</body>
</html>


<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "search");
if(isset($_POST['submit'])){

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password2 = $_POST['password2'];
 
   
        
if($username=='' OR $email=='' OR $password=='' OR $password2==''){

echo "<script>alert('Please fill all the Fields')</script>";
    exit();

}else if($password!=$password2){
    
  echo "<script>alert('The passwords do not Match !')</script>";
    exit();  
    
}else{
 
    
$insert_query = "insert into users (username, email, password) values ('$username','$email','$password')";
    
if(mysqli_query($conn, $insert_query)){

echo "<script>alert('Your Account has been successfully created. Please go back and Login Again')</script>";

} 
    
}

}


?>
