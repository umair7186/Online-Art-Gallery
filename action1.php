<html>
<head></head>
<body>

	<?php

		$con = @mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}
			$sql = "CREATE DATABASE myinfo";
			if (!mysql_query($sql,$con))
			{
				die('DATABASE not created' .mysql_error());
			}


			if(mysql_select_db("myinfo", $con))
			{
			$sql1="CREATE TABLE userdata(
						Id int NOT NULL PRIMARY KEY, First_Name varchar(30),
						Last_Name varchar(30),
						Email_Id varchar(30), Password varchar(30),City varchar(30),Country varchar(30))";
				if (!mysql_query($sql1,$con))
			{
				die('Error: ' . mysql_error());
			}

			$sql2="INSERT INTO userdata (Id,First_Name,Last_Name,Email_Id,Password,City,Country)
			VALUES
			('$_POST[Id]', '$_POST[First_Name]', '$_POST[Last_Name]', '$_POST[Email_Id]' ,'$_POST[Password]','$_POST[City]','$_POST[Country]')";
			
			if (!mysql_query($sql2,$con))
			{
				die('Error: ' . mysql_error());
			}
			
			header("location:login_form.html");
			}
			else
			echo "no DB";
		?>

</body>
</html>