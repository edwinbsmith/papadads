<!DOCTYPE html>
<html lang="en">
<head>
    <title>Papa Dads: Bakery</title>
    <?php include '_includes/site_meta.php' ; ?>
     <script src="assets/js/jcarousellite_1.0.1.js" type="text/javascript"></script>
     <script type="text/javascript">
		$(document).ready(function() { 
			$(".jCarouselLite").jCarouselLite({
				  btnNext: ".next1",
				  btnPrev: ".prev1",		  
				  speed: 600,		  
				  vertical: true,
				  circular: true,
				  visible: 3,
				  start: 0,
				  scroll: 1
			 });
		}); 
	</script>       
	<!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
             <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
 	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page4">
        <div class="bg-2">
            <!--==============================header=================================-->
            <?php include '_includes/header.php' ; ?>
            
            <!--==============================content================================-->
            <section id="content">
                <div class="main">
                    <div class="wrapper">
                        <div class="col-1">
                            <div class="content-bg-2">
                            	<div class="content-padding-2">
                                	<div class="wrapper prev-indent-bot1">
                                    	<div class="col-2">
                                        	<h2>Our <strong>products</strong></h2>
                                        </div>
                                        <div class="fleft">
                                        	<div class="carousel">
                                            	<a class="prev1" href="#">Prev</a>
                                            	<a class="next1" href="#">Next</a> 
                                                <div class="jCarouselLite">
                                                  <ul id="carousel">
                                                        <li>
                                                            <div class="wrapper">
                                                            	<div class="img-indent1 style-img-bottom"><div class="style-img-1"><img src="assets/images/page4-img1.jpg"  alt=""></div></div>
                                                                <div class="extra-wrap">
                                                                	<h4><a class="link" href="#">Omnis iste natus</a></h4>
                                                                    Lorem ips dolor am consectetur adipiscing elit. Pellentesque sed dolor. Aliquam cong fermentum nisl. Mauris accumsan...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="wrapper">
                                                            	<div class="img-indent1 style-img-bottom"><div class="style-img-1"><img src="assets/images/page4-img2.jpg"  alt=""></div></div>
                                                                <div class="extra-wrap">
                                                                	<h4><a class="link" href="#">Vestibul libero</a></h4>
                                                                    Lorem ips dolor am consectetur adipiscing elit. Pellentesque sed dolor. Aliquam cong fermentum nisl. Mauris accumsan...
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="wrapper">
                                                            	<div class="img-indent1 style-img-bottom"><div class="style-img-1"><img src="assets/images/page4-img3.jpg"  alt=""></div></div>
                                                                <div class="extra-wrap">
                                                                	<h4><a class="link" href="#">Tempora incidu ut</a></h4>
                                                                    Lorem ips dolor am consectetur adipiscing elit. Pellentesque sed dolor. Aliquam cong fermentum nisl. Mauris accumsan...
                                                                </div>
                                                            </div>
                                                        </li>
                                                   </ul>
                                               </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==============================footer=================================-->
            <?php include '_includes/footer.php'; ?>
        </div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
