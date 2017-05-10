<header>
    <div class="main">
        <div class="header-padding">
            <div class="bg-header">
                <h1><a href="index.php">Papa Dads</a></h1>
                <img id="tag-line" src="assets/images/logo-tagline.png" />
                <div id="social">
                    <a id="facebook" href="https://www.facebook.com/pages/Papa-Dads/182673031865710" target="_blank">Facebook</a>
                    <a id="twitter" href="https://twitter.com/PapaDadsFT" target="_blank">Twitter</a>
                    <a id="instagram" href="http://instagram.com/PapaDadsFT" target="_blank">Instagram</a>
                </div>
                <div class="menu-padding">
                    <div class="menu-bg-1">
                        <nav>
                            <ul class="menu">
                                <li><a id="menu_index" href="index.php">HOME</a></li>
                                <li><a id="menu_prices" href="assets/pdfs/WEBmenu.pdf" target="_blank">MENU</a></li>
                                <li><a id="menu_address" href="address.php">CONTACT</a></li>
                                <li id="menu_bakery" class="last"><a href="https://www.facebook.com/pages/Papa-Dads/182673031865710?id=182673031865710&sk=events" target="_blank">SCHEDULE</a></li>
                            </ul>
                            <div class="clear"></div>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php if(substr_count($_SERVER['PHP_SELF'], "index.php") == 1) { ?>
    <div class="wrapper relat1">
        <div class="slider-bg">
            <div class="slider-wrapper">
                <div class="slider">
                  <ul class="items">
                      <li><img src="assets/images/slides/slider-1.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-2.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-3.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-4.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-5.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-6.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-7.jpg" alt="" /></li>
                      <li><img src="assets/images/slides/slider-8.jpg" alt="" /></li>
                  </ul> 
                  <a href="#" class="prev"></a>
                 <a href="#" class="next"></a>
              </div>
          </div>
          <div class="extra-wrap">
                <strong class="header-text-1">Our Truck</strong>
                <!--<div class="text-box-bg">
                    <strong class="button-1"><a href="#"></a></strong>
                </div>-->
          </div>
      </div>
  </div>
  <?php } ;?>
</header>