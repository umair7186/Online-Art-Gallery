<html>
<head>
  <title></title>
  
</head>
<body>
  <?php

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
      ?>




<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
<h1> Credit Card Payment </h1>
<table>

<tr><td>Amount:</td> <td><input type="number" name="amount">USD</td></tr>
<tr><td>First Name:</td> <td><input type="text" name="fname"></td></tr>
<tr><td>Last Name:</td> <td><input type="text" name="lname"></td></tr>
<tr><td>Address:</td> <td><input type="text" name="address"></td></tr>
<tr><td>City:</td> <td><input type="text" name="city"></td></tr>
<tr><td>State/Provience:</td> <td><input type="text" name="state"></td></tr>
<tr><td>Country:</td> <td><select>
  <option value="United States">United States</option>
  <option value="United Kingdom">United Kingdom</option>
  <option value="China">China</option>
  <option value="Pakistan">Pakistan</option>
</select></td></tr>
<tr><td>Credit Card:</td><td><select>
  <option value="Master Card">Master Card</option>
  <option value="Pay Pal">Pay Pal</option>
  <option value="Visa">Visa</option>
  <option value="Discover">Discover</option>
  <option value="Pay Dollar">Pay Dollar</option>
  <option value="JCB">JCB</option>
</select></td></tr>
<tr><td></td><td><img src="Capture.jpg" width="300" height="100"></td></tr>

<tr> <td> <input name="submit" type="submit" value="Proceed Payment"></td></tr>





</td></tr>

</table>
</form>

<?php
if(isset($_POST["submit"]))
{
  header("location:logintogall.php?Id=$Id");
}
?>
</body>
</html>