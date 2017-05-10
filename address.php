<!DOCTYPE html>
<html lang="en">
<head>
    <title>Papa Dads: Address</title>
    <?php include '_includes/site_meta.php' ; ?>
    <script src="assets/js/contact-form.js" type="text/javascript"></script>      
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
<body id="page3">
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
                                	<!-- <div class="wrapper prev-indent-bot1">
                                    	<div class="col-2">
                                        	<h2>Contact <strong>info</strong></h2>
                                            <div class="extra-wrap">
                                                <dl class="list-1">
                                                    <dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
                                                    <dd><span>Tel.:</span>  +1 800 603 6035</dd>
                                                    <dd><span>FAX:</span>  +1 800 889 9898</dd>
                                                    <dd>E-mail: <a class="link" href="#">mail@demolink.org</a></dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="extra-wrap padding-center-2">
                                        	<div class="wrapper">
                                                <div class="style-img-bottom1 img-indent">
                                                    <div class="style-img-1">
                                                        <figure>
                                                            <iframe width="286" height="164" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="extra-wrap">
                                                	<dl class="list-1">
                                                        <dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
                                                        <dd><span>Tel.:</span>  +1 800 603 6035</dd>
                                                        <dd><span>FAX:</span>  +1 800 889 9898</dd>
                                                        <dd>E-mail: <a class="link" href="#">mail@demolink.org</a></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="wrapper">
                                    	<div class="col-2">
                                        	<h2>Send a <strong>message</strong></h2>
                                            <div class="extra-wrap">
                                                <dl class="list-1">
                                                    <dt>Orange County, CA</dt>
                                                    <dd><span>Phone:</span>(714) 397-2803</dd>
                                                    <dd>Email: <a class="link" href="#">info@papadads.com</a></dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="extra-wrap padding-center-1">
                                        	<form id="contact-form">
                                                <div class="success"> Contact form submitted!<br>
                                                    <strong>We will be in touch soon.</strong>
                                                </div>
                                                  <fieldset>
                                                      <label class="name">
                                                            <input type="text" value="Name:">
                                                            <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> 
                                                        </label>
                                                        <label class="email">
                                                            <input type="text" value="E-mail:">
                                                            <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> 
                                                        </label>
                                                        <label class="phone">
                                                            <input type="tel" value="Phone:">
                                                            <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> 
                                                        </label>
                                                       <label class="message">
                                                      <textarea>Message:</textarea>
                                                      <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                                                      <div class="link-form">
                                                      	  <strong class="button-2"><a href="#" data-type="reset">clear</a></strong>
                                                          <strong class="button-2"><a href="#" data-type="submit">send</a></strong>
                                                      </div>											
                                                  </fieldset>           
                                            </form>

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
    <script type="text/javascript">
		$(window).load(function(){
			$('#contact-form').forms({
				ownerEmail:'chad@papadads.com'
			})
		})
	</script>
</body>
</html>
