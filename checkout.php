<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Cart Checkout</title>

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
                        <h1>Cart Checkout</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Cart Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

        <!--// Main Content \\-->
        <div class="sportsmagazine-main-content">

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-checkout-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="sportsmagazine-account sportsmagazine-checkout">
                                <h5>Billing Detail</h5>
                                <form>
                                    <ul>
                                        <li>
                                            <label>First Name</label>
                                            <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                        </li>
                                        <li>
                                            <label>Last Name</label>
                                            <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                        </li>
                                        <li>
                                            <label>Your Email</label>
                                            <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="email">
                                        </li>
                                        <li>
                                            <label>Company Name</label>
                                            <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                        </li>
                                        <li>
                                            <label>Phone</label>
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
                                        <li>
                                            <label>Zip Code</label>
                                            <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                        </li>
                                        <li class="full-address">
                                            <label>Address</label>
                                            <input value="Enter here" onblur="if(this.value == '') { this.value ='Enter here'; }" onfocus="if(this.value =='Enter here') { this.value = ''; }" type="text">
                                        </li>
                                        <li class="full-address">
                                            <label>Additional Comment</label>
                                            <textarea name="u_msg" placeholder="Enter here"></textarea>
                                        </li>
                                        <li>
                                            <input value="See All Changes" type="submit">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sportsmagazine-cart-total">
                                <h5>Cart Totals</h5>
                                <ul>
                                    <li>
                                        <h6>Cart Subtotal</h6>
                                        <span>$242.00</span>
                                    </li>
                                    <li>
                                        <h6>Shipping And Handling</h6>
                                        <span>$50.00</span>
                                    </li>
                                    <li>
                                        <h6>Coupone Code</h6>
                                        <span>-$10.00</span>
                                    </li>
                                    <li class="total-cart">
                                        <h6>Cart Total</h6>
                                        <span>$282.00</span>
                                    </li>
                                </ul>
                                <a href="checkout.html" class="cart-checkout-btn">Proceed To Checkout</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sportsmagazine-cart-payment-method">
                                <h5>Payment Method</h5>
                                <div class="panel-group sportsmagazine-cart-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Direct Bank Transfer</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Check Payments</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Paypal Checkout</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="cart-checkout-btn">Place Order</a>
                            </div>
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