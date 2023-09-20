<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Shop Detail</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        <?php
        include "header.php";
        ?>der \\-->

        <!--// Main Content \\-->
        <div class="sportsmagazine-main-content sportsmagazine-main-contentminus">

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-shop-thumb">
                <span class="thumb-transparent"></span>
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <figure class="sportsmagazine-thumb-img"><img src="extra-images/shop-thumb-1.png" alt=""></figure>
                        </div>
                        <div class="col-md-8">
                            <div class="sportsmagazine-shop-summery">
                                <h2>Sundown Sneakers</h2>
                                <span class="sportsmagazine-price-cartbox">
                                    <del>$50.00</del>
                                    $39.99
                                </span>
                                <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Cura bitur lacinia diam tempus tempor consectetur. </p>
                                <ul class="sportsmagazine-summery-option">
                                    <li>
                                        <label>Quantity</label>
                                        <input name="quantity" min="01" max="10" type="number" value="1">
                                    </li>
                                    <li>
                                        <label>Size</label>
                                        <input name="quantity" min="5" max="40" type="number" value="5">
                                    </li>
                                    <li>
                                        <label>Size</label>
                                        <a href="#" class="white-color"></a>
                                        <a href="#" class="red-color"></a>
                                        <a href="#" class="yellow-color"></a>
                                        <a href="#" class="orange-color"></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <a href="shopping-cart.html" class="sportsmagazine-banner-btn">Add To Cart <span></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9">
                            <!--// Tabs \\-->
                            <div class="sportsmagazine-shop-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="shapes"><a class="shape-one" href="#home" aria-controls="home" role="tab" data-toggle="tab">Description <span></span></a></li>
                                    <li role="presentation" class="shapes-two active"><a class="shape-two" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Review (01) <span></span></a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane" id="home">
                                        <div class="sportsmagazine-section-heading">
                                            <h2>Product Description</h2>
                                        </div>
                                        <div class="sportsmagazine-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur libero enim, lacinia finibus ante et, imperdiet finibus risus. Donec malesuada luctus elit nec hendrerit.Integer ex sapien, eleifend sit amet tellus ut, porttitor dictum velit. Nulla scelerisque, nisl eu maximus bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur libero enim, lacinia finibus ante et, imperdiet finibus risus. Donec malesuada luctus elit nec hendrerit.Integer ex sapien, eleifend sit amet tellus ut, porttitor dictum velit. Nulla scelerisque,</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="profile">
                                        <div class="comments-area">
                                            <!--// coments \\-->
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="thumb-list">
                                                        <figure><img alt="" src="extra-images/comment-img1.jpg"></figure>
                                                        <div class="text-holder">
                                                            <h6>Albert Darren</h6>
                                                            <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                                    </div>
                                                    <div class="thumb-list">
                                                        <figure><img alt="" src="extra-images/comment-img2.jpg"></figure>
                                                        <div class="text-holder">
                                                            <h6>Albert Darren</h6>
                                                            <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                                    </div>
                                                    <ul class="children">
                                                        <li>
                                                            <div class="thumb-list">
                                                                <figure><img alt="" src="extra-images/comment-img3.jpg"></figure>
                                                                <div class="text-holder">
                                                                    <h6>Jeans Morris</h6>
                                                                    <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consetur ed vit dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                                            </div>
                                                        </li>
                                                        <!-- #comment-## -->
                                                    </ul>
                                                    <!-- .children -->
                                                </li>
                                                <!-- #comment-## -->
                                                <li>
                                                    <div class="thumb-list">
                                                        <figure><img alt="" src="extra-images/comment-img4.jpg"></figure>
                                                        <div class="text-holder">
                                                            <h6>Ricky David</h6>
                                                            <time class="post-date" datetime="2008-02-14 20:00">1 Hour Ago </time>
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                                                    </div>
                                                </li>
                                                <!-- #comment-## -->
                                            </ul>
                                            <!--// coments \\-->
                                            <!--// comment-respond \\-->
                                            <div class="comment-respond sportsmagazine-contact-form">
                                                <div class="sportsmagazine-section-heading">
                                                    <h2>Write A Comment</h2>
                                                </div>
                                                <form>
                                                    <ul>
                                                        <li>
                                                            <label>Name:</label>
                                                            <p>
                                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                                <span><i class="fa fa-user"></i></span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <label>Email:</label>
                                                            <p>
                                                                <input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" type="text">
                                                                <span><i class="fa fa-envelope"></i></span>
                                                            </p>
                                                        </li>
                                                        <li class="full-input">
                                                            <label>Comment:</label>
                                                            <p>
                                                                <textarea name="u_msg" placeholder="Type here"></textarea>
                                                                <span><i class="fa fa-comment"></i></span>
                                                            </p>

                                                        </li>
                                                        <li>
                                                            <p><label><input value="Submit" type="submit"></label></p>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                            <!--// comment-respond \\-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Tabs \\-->
                            <div class="sportsmagazine-section-heading">
                                <h2>Related Products</h2>
                            </div>
                            <div class="sportsmagazine-shop sportsmagazine-shop-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="shop-detail.html"><img src="extra-images/shop-grid-img1.jpg" alt=""><i class="fa fa-shopping-cart"></i></a>
                                            <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                        </figure>
                                        <section>
                                            <h5><a href="shop-detail.html">Atlantic Sneaker</a></h5>
                                            <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                            <span></span>
                                        </section>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="shop-detail.html"><img src="extra-images/shop-grid-img2.jpg" alt=""><i class="fa fa-shopping-cart"></i></a>
                                            <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                        </figure>
                                        <section>
                                            <h5><a href="shop-detail.html">Atlantic Sneaker</a></h5>
                                            <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                            <span></span>
                                        </section>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="shop-detail.html"><img src="extra-images/shop-grid-img3.jpg" alt=""><i class="fa fa-shopping-cart"></i></a>
                                            <div class="star-rating"><span class="star-rating-box" style="width:69%"></span></div>
                                        </figure>
                                        <section>
                                            <h5><a href="shop-detail.html">Atlantic Sneaker</a></h5>
                                            <span class="price-cart"><del>$ 30.00</del> $19.00</span>
                                            <span></span>
                                        </section>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--// SideBar \\-->
                        <aside class="col-md-3">

                            <!--// Widget Filter Price \\-->
                            <div class="sportsmagazine-widget-heading">
                                <h2>Filter By Price</h2>
                            </div>
                            <div class="widget widget_filter_price">
                                <span class="filter"><small></small></span>
                                <span class="filter-price">Price: $0.00 - $350.00</span>
                                <a href="#" class="widget-filker-btn">Filter Now</a>
                            </div>
                            <!--// Widget Filter Price \\-->

                            <!--// Widget Cetagories \\-->
                            <div class="sportsmagazine-widget-heading">
                                <h2>Cetagories</h2>
                            </div>
                            <div class="widget widget_cetagories">
                                <ul>
                                    <li><a href="404.html">Championship <span>( 13 )</span></a></li>
                                    <li><a href="404.html">Super Ball <span>( 12 )</span></a></li>
                                    <li><a href="404.html">Football <span>( 04 )</span></a></li>
                                    <li><a href="404.html">Boxing <span>( 08 )</span></a></li>
                                    <li><a href="404.html">BasketBall <span>( 13 )</span></a></li>
                                </ul>
                            </div>
                            <!--// Widget Cetagories \\-->

                            <!--// Widget Popular Post \\-->
                            <div class="sportsmagazine-widget-heading">
                                <h2>Popular Posts</h2>
                            </div>
                            <div class="widget widget_popular_post">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post1.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post2.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post3.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-popular-post">
                                            <figure><a href="blog-detail.html"><img src="extra-images/widget-popular-post4.jpg" alt=""></a></figure>
                                            <div class="sportsmagazine-popular-post-text">
                                                <h5><a href="blog-detail.html">Mark Johnson has as acture and is gona</a></h5>
                                                <time datetime="2008-02-14 20:00">August 23rd, 2016</time>
                                            </div>
                                            <span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Popular Post \\-->

                            <!--// Widget Flicker Images \\-->
                            <div class="sportsmagazine-widget-heading">
                                <h2>Flicker Images</h2>
                            </div>
                            <div class="widget widget_gallery">
                                <ul>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-1.jpg" class="fancybox"><img src="extra-images/flicker-image-1.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-2.jpg" class="fancybox"><img src="extra-images/flicker-image-2.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-3.jpg" class="fancybox"><img src="extra-images/flicker-image-3.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-4.jpg" class="fancybox"><img src="extra-images/flicker-image-4.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-5.jpg" class="fancybox"><img src="extra-images/flicker-image-5.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-6.jpg" class="fancybox"><img src="extra-images/flicker-image-6.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-7.jpg" class="fancybox"><img src="extra-images/flicker-image-7.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-8.jpg" class="fancybox"><img src="extra-images/flicker-image-8.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                    <li><a data-fancybox-group="group" href="extra-images/flicker-image-9.jpg" class="fancybox"><img src="extra-images/flicker-image-9.jpg" alt=""><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <!--// Widget Flicker Images \\-->

                        </aside>
                        <!--// SideBar \\-->


                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

        </div>
        <!--// Main Content \\-->

        <!--// Footer \\-->
        <?php
        include "footer.php";
        ?>
        <!--// Footer \\-->

        <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->
    <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
        <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <form class="sportsmagazine-search-box">
                        <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                        <input type="submit" value="">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fancybox.pack.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/progressbar.js"></script>
    <script type="text/javascript" src="script/counter.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="script/functions.js"></script>

</body>

</html>