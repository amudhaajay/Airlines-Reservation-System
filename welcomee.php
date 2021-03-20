<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    	<title>Flight - Travel and Tour</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

<div class="topnav">
  <a href="#about">About</a>
  <a href="view.php">View my Bookings</a>
  <a href="index.html">Logout</a>
</div>
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <img src="img/logo.png" alt="Flight Template"><br><br>
                            <h1 style="color:white;">Welcome <?php session_start(); echo $_SESSION['myname']; ?></h1>
                        </div>
                        <div class="tabs-content">
                            <h4>Choose Your Direction:</h4>
                            <ul class="social-links">
                                <li><a href="http://facebook.com">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i class="fa fa-youtube"></i></a></li>
                                <li><a href="http://instagram.com">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-direction-button">
                            <a href="contact.html"><i class="fa fa-phone"></i>Contact Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Check availability for <em>direction</em>:</h4>
                                <form id="form-submit" action="welcome.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="from">From:</label>
                                                <select name="hi"  type="text"  onchange='this.form.()'>
                                                    <option value="">Select a location...</option>
                                                    
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="to">To:</label>
                                                <select name="hi1"  type="text" onchange='this.form.()'>
                                                    <option value="">Select a location...</option>
                                            
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="departure">Departure date:</label>
                                                <select name="deparure" type="text"  id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                                                    <option value="2020-12-3">2020-12-3</option>
                                                    <option value="2020-12-5">2020-12-5</option>  
                                                </select>                                          
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">Return date:</label>
                                                <select name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                                <option value="2020-12-4">2020-12-4</option>
                                                    <option value="2020-12-5">2020-12-5</option>  
                                                </select>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="cls">Flight Category:</label>
                                                <select name="cls" type="text" class="form-control date" id="return" placeholder="Select ..." required="" onchange='this.form.()'>
                                                <option value="First Class">First Class</option>
                                                    <option value="Business Class">Business Class</option>  
                                                    <option value="Economic Class">Economic Class</option>  
                                                </select>
                                            </fieldset>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input type="submit" id="form-submit" name="val" class="btn" value="Order Ticket Now">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <input type="submit" id="form-submit" name="val" class="btn" value="Back">
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>





    
</body>
</html>
