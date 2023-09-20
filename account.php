<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Your Account</title>

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
        ?>
        <!--// Header \\-->

        <!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Your Account</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="shop-detail.html">Shop</a></li>
                            <li>Your Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

        <!--// Main Content \\-->
        <div class="sportsmagazine-main-content">

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-account-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <!--// Tabs \\-->
                            <div class="sportsmagazine-account-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Personal Information</a></li>
                                    <li role="presentation"><a href="#shiping" aria-controls="shiping" role="tab" data-toggle="tab">Shipping Information</a></li>
                                    <li role="presentation"><a href="#billing" aria-controls="billing" role="tab" data-toggle="tab">billing Information</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="sportsmagazine-account">
                                            <form>
                                                <div class="sportsmagazine-upload-photo">
                                                    <figure><img src="extra-images/upload-photo.jpg" alt=""></figure>
                                                    <section>
                                                        <h6>Profile Photo</h6>
                                                        <span>Minimum size 80 * 80px</span>
                                                        <label>
                                                            Upload Image
                                                            <input type="file">
                                                        </label>
                                                    </section>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <label>Your Email</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="email">
                                                    </li>
                                                    <li>
                                                        <label>Username</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Password</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Repeat Password</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>First Name</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Last Name</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Country</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>State</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>City</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li class="address">
                                                        <label>Address</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Zip Code</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <input value="See All Changes" type="submit">
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="shiping">
                                        <div class="sportsmagazine-account">
                                            <form>
                                                <div class="sportsmagazine-upload-photo">
                                                    <figure><img src="extra-images/upload-photo.jpg" alt=""></figure>
                                                    <section>
                                                        <h6>Profile Photo</h6>
                                                        <span>Minimum size 80 * 80px</span>
                                                        <label>
                                                            Upload Image
                                                            <input type="file">
                                                        </label>
                                                    </section>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <label>Your Email</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="email">
                                                    </li>
                                                    <li>
                                                        <label>Username</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Password</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Repeat Password</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>First Name</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Last Name</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Country</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>State</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>City</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li class="address">
                                                        <label>Address</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Zip Code</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <input value="See All Changes" type="submit">
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="billing">
                                        <div class="sportsmagazine-account">
                                            <form>
                                                <div class="sportsmagazine-upload-photo">
                                                    <figure><img src="extra-images/upload-photo.jpg" alt=""></figure>
                                                    <section>
                                                        <h6>Profile Photo</h6>
                                                        <span>Minimum size 80 * 80px</span>
                                                        <label>
                                                            Upload Image
                                                            <input type="file">
                                                        </label>
                                                    </section>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <label>Your Email</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="email">
                                                    </li>
                                                    <li>
                                                        <label>Username</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Password</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Repeat Password</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>First Name</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Last Name</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Country</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>State</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>City</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li class="address">
                                                        <label>Address</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <label>Zip Code</label>
                                                        <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                                    </li>
                                                    <li>
                                                        <input value="See All Changes" type="submit">
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--// Tabs \\-->
                        </div>


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