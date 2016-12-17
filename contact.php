<?php include'includes/header.php'; ?>
<?php if (isset($_POST['submit'])){
	$name = $_POST['Name'];
	$sub = $_POST['Sub'];
	$email = $_POST['Email'];
	$phno = $_POST['PhNo'];
	$msg = $_POST['Msg'];
	$to = 'ruchinishod@gmail.com';
	mail($to,$sub,$msg,$email );
}
?>
<!--content-->
	<div class="contact">
		<div class="container">
		<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Contact</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>WE ARE HERE TO HELP!!</span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>GET IN TOUCH!!</p><br>
					<p>We are always standing by and eagar to help you.</p>
					<p>Send us an Email or drop us a message!! We will help you out in whatever way we can.</p><br>
					<p>We’d Love to Hear from You!</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-top">
			<div class="col-md-5 contact-map">
			<h5>Google Map</h5>
			<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1468933441843!2d75.88495131448344!3d22.722780933168863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd447b4de707%3A0x24093ad8d03871ae!2sEngineerBabu+IT+Services+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1465557882968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="address">
					       <h4>Address</h4>
					      <p>  616,, Shekhar central</p>
						  <p>Agra Bombay Rd, New Palasia, Manorama Ganj, Indore, Madhya Pradesh 452007</p>
						  <p>ph : 082250 07007</p>
					 </div>
			</div>
			<div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h5>Contact Form</h5>
			<form method="post" action="contact.php" data-parsley-validate="">
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Name </p>
							<input type="text" value="" name="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"data-parsley-length="[4, 20]" required="">
						</div>
					<div class="col-md-6 contact-grid">
					<p class="your-para">Subject</p>
						<input type="text" value="" name="Sub" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-type="integer" required="">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Email</p>
						<input type="Email" name="Email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="">
					</div>
					<div class="col-md-6 contact-grid">
						<p class="your-para">Phone No</p>
						<input type="text" name="PhNo" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
					</div>
					<div class="clearfix"> </div>
				</div>
				<p class="your-para msg-para">MESSAGE</p>
				<textarea cols="77" rows="6" name="Msg" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required="true"></textarea>
					<div class="send">
						<input type="submit" name="submit" value="Contact" >
					</div>
			</form>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	</div>

</div>
<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="js/parsley.min.js"></script>


</body>
</html>

