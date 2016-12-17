<?php
mysql_connect("localhost", "unboundh_root","india123") or die(mysql_error()); 
mysql_select_db("unboundh_unboundher") or die("Cannot connect to database");
if (isset($_POST['mentor_submit']))
{
	//die('kin');
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$category_id = mysql_real_escape_string($_POST['category_id']);
	$phone = mysql_real_escape_string($_POST['phone']);
	$city_id = mysql_real_escape_string($_POST['city_id']);
	$address = mysql_real_escape_string($_POST['address']);
	$qulification = mysql_real_escape_string($_POST['qulification']);
	$description = mysql_real_escape_string($_POST['description']);
	$image = mysql_real_escape_string($_POST['image']) ;
	$path='';
	$status = 1;
    $bool = true;
    if(isset($_FILES['image']['name']))
	      	{ 
	        	$image=$_FILES["image"]["name"];
	        	$new_image = militime.$image;
	        	move_uploaded_file($_FILES["image"]["tmp_name"],"admin/user_image/".$new_image);
	        	$path = $new_image;
			}
         
	$query = mysql_query("Select * from users");
	while($row = mysql_fetch_array($query)) 
	{
		$table_users = $row['name']; 
		if($name == $table_users) 
		{
			$bool = false;
			Print '<script>alert("Name has been taken!");</script>';
			Print '<script>window.location.assign("index.php");</script>'; 
		}
	}
	if($bool) 
	{
		
		mysql_query("INSERT INTO users (name,email,password,phone,category_id,address,qulification,description,city_id,image,status) VALUES ('$name','$email','$password','$phone','$category_id','$address','$qulification','$description','$city_id','$path','$status')");
		Print '<script>alert("Message sent!");</script>'; 
		$_SESSION['name'] =  
		Print '<script>window.location.assign("index.php");</script>';
	}
}

if (isset($_POST['submit']))
{	
	//die('kong');
   // $status=0;
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$conpass = mysql_real_escape_string($_POST['conpass']);
	$phoneno = mysql_real_escape_string($_POST['phoneno']);
	$altphno = mysql_real_escape_string($_POST['altphno']);
    $bool = true;
 
	$query = mysql_query("Select * from users");
	while($row = mysql_fetch_array($query)) 
	{
		$table_users = $row['name']; 
		if($name == $table_users) 
		{
			$bool = false;
			Print '<script>alert("Name has been taken!");</script>';
			Print '<script>window.location.assign("register.php");</script>'; 
			//header('location:register.php');
		}
	}
	if($bool) 
	{
		mysql_query("INSERT INTO users (name,email,password,conpass,phoneno,altphno) VALUES ('$name','$email','$password','$conpass','$phoneno','$altphno')"); 
		Print '<script>alert("Message sent!");</script>'; 
		//Print '<script>window.location.assign("register.php");</script>';
		$_SESSION['name']= $name; 
		header('location:register.php');
	}
}

if(isset($_SESSION['user'])!="")
{
	header("Location: register.php");
}

if(isset($_POST['Login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	
	$res=mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
	$row=mysql_fetch_array($res);
	
	if(mysql_num_rows($res)>0)
	{
		$_SESSION['user'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		header("Location: contact.php");
	}
	else
	{
		?>
        <script>alert('Name / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>

