<?php include 'includes/header.php'; ?>
<?php include 'admin/db/db.php'; ?>
<?php 
 if(isset($_POST['search_submit'])){
 	$name = '';
 	$loc="";
 	$cat="";
   if (!empty($_POST['location'])) {
   	$loc = "AND city_id='".$_POST['location']."'";
   }
   if (!empty($_POST['category'])) {
    	$cat = "AND category_id='".$_POST['category']."'";
    } 
    if (!empty($_POST['user'])) {
    	$name = "AND name LIKE '%".$_POST['user']."%'";
    }
    $result = mysql_query("SELECT * FROM users where status='1' ".$loc." ".$cat."  ".$name." ");
    $num = mysql_num_rows($result);

 }
?>
<!--content-->
<?php if($num > 0): ?>
<div class="content">
	<div class="events">
		<div class="container">
		   <?php while($row = mysql_fetch_assoc($result)): ?>
			<div class="events-bottom">
				<div class="col-md-3 events-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<a href="profile.php?id=<?php echo $row['id']; ?>">
				<img src="admin/user_image/<?php echo $row['image']; ?>" alt="" class="img-responsive mntrimg"></a>
				</div>
				<div class="col-md-9 events-bottom2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="col-md-6">
						<h3><?php echo $row['name']; ?></h3>
					</div>
					<div class="col-md-2 col-md-offset-4">
						<h4><?php echo $row['category_id']; ?></h4>
					</div>
					<div class="col-md-12">
						<label><i class="glyphicon glyphicon-menu-up"></i></label>
					</div>
					<br>
					<p>
					 <?php echo $row['description']; ?>
					</p>
					<div class="read-more">						
						<a class="link link-yaku" href="profile.php?id=<?php echo $row['id']; ?>">
							<span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span> <span>D</span><span>e</span><span>t</span><span>a</span><span>i</span><span>l</span><span>s</span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php else : ?>
	<div class="content">
	<div class="events">
		<div class="container">
		<h4>Search Result</h4>
		<p>Your search - did not match any result.</p>
		<br>
		<p>Suggestions:</p>
		<br><br>
		<p>    Make sure all your words are spelled correctly.</p>
		<p>    Try different Keywords.</p>
		<p>    Try more general Keywords.</p>
		</div>
	</div>
</div>
<?php endif; ?>	
<?php include 'includes/footer.php'; ?>
</body>
</html>