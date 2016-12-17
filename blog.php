<?php include'includes/header.php'; ?>
<?php  include 'admin/db/db.php';?>
<?php include 'helpers/format_helpers.php'; ?>
<?php
  $query = "SELECT * FROM domain";
  $result = mysql_query($query);
  $query2  = "SELECT * FROM blog";
  $result2 = mysql_query($query2);
?>
<!--content-->
<div class="blog">
	<div class="container">
		<div class="menu-top">
			<div class="col-md-4 menu-left">
				<h3>Blog</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<span>There are many variations</span>
			</div>
			<div class="col-md-8 menu-right">
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="col-md-9 blog-header">

			<div class=" blog-head">
				<?php while($row = mysql_fetch_assoc($result2)): ?>
				<div class="col-md-4 blog-top">
					<div class="blog-in">
						<a href="single.php?id=<?php echo $row['blog_id']; ?>">
							<img class="img-responsive" src="admin/blog_image/<?php echo $row['image']; ?>" alt=" "></a>
						<div class="blog-grid">
							<h3><a href="single.php?id=<?php echo $row['blog_id']; ?>">
									<?php echo $row['title']; ?>
								</a></h3>
							<div class="date">
								<span class="date-in"><i class="glyphicon glyphicon-calendar"> </i>22.08.2014</span>
								<a href="single.html" class="comments"><i class="glyphicon glyphicon-comment"></i>24</a>
								<div class="clearfix"> </div>
							</div>
							<p><?php echo shortText($row['content']);?></p>
							<div class="more">
								<a class="link link-yaku" href="single.php?id=<?php echo $row['blog_id']; ?>">
									<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-3 categories-grid">

			<div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h4>Categories</h4>
				<ul class="popular">
					<?php while ($row2 = mysql_fetch_assoc($result) ): ?>
					<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i><?php echo $row2['Domain_name']; ?></a></li>
				   <?php endwhile; ?>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<!--//content-->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.php">Home</a></li>
						<li><a  href="about.php">About Us</a></li>
						<li><a  href="events.php">Events</a></li>
						<li><a  href="blog.php">Blog</a></li>
						<li><a  href="contact.php">Contact</a></li>
					</ul>
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>
			<!--
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div> -->
	</div>
	<!--//footer-->

</body>
</html>

