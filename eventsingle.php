<?php include 'admin/db/db.php'; ?>
<?php include 'includes/header.php'; ?>
<!--content-->
<div class="blog">
	<div class="container">
		
		<div class="col-md-12 ">
		<!--content-->

      <?php 
 $event_id = $_GET['id']; 
				$sql = mysql_query("SELECT * FROM `event` where event_id=$event_id");
				
			$res = mysql_fetch_array($sql);

?>


			<div class="single">
				<div class="single-top">
					<img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="admin/event_image/<?php echo $res['image']; ?>" alt="" / style="width:100%;">
					<div class="lone-line">
						<h4><?php echo $res['name']; ?></h4>
						<ul class="grid-blog">
							<li><span><i class="glyphicon glyphicon-time"> </i><?php echo $res['date']; ?></span></li>
							<li><a href="#"><i class="glyphicon glyphicon-time"></i><?php echo $res['time']; ?></a></li>
							<li><a href="#"><i class="glyphicon glyphicon-user"></i><?php echo $res['ppl']; ?></a></li>
						</ul>
						<p><?php echo $res['desp']; ?></p>
					</div>
				</div>		
			</div>
<!---->
<!--//content-->

		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
</div>
<?php include 'includes/footer.php'; ?>

</body>
</html>

