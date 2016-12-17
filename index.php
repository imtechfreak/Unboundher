<?php session_start(); ?>
<?php include 'admin/db/db1.php'; ?>
<?php 
  $query = "SELECT * FROM slider";
  $result = mysql_query($query);
  $query2 = "SELECT * FROM event";
  $result2 = mysql_query($query2);
  $query3 = "SELECT * FROM users WHERE status = 1 LIMIT 3";
  $result3 = mysql_query($query3);
  $query4 = "SELECT * FROM category";
  $result4 = mysql_query($query4);
  $query5 = "SELECT * FROM cities";
  $result5 = mysql_query($query5);
 ?>

<!DOCTYPE html>
<html>
<head>
<title>UnboundHer</title>

<meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="unboundher.com, unboundher - a supportive community for women, Indore," />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href='css/onepage-scroll.css' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />    
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/animate.min.css" rel="stylesheet"> 
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/component.css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <!--  <script type="text/javascript" src="js/jquery.onepage-scroll.js"></script> -->
  <script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>
  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme-style-->
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
    <!-- start-smoth-scrolling -->
    <!-- animation-effect -->
<script src="js/wow.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->


<!--slider script -->
<script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>

<script>
      $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        pagination: false,
        loop: false,
        animationTime: 500 
      });
        });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var height = $(window).height();
        $('.header').height(height);
    });
</script>
</head>
<body>
<div class="col-md-2 col-md-offset-10">
<div class="lr">
    <ul class="list-inline">
        <li><a href="register.php" style="color:white">LogIn</a></li>
        <li>|</li>
        <li><a href="register.php">Register</a></li>
    </ul>
</div>
</div>
<div class="main">
<section class="page1">
 <div class="header">
	<div class="container header01">
		<div class="row">
			<div class="col-md-5">
				<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h1><a href="index.html"><!--<span>Unbo</span>--><img src="images/logo.png" alt=""><!--nd Her<img src="images/her.jpg" style="width:45px;">--></a></h1>
				</div>
			</div>
			
			<div class="col-md-1 col-md-offset-6">
				<div class="nav-icon">		
					<a href="#" class="navicon"></a>
					</div></div>
					<div class="toggle">
						<ul class="toggle-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li><a  href="about.php">About Us</a></li>
							<!--<li><a  href="menu.html">Menu</a></li>-->
							<li><a  href="events.php">Events</a></li>
							<li><a  href="blog.php">Blog</a></li>
							<!--<li><a  href="typo.html">Codes</a></li>-->
							<li><a  href="contact.php">Contact</a></li>
                            <?php if(isset($_SESSION['user'])) :?>
                                <li><a  href="logout.php">Logout</a></li>
                            <?php else : ?>
                                <li><a  href="register.php">Register</a></li>
                            <?php endif; ?>
						</ul>
					</div>			
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>		
	<div class="clearfix"></div>
</div>

<div class="banner">
   	  				<div class="container_wrap">
   						<h1>What are you looking for?</h1>
   						<form method="post" action="search.php">
  			 	        <div class="dropdown-buttons">   
            				<div class="dropdown-button">           			
            					<select id="category" name="category" class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            					  <option value="">Select Category</option>
                                    <?php while ($row4 =mysql_fetch_assoc($result4)): ?>
                                <option value="<?php echo $row4['id']; ?>">
                                    <?php echo $row4['name']; ?>
                                </option>
                                    <?php endwhile; ?>
								</select>
							</div>
							<div class="dropdown-button">
				    			<select id="location" name="location" class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
				    			    <option value="">Select Location</option>
                                    <?php while ($row5 =mysql_fetch_assoc($result5)): ?>
									<option value="<?php echo $row5['id']; ?>">
                                        <?php echo $row5['name']; ?>
                                    </option>
                                    <?php endwhile; ?>
				    			</select>
							</div>
						</div>  
					    
							<input type="text" name="user" placeholder="Name of Mentor" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name of Mentor';}">
			    			<div class="contact_btn">
	               				<label class="btn1 btn-2 btn-2g"><input name="search_submit" type="submit" id="submit" value="Search"></label>
	            			</div>
						</form>        		
   		    			<div class="clearfix"></div>
        			</div>
    			</div>
				<div class="clearfix"></div>
		
		
		
