
<?php
session_start();
include 'commonincludefiles.php';
global $conn;
$minister_data = array();
$minister_data = getAllministerData();
$news_data = array();
$news_data = getAllnewsData();
$valid_data = array();
$valid_data = getAllvalidData();
$document_data = array();
$document_data = getAlldocumentData();
$yojna_data = array();
$yojna_data = getAllyojnaData();


?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.jepurpanchayat.com/govproject.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 May 2018 10:45:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta -->
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><meta name="description" /><meta name="author" /><meta name="keywords" content="Jepur Gram Panchayat Vijapur, Gram Panchayat Jepur, Online Jepur Panchayat, Jepur Vijapur, Gram Panchayat Vijapur, Gram Panchayat Software, Jepur Vijapur Mehsana, Gujarat" /><meta name="robots" content="all" /><title>
	અજરાપુરા ગ્રામ પંચાયત
</title>

    <!-- Style Sheet : START -->
    

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/blue.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.css" />
<link rel="stylesheet" href="assets/css/owl.transitions.css" />
<link rel="stylesheet" href="assets/css/animate.min.css" />
<link rel="stylesheet" href="assets/css/rateit.css" />
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
<link href="assets/css/lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />



    <!-- Style Sheet : START -->
</head>
<body class="cnt-home">
    <form method="post" action="#" id="form1">
<div class="aspNetHidden">

<div class="aspNetHidden">

	
</div>
        <!-- Header : START -->
        

<header class="header-style-1">
    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account" style="color: darkblue;">
                    
                    <script>
                        var blink_speed = 0;
                        var t = setInterval(function () {
                            var ele = document.getElementById('blinker');
                            ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
                        }, blink_speed);
                    </script>
                    
                </div>
                <!-- /.cnt-account -->

                
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 logo-holder">
                    <div class="logo">
                        <a href="index.php">
                             <p><font size="6"> અજરાપુરા ગ્રામ પંચાયત</font></p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 social">
                    <ul class="link" style="margin-top: 20px;">
                        <li class="instagram pull-right"><a target="_blank" rel="nofollow" href="https://www.instagram.com/" title="Instagram"></a></li>
                        <li class="tw pull-right"><a target="_blank" rel="nofollow" href="https://twitter.com/" title="Twitter"></a></li>
                        <li class="fb pull-right"><a target="_blank" rel="nofollow" href="https://www.facebook.com/" title="Facebook"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li id="Header_A1" class="dropdown "><a href="index.php">મુખ્ય પૃષ્ઠ</a></li>
                                <li id="Header_A2" class="dropdown"><a href="history.php">ઈતિહાસ</a></li>
                                <li id="Header_A3" class="dropdown"><a href="dharohar.php">ધરોહર</a></li>
                                <li id="Header_A4" class="dropdown"><a href="activities.php">પ્રવ્રુતિઓ</a></li>
                                <li id="Header_A13" class="dropdown"><a href="achievements.php">સિદ્ધિઓ</a> </li>
                                <li id="Header_A5" class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">પદાધિકારી</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="sabhya.php">પંચાયત</a></li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li id="Header_A6" class="active"><a href="govproject.php">યોજનાઓ</a> </li>
                                <li id="Header_A7" class="dropdown"><a href="development.php">વિકાસના કામ</a> </li>
                                <li id="Header_A8" class="dropdown"><a href="bloodgroup.php">બ્લડ ગ્રુપની માહિતી</a> </li>
                                <li id="Header_A9" class="dropdown"><a href="akarni.php">મિલ્કત આકરણી</a> </li>
                                <li id="Header_A10" class="dropdown"><a href="feedback.php">અભિપ્રાય</a> </li>
                                 <li id="Header_A12" class="dropdown"><a href="contact.php">સંપર્ક</a> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- Header : END -->
        
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                
            </ul>
        </div>
    </div>
