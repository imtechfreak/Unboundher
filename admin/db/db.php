<?php
mysql_connect("localhost", "unboundh_root","india123") or die(mysql_error()); 
mysql_select_db("unboundh_unboundher") or die("Cannot connect to database");
$mili = round(microtime(true) * 1000);
define('militime',$mili);

if (isset($_POST['mentor_submit']))
{
	//die('kin');
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$conpass = mysql_real_escape_string($_POST['conpass']);
	$phoneno = mysql_real_escape_string($_POST['phoneno']);
	$altphno = mysql_real_escape_string($_POST['altphno']);
	$address = mysql_real_escape_string($_POST['address']);
	$qualifictn = mysql_real_escape_string($_POST['qualifictn']);
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
		}
	}
	if($bool) 
	{
		mysql_query("INSERT INTO users (name,email,password,conpass,phoneno,altphno,address,qualifictn) VALUES ('$name','$email','$password','$conpass','$phoneno','$altphno','$address','$qualifictn')"); 
		Print '<script>alert("Message sent!");</script>'; 
		$_SESSION['msg']="1000";
		Print '<script>window.location.assign("register.php");</script>';
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
		$_SESSION['msg']="1000";
		header('location:register.php');
	}
}

if(isset($_SESSION['user'])!="")
{
	header("Location: register.php");
}

if(isset($_POST['Login']))
{
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	
	$res=mysql_query("SELECT * FROM users WHERE name='$name' AND email='$email' AND password='$password'");
	$row=mysql_fetch_array($res);
	
	if(mysql_num_rows($res)>0)
	{
		$_SESSION['user'] = $row['id'];
		
		header("Location: contact.php");
	}
	else
	{
		?>
        <script>alert('Name / Password Seems Wrong !');</script>
        <?php
	}
	
}



if (isset($_POST['blog']))
	{
		$title = mysql_real_escape_string($_POST['title']);
		$category = mysql_real_escape_string($_POST['category']) ;
		$date = date('d-m-Y');
		$modify = mysql_real_escape_string($_POST['modify']) ;

 			
 		
		
		mysql_query("INSERT INTO blog (`title`,`category`,`create_at`,`modify`) VALUES ('$title','$category','$date','$modify')");

		//header("location: event.php");
	}
	else
	{
		//header("location:event.php"); 
	}




if (isset($_POST['edit']))
	{
		$title = mysql_real_escape_string($_POST['title']);
		$category = mysql_real_escape_string($_POST['category']) ;
		$date = strftime("%B %d, %Y");
		$modify = mysql_real_escape_string($_POST['modify']) ;

 			
 		
 		mysql_query("UPDATE blog SET title='$title', category='$category', date='$date' WHERE title='$title'") ;
		header("location: blog.php");
	}


		
if (isset($_POST['delete1']))
	{
		$title = mysql_real_escape_string($_POST['title']);
		$category = mysql_real_escape_string($_POST['category']) ;
		$date = strftime("%B %d, %Y");
		$modify = mysql_real_escape_string($_POST['modify']) ;

 			
 		
 		mysql_query("DELETE FROM blog WHERE title='$title'");
		header("location: blog.php");
	}

if (isset($_POST['add']))
	{
		$title = mysql_real_escape_string($_POST['title']);
		$category = mysql_real_escape_string($_POST['category']) ;
		//$date = strftime("%B %d, %Y");
		$image = mysql_real_escape_string($_POST['image']) ;
		$content = mysql_real_escape_string($_POST['content']) ;
       $path='';

		if(isset($_FILES['image']['name']))
	      	{
	        	$image=$_FILES["image"]["name"];
	        	$new_image = militime.$image;
	        	move_uploaded_file($_FILES["image"]["tmp_name"],"blog_image/".$new_image);
	        	$path = $new_image;
			}


		$sdjd=mysql_query("INSERT INTO blog (category,image,title,content,create_at) VALUES ('$category','$path','$title','$content',CURRENT_TIMESTAMP)");
	
	
	
		header("location: blog.php");
}




if (isset($_POST['save']))
	{
		$name = mysql_real_escape_string($_POST['name']);
		$time = strftime("%X");
		$date = strftime("%B %d, %Y");
		$ppl = mysql_real_escape_string($_POST['ppl']) ;
		$image = mysql_real_escape_string($_POST['image']) ;
		$desp = mysql_real_escape_string($_POST['desp']) ;
        $path='';

		if(isset($_FILES['image']['name']))
	      	{ 
	        	$image=$_FILES["image"]["name"];
	        	$new_image = militime.$image;
	        	move_uploaded_file($_FILES["image"]["tmp_name"],"event_image/".$new_image);
	        	$path = $new_image;
			}
         
		$sdj=mysql_query("INSERT INTO event (name,time,date,ppl,image,desp) VALUES ('$name','$time','$date','$ppl','$path','$desp')");
	
	
	
		header("location: event.php");
}
?>