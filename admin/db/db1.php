<?php
mysql_connect("localhost", "unboundh_root","india123") or die(mysql_error()); 
mysql_select_db("unboundh_unboundher") or die("Cannot connect to database");
$mili = round(microtime(true) * 1000);
define('militime',$mili);



if (isset($_POST['save']))
	{
		$name = mysql_real_escape_string($_POST['name']);
		

		$title = mysql_real_escape_string($_POST['title']) ;
		$image = mysql_real_escape_string($_POST['image']) ;
		$content = mysql_real_escape_string($_POST['content']) ;
		
        $path='';

		if(isset($_FILES['image']['name']))
	      	{ 
	        	$image=$_FILES["image"]["name"];
	        	$new_image = militime.$image;
	        	move_uploaded_file($_FILES["image"]["tmp_name"],"slider_image/".$new_image);
	        	$path = $new_image;
			}
         
		$sdj=mysql_query("INSERT INTO slider (name,title,image,content) VALUES ('$name','$title','$path','$content')");
	
	
	
		header("location: slider.php");
}


if (isset($_POST['submit']))
	{
		$time = strftime("%X");
		$slides = mysql_real_escape_string($_POST['slides']) ;		

		

		
         
		$sdj=mysql_query("INSERT INTO slider (time,slides) VALUES ('$time','$slides')");
	
	
	
		header("location: slider.php");
}



if (isset($_POST['savechange']))
	{

		$name = mysql_real_escape_string($_POST['name']);
		$category = mysql_real_escape_string($_POST['category']) ;
		$date = strftime("%B %d, %Y");
		$image = mysql_real_escape_string($_POST['image']) ;
		$email = mysql_real_escape_string($_POST['email']) ;
		$phoneno = mysql_real_escape_string($_POST['phoneno']) ;
		$address = mysql_real_escape_string($_POST['address']) ;
		$qualifctn = mysql_real_escape_string($_POST['qualifctn']) ;
		$status = mysql_real_escape_string($_POST['status']) ;
		
        $path='';

		if(isset($_FILES['image']['name']))
	      	{ 
	        	$image=$_FILES["image"]["name"];
	        	$new_image = militime.$image;
	        	move_uploaded_file($_FILES["image"]["tmp_name"],"user_image/".$new_image);
	        	$path = $new_image;
			}
         
		$sdj=mysql_query("INSERT INTO ment (name,category,date,image,email,phoneno,address,qualifctn,status) VALUES ('$name','$category','$date',$path','$phoneno','$address','$qualifctn','$status')");
	
	
	
		header("location: mentor.php");
}



?>