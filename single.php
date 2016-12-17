<?php include 'includes/header.php'; ?>
<?php include 'db/db.php';?>
<!--content-->

<?php
$blog_id = $_GET['id'];
$sql = mysql_query("SELECT * FROM `blog` where blog_id=$blog_id");

$res = mysql_fetch_array($sql);
// print_r($res);

?>
<div class="blog">
    <div class="container">

        <div class="col-md-9 ">
            <!--content-->
            <div class="single">

                <div class="single-top">
                    <img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="admin/blog_image/<?php echo $res['image']; ?>" alt="" />
                    <div class="lone-line">
                        <h4><?php echo $res['title']; ?></h4>
                        <ul class="grid-blog">
                            <li><span><i class="glyphicon glyphicon-time"> </i><?php echo $res['create_at']; ?></span></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"> </i>5 Comment</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share"> </i>Share</a></li>
                        </ul>
                        <p><?php echo $res['content'];?></p>
                    </div>
                </div>
                <div class="comment">
                    <h3>Comments</h3>
                    <div class="media wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="code-in">
                            <p class="smith"><a href="#">Andey</a> <span>02 June 2014, 15:20</span></p>
                            <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
                    <div class="media media-1 wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="code-in">
                            <p class="smith"><a href="#"> Rackham</a> <span>02 June 2014, 15:20</span></p>
                            <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
                    <div class="media wow fadeInRight animated" data-wow-delay=".5s">
                        <div class="code-in">
                            <p class="smith"><a href="#">Clara</a> <span>02 June 2014, 15:20</span></p>
                            <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
                </div>
                <div class="leave">
                    <h3>Leave a comment</h3>
                    <form>
                        <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">

                            <input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">

                            <input type="text" value="E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}">


                            <input type="text" value="Web site" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Web site';}">

                            <textarea value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Comment';}">Comment</textarea>
                            <label class="hvr-rectangle-out">
                                <input type="submit" value="Send">
                            </label>
                        </div>
                    </form>
                </div>

            </div>
            <!---->
            <!--//content-->

        </div>
        <div class="col-md-3 categories-grid">
            <div class="search-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h4>Search</h4>
                <div class="search">
                    <form>
                        <input type="text" placeholder="Search" required="" >
                        <input type="submit" value="" >
                    </form>
                </div>
            </div>
            <div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h4>Categories</h4>
                <ul class="popular">
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Breakfast</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Lunch</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dinner</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dessert</a></li>

                </ul>
            </div>
            <div class="blog-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h4>Recent Posts</h4>
                <div class="product-go">
                    <a href="single.html" class="fashion"><img class="img-responsive " src="images/bo.jpg" alt=""></a>
                    <div class="grid-product">
                        <a href="single.html" class="elit">Consectetuer adipiscing</a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <a href="single.html" class="fashion"><img class="img-responsive " src="images/bo1.jpg" alt=""></a>
                    <div class="grid-product">
                        <a href="single.html" class="elit">Consectetuer adipiscing</a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <a href="single.html" class="fashion"><img class="img-responsive " src="images/bo2.jpg" alt=""></a>
                    <div class="grid-product">
                        <a href="single.html" class="elit">Consectetuer adipiscing</a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>



<?php include 'includes/footer.php'; ?>
