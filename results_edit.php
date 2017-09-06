<!DOCTYPE HTML>
<html>
<head><title>Results</title>
 
<style type="text/css">
    division {
    
        margin-left="80px";
    }
        a:hover{
            font-weight:bold;
            color:green;
            }
    a {
        text-decoration:none;
    }
</style>    
<link rel=stylesheet href="css/bootstrap.css">
</head>
<body background="images/back_img.png">
    <form action="results_edit.php" method="post">
    
<span><img src="images/logo-copy.png" height=50 width=360 /></span>

 <input type="text" name="user_query" size="80" placeholder="Type anything to search..." /> 
    <input type="submit" name="search" value="Search Now" />

    </form>   
    
    
    <?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "search");

$get_value = $_POST['user_query'];

if(isset($_POST['search'])){
    
    $get_value = $_POST['user_query'];
    
    if($get_value == ''){
    
    echo "<center><b>Please Enter Something in the Search Box</b></center>";
    goto ABC;
    
    }
    
    $result_query="select * from sites where site_keywords like '%$get_value%'";
    
    $run_result = mysqli_query($con, $result_query);
    
    if(mysqli_num_rows($run_result)<1){
    
    echo "<center><b>Oops!! Sorry, Nothing was found in the Database!</b></center>";
    exit();
    
    }
    
    while($row_result=mysqli_fetch_array($run_result)){
        
        $site_id = $row_result['site_id'];
        $site_title = $row_result['site_title'];
        $contact_email = $row_result['contact_email'];
        $site_link = $row_result['site_link'];
        $site_desc = $row_result['site_desc'];
        $site_image = $row_result['site_image'];
    

    echo "<div class='division'>
    
    <table>
    <tr><td><a href='http://$site_link'><img src='images/$site_image' width='300' height='175' /></a></td>
    <td><h2>$site_title</h2>
    <h4><p>Ad ID : $site_id</p></h4>
     <a href='$site_link' target='_blank'>$site_link</a>
    <p align='justify'><i><b>$site_desc</b></i><b> || </b>
    <a href='mail.php'>Support E-Mail: $contact_email</a></p>
    </td>
    </tr>
    
    </table>
    <hr color='black'>
    
    </div>";

    }

}


    ABC:
           echo "<script>

    

    function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
    
          document.getElementById(\"content\").innerHTML += \"<br>\" + item.htmlTitle +\"    \" + item.link + \"<br><hr color='black'><br>\";
    
      }
    }
</script>
<script src=\"https://www.googleapis.com/customsearch/v1?key=AIzaSyCE7HpIsEW950_tC1KLWv-2Ul2FTpNXZ30&cx=016911297215090939191:2baksfxgcu8&q=$get_value&callback=hndlr\">
</script>";
    
    
    ?>
    
    
    
    <br>
    <center>Not seeing your Ad ? <a href="results_id.php">Try Searching by Ad ID</a></center>
    <br>
    
    
</body>

</html>