</div>
</section>

<section class="page2">
<div class="slider01">
			<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 650px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 650px; overflow: hidden;">
            <?php while($row = mysql_fetch_assoc($result)) : ?>
            <div data-p="225.00" style="display: none;">
            
                <img data-u="image" src="img/red.jpg" />
                <div class="container" style="color:white;">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-0">
                            <div class="sliderhead">
                                <h1>Some stories that inspire us:</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="container" style="background:grey;">
                <div class="row">
                <div class="col-md-9">
                    <div class="content slidercontent">
                        <h3 style="color:white">
                            <?php echo $row['title']; ?>
                        </h3>
                        <br>
                        <p class="sliderp" ">
                            <?php echo $row['content']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content slidercontent">
                        <img src="admin/slider_image/<?php echo $row['image']; ?>" style="width:100%;">
                    </div>
                </div>
                </div>
                </div>

            </div>
          <?php endwhile; ?>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">Bootstrap Slider</a>
        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>
</div>
</section>
<section class="page3"> 
    <div class="content" id="content-down">
	<div class="content-top-top">
		<div class="container container01">
			<div class="content-top">
				<div class="col-md-4 content-left" >
					<h3>Mentors</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Some of our leaders to help you.</span>
				</div>
				<div class="col-md-8 content-right">
					<p>We have an entire team of qualified and experienced members to guide women in various domains and help them to realize their worth and bring out the best in them. In order to better understand your problems and to enable you to commmunicate your thoughts without any hesitation, we have a vast number of female mentors. </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-mid">
                <?php while ($row3 = mysql_fetch_assoc($result3) ): ?>
				<div class="col-md-4 food-grid">
					<div class=" hover-fold">
					  <h4><?php echo $row3['name']; ?></h4>
					  <div class="top">
						<div style="background: url(admin/user_image/<?php echo $row3['image']; ?>) top;" class="front face"></div>
						<div class="back face">
						<p><?php echo $row3['description']; ?></p>
						</div>
					  </div>
					  <div style="background: url(admin/user_image/<?php echo $row3['image']; ?>) bottom;"class="bottom"></div>
					</div>
				</div>
               <?php endwhile; ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    </div>

<!--//Content-->
</section>
<section class="page4">
    <!--news/events-->
    <div class="content">
	<div class="content-top-top">
		<div class="container container01">
			<div class="content-top">
				<div class="col-md-4 content-left" >
					<h3>Events</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Here's the list of our Most recent events</span>
				</div>
				<div class="col-md-8 content-right" >
					<p><b>Unbound Her</b> <!-- conducts various events to bring together women from different domains and let them share their experience and learn from the experience of others. The basic idea is to allow women to step outside the walls of their homes and to bring out the best in them.-->Unbound Her conducts regular meetups and events to give the women practical insights, tools, techniques and even skills through action oriented approach. This enables them to apply these important learnings in practical ways.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-bottom">
                <?php while($row2 = mysql_fetch_assoc($result2)) :; ?>
				<div class="news-bot">
					<div class="col-md-6 news-bottom1">
						<a href="eventsingle.php?id=<?php echo $row2['event_id']; ?>">
							<div style="background: url(admin/event_image/<?php echo $row2['image'];?>) no-repeat;" class="content-item">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
										<li><span><i class="glyphicon glyphicon-calendar"> </i><?php echo $row2['date'];?></span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
									</ul>
									<p><?php echo $row2['name']; ?></p>
								</div>
							</div>
						</a>
					</div>
                    <?php endwhile; ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
    </div>
    <div class="clearfix"></div>
<!--//news-->
</section>

<!--footer-->
	<section class="page5">
    <div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top">
					<ul class=" in">
						<li><a href="index.php">Home</a></li>
						<li><a  href="about.php">About Us</a></li>
						<li><a  href="events.php">Events</a></li>
						<li><a  href="blog.php">Blog</a></li>
						<li><a  href="contact.php">Contact</a></li>
					</ul>					
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom">
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
			
	       </div>		
	<!--//footer-->
    </div>
    </div>
</section>
</div>
</body>
</html>