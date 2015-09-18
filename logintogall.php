<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
<title>Photo Gallery</title> 

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
  <li ><a href="logintoabt.php?Id=<?php echo htmlspecialchars($row['Id']) ?>"><span>About</span></a></li>
  <li class='active'><a href="#"><span>Gallery</span></a></li>
  <li><a href="logintoacc.php?Id=<?php echo htmlspecialchars($row['Id']) ?>"><span>Main</span></a></li>
</ul>
</div>

<br></br><br></br>
<img src="Gallery_banner.jpg" style="width:100%;height:250px">

<div style="text-align:center;color:blue">
  <h1>All Posted Art</h1><br><br><br>

</div>
     

<span style="position:absolute">To post art</span><a href="Image.php?Id=<?php echo htmlspecialchars($row['Id']) ?>" style="position:absolute; text-decoration:none;margin-left:73px">  <span style="color:red"> Click here</span></a>
<?php 
  $result = mysql_query("select *
              from picture
              ");
  if($result)
  {
  while ($row=mysql_fetch_array($result)) {
    ?>
    <tr>
      <td> <img src="<?php echo $row['name'];?>">|</td>
      <td> <?php echo $row[2]; ?> |</td>
      <td><span>For Order </span><a href="order.php?Id=<?php echo htmlspecialchars($Id) ?>" style="text-decoration:none"><span style="color:red;text-decoration:none">click here</span></a></td>
      <td><hr></td>
        </tr>

  <?php } }?>
 
</body>
</html>