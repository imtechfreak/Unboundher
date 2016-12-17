<?php include'includes/header.php'; ?>
<?php  include 'admin/db/db.php';?>
<?php include 'helpers/format_helpers.php';?>
<?php $sql = mysql_query("SELECT * FROM event"); ?>
<!--content-->
<div class="content">
	<div class="events">
		<div class="container">
			<div class="events-top">
				<div class="col-md-4 events-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Events</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>We create so many Events.</span>
				</div>
				<div class="col-md-8 events-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>Unbound Her conducts regular meetups and events to give the women practical insights, tools, techniques and even skills through action oriented approach. This enables them to apply these important learnings in practical ways.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php
			while($res = mysql_fetch_assoc($sql)): ?>
			<div class="events-bottom">
				<div class="col-md-7 events-bottom2 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3><?php echo $res['name']; ?></h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p><?php echo shortText($res['desp']); ?></p>
					<div class="read-more">						
						<a class="link link-yaku" href="eventsingle.php?id=<?php echo $res['event_id']; ?>">
							<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>					
						</a>
					</div>
				</div>
				<div class="col-md-5 events-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<a href="eventsingle.php?id=<?php echo $res['event_id']; ?>"><img src="admin/event_image/
					<?php echo $res['image'];?>" alt="" class="img-responsive"></a>
				</div>
				<div class="clearfix"> </div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>