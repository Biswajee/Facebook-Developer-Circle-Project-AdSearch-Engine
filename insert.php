<!DOCTYPE HTML>
<html>
<head>
    <title>Insert New Element</title>
</head>
<body>
    
<form action="insert.php" method="post" enctype="multipart/form-data">
    
    
    
 <table width="500" border="2" cellspacing="2" align="center">
    
     <tr><td colspan="2" align="center"><h2>Inserting New Website</h2></td></tr>
    <tr><td align="right">Site Title: </td><td><input type="text" name="site_title" /></td></tr>
    <tr><td align="right">Site Link: </td><td><input type="text" name="site_link" /></td></tr>
    <tr><td align="right">Site Keywords: </td><td><input type="text" name="site_keywords" /></td></tr>
    <tr><td align="right">Site Description: </td><td><textarea cols="16 rows="8" name="site_desc"></textarea></td></tr>
    <tr><td align="right">Site Image: </td><td><input type="file" name="site_image" /></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" name="submit" value="Add Site Now" /></td></tr>
    
    
    
    </table>   
     
    </form>    
    
    
</body>
</html>
        
        
<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "search");
if(isset($_POST['submit'])){

 $site_title = $_POST['site_title'];
 $site_link = $_POST['site_link'];
 $site_keywords = $_POST['site_keywords'];
 $site_desc = $_POST['site_desc'];
 $site_image = $_FILES['site_image']['name'];
 $site_image_tmp = $_FILES['site_image']['tmp_name'];
    
    
    
    
if($site_title=='' OR $site_link=='' OR $site_keywords=='' OR $site_desc==''){

echo "<script>alert('Please fill all the Fields')</script>";
    exit();

}else{
 
    
$insert_query = "insert into sites (site_title, site_link, site_keywords, site_desc, site_image) values ('$site_title','$site_link','$site_keywords','$site_desc','$site_image')";
    
move_uploaded_file($site_image_tmp,"images/{$site_image}");

if(mysqli_query($con, $insert_query)){

echo "<script>alert('Data Inserted')</script>";

} 
    
}

}


?>