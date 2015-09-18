<html>
<head>
	<title>View Page</title>
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
			?>

	<table border='1'>
		<tr>
		<th>Art</th>
		<th>Discription</th>
		</tr>
	<?php 
	$Id=$_GET['id'];
	$result = mysql_query("select *
							from picture
							where id=$Id
							");
	if($result)
	{
	while ($row=mysql_fetch_array($result)) {
		?>
		<tr>
			
			<td> <img src="<?php echo $row[1];?>"></td>
			<td> <?php echo $row[2]; ?> </td>
      		
      	</tr>

	<?php } }?>

	</table>
</body>
</html>