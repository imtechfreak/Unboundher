<?php include  'includes/header.php'; ?>
<?php
include('db/db.php');
?>
<?php 
   $query1 = "SELECT * FROM category";
  $result1 = mysql_query($query1);
  $query2 = "SELECT * FROM cities";
  $result2 = mysql_query($query2);
 ?>
<!--content-->
	<div class="contact">
		<div class="container">
			<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Register</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<h4>Its easy! Just enter your details and click register.</h4>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>Register here for a fee of just 100/- Rs and avail all the features of Unbound Her. Once you register yourself, you can view the complete details of each mentor and can contact them anytime you want. Registered members also recieve our newsletter and are informed about all upcoming events.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-top">
				<div class="row">

					<div class="col-md-8 col-md-offset-2 register animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<h5 style="text-align:center;">Register Here</h5>
						<br><br>
						<div class="row">
							<div class="col-md-6">
                        	    <ul class="nav nav-tabs">
                            	    <li class="active">
                             	   	    <a href="#tab_1_1" data-toggle="tab"> As a User </a>
                             	   	</li>
                                	<li>
                                	    <a href="#tab_1_3" data-toggle="tab"> As a Mentor </a>
                                	</li>
                            	</ul>
                        	</div>
            			</div>
            			<br><br>
			            <div class="tab-content">
            				<div class="tab-pane active" id="tab_1_1">
								<form method="post" action="register.php" data-parsley-validate="">
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Name </p>
											<input type="text" name="name" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-length="[4, 20]" required="">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Email</p>	
											<input type="email" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-trigger="email" required="">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Password</p>
											<input id="password" type="password" name="password" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Confirm Password</p>
											<input id="conpass" name="conpass" type="password" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-equalto="#password"  required="true">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Phone number</p>
											<input type="text" name="phoneno" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-type="integer" required="">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Alternate Phone No.</p>	
											<input type="text" name="altphno" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-type="integer" required="">
										</div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Address</p>
											<input type="text" value="" name="address" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Profile Pic</p>	
											<input type="file" class="pic" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-type="integer" required="">
										</div>
									</div>
									<div class="grid-login">
										<div class="col-md-12 login-grid">
											<p class="your-para">Description</p>
											<textarea maxlength="50" class="form-control register01" rows="3" placeholder="Enter the content of article"></textarea>
										</div>
									</div>
										<div class="clearfix"> </div>
									<div class="col-md-4 col-md-offset-2">
										<div class="logbutton">
											<input type="submit" name="submit" value="Register" >
										</div>
									</div>
									<div class="col-md-4">
										<div class="loglink">
											<h5><a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-sm">Already a member? Log In here</a></h5>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="tab_1_3">
								<form method="post" action="register.php" enctype="multipart/form-data" data-parsley-validate="" >
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Name </p>
											<input type="text" name="name" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"  data-parsley-length="[4, 20]" required="">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Email</p>	
											<input type="email" value="" name="email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-trigger="email" required="">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Password</p>
											<input id="Password" type="password" value="" name="password" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Confirm Password</p>
											<input id="conpass" type="password" name="conpass" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
                                        	<div class="form-group">
                                            	<label>Choose category</label>

                                            <select id="category_id" name="category_id" class="form-control register">
                                    <?php while ($row1 =mysql_fetch_assoc($result1)): ?>
                                <option value="<?php echo $row1['id']; ?>">
                                    <?php echo $row1['name']; ?>
                                </option>
                                    <?php endwhile; ?>
								</select>

                                        
                                        	</div>
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Location</p>	
										
                                                	<select id="city_id" name="city_id" class="form-control">
                                    <?php while ($row2 =mysql_fetch_assoc($result2)): ?>
									<option value="<?php echo $row2['id']; ?>">
                                         <?php echo $row2['name']; ?>
                                    </option>
                                    <?php endwhile; ?>
				    			
                                            	</select>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Address</p>
											<input type="text" value="" name="address" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Qualifications</p>	
											<input type="text" name="qulification" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="">
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="grid-login">
										<div class="col-md-6 login-grid">
											<p class="your-para">Phone number</p>
											<input type="text" value="" name="phone" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required="true">
										</div>
										<div class="col-md-6 login-grid">
											<p class="your-para">Profile Pic</p>	
											<input type="file" class="pic" name="image" src="admin/users_image/<?php echo $row['image']; ?>" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" data-parsley-type="integer" required="">
										</div>
									</div>
									<br><br>
									<div class="row">
									<div class="grid-login">
										<div class="col-md-12 login-grid">
											<p class="your-para">Description</p>
											<textarea maxlength="50" name="description" class="form-control register01" rows="3" placeholder="Enter the content of article"></textarea>
										</div>
									</div>
									</div>
									<div class="col-md-4 col-md-offset-2">
										<div class="logbutton">
											<input type="submit" name="mentor_submit" value="REGISTER" >
										</div>
									</div>
									<div class="col-md-4">
										<div class="loglink">
											<h6><a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-sm">Already a member? Log In here</a></h6>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>		
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--End-->
<!-- Small modal -->
<div class="modal fade bs-example-modal-sm" id="ddndsanduibdhbd" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<div class="mod">
      		<form method="post" action="register.php">
      			<div class="input-group input-group-lg">
  					<span class="input-group-addon">
    					<span class="glyphicon glyphicon-envelope"></span>
  					</span>
  					<input class="form-control" type="email" name="email" placeholder="Email address"/>
				</div>
				<br>
				<div class="input-group input-group-lg">
  				<span class="input-group-addon">
    				<span class="glyphicon glyphicon-lock"></span>
  				</span>
  				<input class="form-control" name="password" type="password" placeholder="Password"/>
				</div>
      			<div class="col-md-5 col-md-offset-1">
      				<div class="row">
      					<div class="lgbtn">
      						<input type="submit" name="Login" value="Login">
      					</div>
      				</div>
      			</div>
      			<div class="col-md-5">
      				<div class="row">
      					<div class="lgbtn">
      						<a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-sm01">
      							<input type="submit" name="forgot password" value="Forgot Password">
      						</a>
      					</div>
      				</div>
      			</div>
      			<br><br><br>
      			<div class="col-md-12 rem">
      				<div class="row">
      					<div class="fp">
      						<input type="checkbox" name="rememberme" value="Remember Me">Remember Me<br>
      					</div>
      				</div>
      			</div>
      		</form>
      	</div>
    </div>
  </div>
