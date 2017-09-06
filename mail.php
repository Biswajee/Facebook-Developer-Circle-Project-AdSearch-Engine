<!DOCTYPE html>
<html>
    
    <head><title>MailSender</title></head>
    <body>
        
        <form action="mail.php" method="post">
    <table border="4px" align="center" cellspacing="5">
            <tr>
            <td colspan="2" align="center"><h2>Send Email :</h2></td>
            
            </tr>
            <tr>
            <td align="right">Ad ID:</td><td><input type="text" name="ad_id" size="45" /></td>
            </tr>
        
        <tr>
        <td align="right">Your Email:</td><td><input type="text" name="your_email" size="45" /></td>
        </tr>
        <tr>
            <td align="right">Contact No:(Optional)</td><td><input type="text" name="contact" size="45" /></td> 
        </tr>
        <tr>
            <td align="right">Subject:</td><td><input type="text" name="subject" size="45" /></td>
        </tr>
        <tr>
            <td align="right">Why Choose Me??</td><td><textarea cols=40 rows=8 name="query" ></textarea></td>
        </tr>
            <tr><td colspan="2"><center><input type="submit" name="submit" value="Send it" /></center></td></tr>
        
        
            </table></form>
    
    
    </body>



</html>


<?php

$ads_id = $_POST['ad_id'];
$email = $_POST['your_email'];
$subject = $_POST['subject'];
$msg = $_POST['query'];




if($msg=='' OR $email=='' OR $ads_id=='' OR $subject=='')
{
echo "<script>alert('Please Enter all the Fields')</script>";
    exit();
}else{

mail($email,$subject,$msg,$ads_id);
    echo "<script>alert('Thank You, Your mail has been sent')</script>";
}
?>