<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Shopping Cart</title>

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
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

        <!--// Main Content \\-->
        <div class="sportsmagazine-main-content">

            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-shopping-cartfull">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="sportsmagazine-shopping-cart">
                                <h4>Your Shopping cart</h4>
                                <table class="sportsmagazine-client-detail">
                                    <tr>
                                        <th>Product Info</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure><img src="extra-images/shopping-cart-img1.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Sun Sneakers</h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                            </div>
                                        </td>
                                        <td>$28.00</td>
                                        <td>8,5 (USA) </td>
                                        <td><a class="color-change" href="#"></a></td>
                                        <td><input name="quantity" min="01" max="10" type="number" value="01"></td>
                                        <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure><img src="extra-images/shopping-cart-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Sun Sneakers</h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                            </div>
                                        </td>
                                        <td>$28.00</td>
                                        <td>8,5 (USA) </td>
                                        <td><a class="color-change one" href="#"></a></td>
                                        <td><input name="quantity" min="01" max="10" type="number" value="02"></td>
                                        <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure><img src="extra-images/shopping-cart-img3.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Sun Sneakers</h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                            </div>
                                        </td>
                                        <td>$28.00</td>
                                        <td>8,5 (USA) </td>
                                        <td><a class="color-change two" href="#"></a></td>
                                        <td><input name="quantity" min="01" max="10" type="number" value="03"></td>
                                        <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure><img src="extra-images/shopping-cart-img4.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Sun Sneakers</h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                            </div>
                                        </td>
                                        <td>$28.00</td>
                                        <td>8,5 (USA) </td>
                                        <td><a class="color-change three" href="#"></a></td>
                                        <td><input name="quantity" min="01" max="10" type="number" value="04"></td>
                                        <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure><img src="extra-images/shopping-cart-img2.jpg" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6>Sun Sneakers</h6>
                                                <div class="star-rating"><span class="star-rating-box" style="width:59%"></span></div>
                                            </div>
                                        </td>
                                        <td>$28.00</td>
                                        <td>8,5 (USA) </td>
                                        <td><a class="color-change one" href="#"></a></td>
                                        <td><input name="quantity" min="01" max="10" type="number" value="05"></td>
                                        <td>$56.00<a class="remove-line" href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                </table>
                                <p>
                                    <span>Coupone Code</span>
                                    <input type="text" value="Enter Your Coupon Code" onblur="if(this.value == '') { this.value ='Enter Your Coupon Code'; }" onfocus="if(this.value =='Enter Your Coupon Code') { this.value = ''; }">
                                    <input type="submit" value="Apply Coupon">
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sportsmagazine-cart-total sportsmagazine-shopping-cart-total">
                                <h4>Cart Totals</h4>
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
                                <span><a href="#" class="cart-checkout-btn">Place Your Order Now</a></span>
                            </div>
                            <div class="sportsmagazine-update-shipping">
                                <h4>Calculating Shipping</h4>
                                <form>
                                    <ul>
                                        <li>
                                            <div class="sportsmagazine-select">
                                                <select>
                                                    <option value="">Select Your Country</option>
                                                    <option value="pakistan">counter name</option>
                                                    <option value="india">counter name</option>
                                                    <option value="usa">counter name</option>
                                                    <option value="student">counter name</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sportsmagazine-select">
                                                <select>
                                                    <option value="">Select Your State</option>
                                                    <option value="pakistan">state name</option>
                                                    <option value="india">state name</option>
                                                    <option value="usa">state name</option>
                                                    <option value="student">state name</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li><input type="submit" value="Update Shipping"></li>
                                    </ul>
                                </form>
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