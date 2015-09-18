<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
<title>About</title> 

</head>
</head>
<body id="background">





<div class="navigation_bar">

  <div class="sign_in">
    <a href="#" style="margin-top:5px"><?php

    $con = @mysql_connect("localhost","root","");
      if (!$con)
      {
        die('Could not connect: ' . mysql_error());
      }

      if(!mysql_select_db("myinfo", $con))
      {
        die('Error: ' . mysql_error());
      }
      $Id=$_GET['Id'];

      $sql="select * from userdata
      where Id=$Id";
      $result= mysql_query($sql,$con);
      if($result)
      
        $row=mysql_fetch_array($result);
      echo "Welcome ".$row[1];
    ?>
    </a>
    <img src="pak.gif" width="15px" height="15px" style="margin-left:10px;margin-top:5px" class="rotate">
    
  </div>
    <div class="logout">
      <a  href="index.html" ><b>Logout</b></a>
    </div>
    
</div>


<div id='cssmenu'>


<ul><img src="logo1.jpg" width="220" height="100">
  <li class='active'><a href="#"><span>About</span></a></li>
  <li><a href="logintogall.php?Id=<?php echo htmlspecialchars($row['Id']) ?>"><span>Gallery</span></a></li>
  <li ><a href="logintoacc.php?Id=<?php echo htmlspecialchars($row['Id']) ?>"><span>Main</span></a></li>
</ul>

</div>

<br></br><br></br>

<div class="ad1">
	<img src="blurr.jpg" width="100%" height="500" >
	<div class="pic">
	<img src="tv.png" width="600" height="650" >
</div>

   <h1>Art is the most intense mode of <br> individualism that the world has known.</h1>
  <br> <p>-Beautifull Galleries</p>          <p>- Unlimited Storage</p><p>- Custom Folders</p>  <p>- Security Checks</p>   
</div>
     <div id="cf">
  <img class="top" src="g1.png"></img> 
  <div class="text top">
    <a href="index.html" style="margin-top:6px">PREVIEW</a>
    </div> 
</div> 

   <div id="cf2">
<img class="top2" src="g4.png" ></img>
<div class="tot top2">
<a href="index.html" style="margin-top:6px">PREVIEW</a>
</div>

</div>



</div>




 
</body>
</html>