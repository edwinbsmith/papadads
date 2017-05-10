<?php
/**
 * PapaDads Website
 * © 2017 Smithy.co
 * Author: Edwin Smith
 */
include_once './vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

date_default_timezone_set('America/Los_Angeles');

include_once './_includes/events.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Papa Dads: Wings Dings Burgers N' Things</title>
    <?php include '_includes/site_meta.php'; ?>
    <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/tms-0.3.js"></script>
    <script type="text/javascript" src="assets/js/tms_presets.js"></script>
     <script type="text/javascript">
      $(window).load(function() {
          $('.slider')._TMS({
			duration:800,
			easing:'easeOutQuad',
			preset:'simpleFade',
			pagination:false,
			slideshow:2000,
			banners:false,
			prevBu:'.prev',
			nextBu:'.next',
			waitBannerAnimation:false,
			pauseOnHover:true
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
<body id="page1">
        <div class="bg-2">
            <!--==============================header=================================-->

            <?php include '_includes/header.php' ; ?>

            <!--==============================content================================-->
            <section id="content">
                <div class="main">
                    <div class="wrapper">
                        <div class="col-1">
                            <div class="content-bg-1">
                            	<div class="content-padding-1">
                                	<div class="wrapper">
                                    	<div class="col-2">
                                    		<div class="padding-center-1">
	                                    		<div class="figure-div">
	                                    			<h2>Where we're at</h2>
	                                    		</div>
                                                <?php if (empty($events)) : ?>
                                                    <div class='event'>
                                                        <div class='eventName'>Check back later for updates.</div>
                                                    </div>
                                                <?php else : ?>
                                                    <?php foreach($events as $event) : ?>
                                                        <?php
                                                            $start_date = date( 'l, F d, Y', strtotime($event->start_time) );
                                                            $start_time = date( 'g:i a', strtotime($event->start_time) );
                                                        ?>
                                                        <div class='event'>

                                                            <div class='floatLeft'>
                                                                <div class='eventName'><?php echo $event->name; ?></div>
                                                                <div class='time'>
                                                                    <?php echo $start_date; ?><br>
                                                                    at <?php echo $start_time ?>
                                                                </div>
                                                                <div class="eventInfo"><?php echo $event->place->name; ?></div>
                                                            </div>

                                                            <div class='clearBoth'></div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                    		</div>
                                        </div>
                                        <div class="col-3 col-indrnt-1">
                                        	<div class="padding-center-1">
                                            	<div class="wrapper">
                                                    <div class="style-img-bottom fleft">
                                                        <figure class="style-img-1"><img src="assets/images/awesome-sauce.jpg"  alt=""></figure>

                                                    </div>

                                                </div>
                                                <h3>Catering</h3>
                                                <p>Catering packages starting as low as $450</p>
                                            </div>
                                        </div>
                                        <div class="col-3 col-indrnt-1">
                                        	<div class="padding-center-1">
                                            	<div class="wrapper">
                                                    <div class="style-img-bottom fleft">
                                                        <figure class="style-img-1"><img src="assets/images/wings-and-dings.jpg"  alt=""></figure>
                                                    </div>
                                                </div>
                                                <h3>A ding is a sausage</h3>
                                                <p>Look for some of our rotating favorites such as <strong>Aligator, Kangaroo and Bison!</strong></p>
                                                <p>We are also known for our <strong>Margarita Hot Wings</strong>, the only flavor we sell because it is the only one we need- it's perfect!</p>
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
