


<?php

$id=$_GET['Id'];

$conn=mysql_connect("localhost","root","");

if(!$conn)
{
	die("Connection Failed". mysql_error());
}
mysql_select_db("myinfo",$conn);

if(isset($_GET['Id']))
{
 	$query=mysql_query("SELECT * FROM picture WHERE Id=$id;");
 	while($row=mysql_fetch_array($query))
 	{

 			echo $row[2];
 		//<img src="<?php echo $row["Image"];
 			//imagejpeg($imageData);	
 	}	
 	 header("content-type:Image/jpeg");
 	//imagejpeg($imageData);
 	
}

else
{
	echo "Error";
}

mysql_close($conn);

?>