</div>

        <!-- Content : START -->
        <div class="body-content" style="background-color: beige; margin-top: -28px;">
            <div class="container">
                <div class="row">
                    <div class="blog-page">
                        <div class="col-md-9">
                            
                                    <div class="blog-post wow fadeInUp">
                                        <h1><a href="javascript:void(0);">ખેતીવાડીની વિવિધ યોજનાઓ</a></h1>
										<?php
												if (!empty($valid_data)) {
										foreach ($valid_data as $val) {
														?>
                                        <span class="date-time"><?php echo $val['valid_start']; ?> થી <?php echo $val['valid_end']; ?></span>
										<?php
												}
								}
								?>
								<?php
												if (!empty($valid_data)) {
										foreach ($valid_data as $val) {
														?>
                                        <p>વર્ષ : ૨૦૧૮-૧૯ માટે ખેતીવાડીની વિવિધ યોજનાઓ માટે ઓનલાઇન અરજીઓ તારીખ <b><?php echo $val['valid_start']; ?> થી <?php echo $val['valid_end']; ?></b> સુધી <a href='https://ikhedut.gujarat.gov.in/' target='_blank'>iKhedut</a>
(આઈ ખેડૂત પોર્ટલ) ખુલ્લું મુકવામાં આવેલ છે. તો જેપુર ગામના ખેડૂત ભાઈઓએ અરજી કરવા પંચાયત VCE(કોમ્પ્યુટર ઓપરેટર) નો સંપર્ક કરવો.<br/><br/><?php
												}
								}
								?>

<b>અરજી કરવા જરૂરી ડોક્યુમેન્ટ</b> <br/><br/>
<?php
												if (!empty($document_data)) {
										foreach ($document_data as $val) {
														?>
<?php echo $val['iCategoryID']; ?>)  <?php echo $val['document_name']; ?> <br/>
 
<?php
												}
								}
								?>
<b>ખાસ નોંધ : </b>અરજી કરીને ગ્રામસેવક આપી દેવી<br/><br/>

ખેતીવાડી ની યોજનાઓ:-<br/><br/>
<?php
												if (!empty($yojna_data)) {
										foreach ($yojna_data as $val) {
														?>
<?php echo $val['iCategoryID']; ?>.&nbsp<a id="blinker1" href="<?php echo $val['yojna_link']; ?> " target="_blank"><?php echo $val['yojna_name']; ?>. </a>
<br/>
<?php
												}
								}
								?>

</p>

                                    </div>
                                    <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding: 0px; background: none; box-shadow: none; margin-top: 15px; border: none">
                                        <div class="text-right">
                                            <div class="pagination-container">
                                            </div>
                                        </div>
                                    </div>
                                
                        </div>
                    </div>
                    <!-- Sidebar : START -->
                    
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs" style="background-color: antiquewhite;">
        <h3 class="section-title">માનનીય</h3>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
		<?php
												if (!empty($minister_data)) {
										foreach ($minister_data as $val) {
														?>
            <div class="item">
                <div class="products">
                    <div class="hot-deal-wrapper">
                        <div class="image">
                            <img src="images/banner/<?php echo $val['tImage']; ?>" alt="મુખ્ય મંત્રી" />
                        </div>
                    </div>
                    <div class="product-info text-left m-t-20">
                        <p><?php echo $val['minister_category']; ?>,</p>
                        <div class="product-price">
                            <span class="price"><?php echo $val['minister_name']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
			<?php
										}
								}
														?>
            
            
        </div>
    </div>
	
    <div class="sidebar-widget product-tag wow fadeInUp outer-bottom-xs" style="background-color: antiquewhite;">
        <h3 class="section-title">Latest News</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list">
                <marquee id="scroll_news" behavior="scroll" direction="up" scrollamount="2">
                    <?php
												if (!empty($news_data)) {
										foreach ($news_data as $val) {
														?>
                            <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
                                <a class="item" title="<?php echo $val['news_name']; ?>" href="govproject.html" target="_blank"><?php echo $val['news_name']; ?></a>
                            </div>
							<?php
										}
								}
														?>
                        
                </marquee>
            </div>
        </div>
    </div>
	 <a id="blinker" href="https://anyror.gujarat.gov.in/" target="_blank" style="font-size:21px">૭ / ૧૨ ના ઉતારા મેળવવા માટે અહિંયા ક્લિક કરો. </a><br>
					&nbsp &nbsp<a id="blinker1" href="https://sandeshepaper.in/" target="_blank" style="font-size:21px">કૃપા કરીને અહીં ક્લિક કરો અને અખબાર જુઓ </a>
    <!----------- Testimonials------------->
    <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-vs" style="background-color: antiquewhite;">
        <div id="testimonial" class="advertisement">
            
                    <div class="item">
                        <div class="testimonials"><em>"</em>ગામનો વિકાસ અને ગામ માં ટેકનોલોજી એકદમ અધતન છે.<em>"</em></div>
                        <div class="clients_author">MAYUR<span>AJARAPURA</span> </div>
                    </div>
                
        </div>
    </div>
    