</div>

<!-- modal02 -->
<div class="modal fade bs-example-modal-sm01" id="ddndsanduibdhbd" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<div class="mod">
      		<form method="post" action="">
      			<div class="input-group input-group-lg">
  					<span class="input-group-addon">
    					<span class="glyphicon glyphicon-envelope"></span>
  					</span>
  					<input class="form-control" type="text" placeholder="Email address">
				</div>
      			<div class="col-md-5 col-md-offset-1">
      				<div class="row">
      					<div class="lgbtn">
      						<input type="submit" name="send" value="Send">
      					</div>
      				</div>
      			</div>
      			<div class="col-md-5 col-md-offset-1">
      				<div class="row">
      					<div class="lgbtn">
      						<input type="submit" name="cancel" value="Cancel">
      					</div>
      				</div>
      			</div>
      		</form>
      	</div>
    </div>
  </div>
</div>
<!-- //modal -->
<?php include 'includes/footer.php'; ?>

	<?php
if(isset($_SESSION['msg']))
{?>
<script >
//alert('ddddd');
	$("#ddndsanduibdhbd").modal('show');
</script>
<?php

unset($_SESSION['msg']);
//session_destroy('');

}
?>

               <!-- <script src="js/parsley.min.js"></script>
                 <script src="js/parsley.js"></script>-->


</body>
</html>




