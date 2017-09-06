<!DOCTYPE html>
<html><head><title>Welcome to Ad Search Engine</title>
    
    <style type="text/css" >
        
        body {
        
            
        
        }
        
        form {
        margin-right: 25%;
        margin-left: 25%;    
        
        
        }
    
    </style>
    
    
    </head>
    <body bgcolor="grey">
    
    <form align="center" action="google_engine.php" method="post">
        <img src="images/logo.png" width="80%" height="80%" />
        
        <div id="content"></div>
        
<script>

    

    function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
    
          document.getElementById("content").innerHTML += "<br>" + item.htmlTitle +"    " + item.link + "<br><hr color='black'><br>";
    
      }
    }
</script>
<script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyCE7HpIsEW950_tC1KLWv-2Ul2FTpNXZ30&cx=016911297215090939191:2baksfxgcu8&q=University+instite+of+technology&callback=hndlr">
</script>
        <!--<gcse:search></gcse:search>-->
        
        
        <!--<input type="submit" name="search" value="Search Now" />-->
        
        
        
        </form>
    
    
    </body>
</html>