</div>

                    <!--Sidebar : END-->
                </div>
            </div>
        </div>
        <br />
        <!-- Footer : START -->
             
<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989 ;">વિકાસના કામ માટે ડોનેશન</h4>
                    </div>
                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>BANK NAME : </b>BANK OF BARODA</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>A/C NO : </b>**************</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="media-body">
                                    <p style="color:#ffffff;"><b>IFSC CODE : </b>BARBORANCHH</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">ગવર્મેન્ટ વેબ સાઈટ</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="ગ્રામ ગૃહનિર્માણ અને ગ્રામ વિકાસ વિભાગ" href="https://panchayat.gujarat.gov.in/panchayatvibhag/" target="_blank">ગ્રામ ગૃહનિર્માણ અને ગ્રામ વિકાસ વિભાગ</a></li>
                            <li class="first"><a title="ભારતીય ડાક" href="https://www.indiapost.gov.in/">ભારતીય ડાક</a></li>
                            <li class="first"><a title="નર્મદા, જળ સંપત્તિ, પાણી પુરવઠા અને કલ્પસર વિભાગ" href="https://guj-nwrws.gujarat.gov.in/" target="_blank">નર્મદા, જળ સંપત્તિ, પાણી પુરવઠા અને કલ્પસર વિભાગ</a></li>
                            <li class="first"><a title="ગુજરાત ઊર્જા વિકાસ નિગમ લિમિટેડ" href="http://www.gseb.com/">ગુજરાત ઊર્જા વિકાસ નિગમ લિમિટેડ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">ગવર્મેન્ટ વેબ સાઈટ</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a title="મતદાર કાર્ડ" href="https://ceo.gujarat.gov.in/" target="_blank">ઓનલાઈન મતદાર કાર્ડ</a></li>
                            <li class="first"><a title="આધાર કાર્ડ" href="https://ceo.gujarat.gov.in/" target="_blank">ઓનલાઈન આધાર કાર્ડ</a></li>
                            <li class="first"><a title="Any ROR" href="https://anyror.gujarat.gov.in/" target="_blank">Any ROR</a></li>
                            <li class="first"><a title="i-ખેડૂત" href="https://ikhedut.gujarat.gov.in/" target="_blank">i-ખેડૂત</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <div class="module-heading">
                        <h4 class="module-title" style="color:#898989;">તત્કાલીન સુવિધાના નંબર</h4>
                    </div>
                    <div class="module-body">
                        <ul class="list-unstyled">
                            <li class="first"><a href="javascript:void(0);" title="વિજાપુર તાલુકા પોલીસ સ્ટેશન" target="_blank">પોલીસ સ્ટેશન :  (02763) 270401</a></li>
                            <li class="first"><a href="javascript:void(0);" title="નગરપાલિકા ફાયર  સ્ટેશન" target="_blank">નગરપાલિકા Fire : (02763)270369</a></li>
                            <li class="first"><a href="javascript:void(0);" title="એ.પી.એમ.સી ફાયર સ્ટેશન" target="_blank">APMC Fire : (02763) 272751</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-12 no-padding">
                <div class="clearfix">
                    <p style="color:white; text-align:center;">ALL RIGHTS RESERVED BY AJARAPURA GRAM PANCHAYAT <sup style="color:white;">®</sup></a> <br/>  
					<script type="text/javascript" ></script></p>
                </div>
            </div>
        </div>
    </div>
</footer>


        
    </form>
    

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>
