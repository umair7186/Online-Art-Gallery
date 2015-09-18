<html>
	<head>

	</head>
	<body>


		<?php
		
			$con = @mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("myinfo", $con);
			
			$result = mysql_query("SELECT * 
							from userdata
							where Email_Id = '".$_POST['Email_Id']."'
							AND Password = '".$_POST['Password']."' 
							");

			if($result)
			{
			$row = mysql_fetch_array($result);
			$Id=$row['Id'];
			if ($row['Email_Id'] == $_POST['Email_Id'] && $row['Password'] == $_POST['Password'])
			{
				echo "Welcome ".$_POST['Email_Id'];
				
				header("location:logintoacc.php?Id=$Id");
			}
			else 
			{
				echo "WRONG Username OR Password";
			}
			

		}
		else echo "select not queried";
			mysql_close($con);
		?>

	</body>
</html>