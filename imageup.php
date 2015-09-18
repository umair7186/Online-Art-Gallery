<html>
<head></head>
<body>

	<?php
		$Id=$_POST['id'];
		$con = @mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			/*$sql = "CREATE DATABASE myInfo";
			if (!mysql_query($sql,$con))
			{
				die('DATABASE not created'.mysql_error());
			}*/


			if(mysql_select_db("myinfo", $con))
			{
			$sql1="CREATE TABLE picture(
						Id int (10) NOT NULL PRIMARY KEY, name varchar(30),
						disc varchar(255))";
				if (!mysql_query($sql1,$con))
			{
				die('Error: ' . mysql_error());
			}	

			$sql2="INSERT INTO picture (id,name,disc)
			VALUES
			('$_POST[id]','$_POST[name]', '$_POST[disc]')";
			
			if (!mysql_query($sql2,$con))
			{
				die('Error: ' . mysql_error());
			}
			
			echo "Art Uploaded";

			}
			else
			echo "no DB";

		?>
		<br><a href="artstorage.php?id=<?php echo $Id; ?>">To View your Artwork <span style="color:red">Click here</span></a>

</body>
</html>