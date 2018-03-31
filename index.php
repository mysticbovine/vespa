<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Vespa Club of Canada is a nonprofit club dedicated to the preservation of the Vespa scooter and proud to be a member of the Vespa World Club.">
    <meta name="author" content="Rocky Coast Creative www.rockycoastcreative.ca">

    <title>Vespa Club of Canada</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="/img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/img/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Vespa Club of Canada <span style="font-size:.75em">&#127809;</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#history">History</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#clubs">Local Clubs</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#sponsors">Sponsors</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#shop">Shop</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#joinus">Join Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <?php echo $lang['intro'] ?>
            </div>
        </div>
    </header>
	
	<!-- About Section -->
    <section id="about"  class="bg-light-gray">
      <div class="container">
        <div class="row">
          <?php echo $lang['about'] ?>
        </div>
      </div>
    </section>
	
	<!-- History -->
	<section id="history">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<h2 class="section-heading text-center"><?php echo $lang['history-title'] ?></h2>
                    <h3 class="section-subheading text-muted text-center">
                      <?php echo $lang['history-subtitle'] ?>
                    </h3>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/piaggio.jpg" alt="<?php echo $lang['t1884'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1884</h4>
                                    <h4 class="subheading"><?php echo $lang['t1884'] ?></h4>
                                </div>
								
    
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1884'] ?></p>
                                </div>
								
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/bombers.jpg" alt="<?php echo $lang['t1940'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1940</h4>
                                    <h4 class="subheading"><?php echo $lang['t1940'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1940'] ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/wasp.jpg" alt="<?php echo $lang['t1940'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1946</h4>
                                    <h4 class="subheading"><?php echo $lang['t1946'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['t1946'] ?></p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1950.jpg" alt="<?php echo $lang['t1950'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1950</h4>
                                    <h4 class="subheading"><?php echo $lang['t1950'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                   <?php echo $lang['b1950'] ?>
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1960.jpg" alt="<?php echo $lang['t1960'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1960</h4>
                                    <h4 class="subheading"><?php echo $lang['t1960'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1960'] ?></p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1970.jpg" alt="<?php echo $lang['t1967'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1967</h4>
                                    <h4 class="subheading"><?php echo $lang['t1967'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1967'] ?></p>
								

                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1980.jpg" alt="<?php echo $lang['t1980'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1980</h4>
                                    <h4 class="subheading"><?php echo $lang['t1980'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                     <p class="text-muted"><?php echo $lang['b1980'] ?></p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1981.jpg" alt="<?php echo $lang['t1980'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1981</h4>
                                    <h4 class="subheading"><?php echo $lang['t1981'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1981'] ?></p>
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1985.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1985</h4>
                                    <h4 class="subheading"><?php echo $lang['t1985'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1985'] ?></p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1990.jpg" alt="Keeping the spirit alive">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1990's</h4>
                                    <h4 class="subheading"><?php echo $lang['t1990'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b1990'] ?></p>
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2001.jpg" alt="<?php echo $lang['t2000'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2000</h4>
                                    <h4 class="subheading"><?php echo $lang['t2000'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['b2000'] ?></p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/today.jpg" alt="<?php echo $lang['ttoday'] ?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Today</h4>
                                    <h4 class="subheading"><?php echo $lang['ttoday'] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"<?php echo $lang['btoday'] ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <?php echo $lang['tfinal'] ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<!-- Gallery -->
	<section id="gallery" class="bg-light-gray">
		<div class="container">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading"><?php echo $lang['gallery-title'] ?></h2>
				<h3 class="section-subheading text-muted"><?php echo $lang['gallery-sub'] ?></h3>
				<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/0bce015c480b5bc293f1f89d42bb8d80.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
			</div>
		</div>
	</section>
	
	<!-- Other clubs -->
	<section id="clubs" class="">
	<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h2 class="section-heading"><?php echo $lang['clubs-title'] ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $lang['clubs-sub'] ?></h3>
      </div>
    </div>
	</div>
	<div id="map"></div>
	</section>
	

	<!-- Portfolio Grid Section -->
    <section id="sponsors" class="bg-light-gray">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading"><?php echo $lang['sponsors-title'] ?></h2>
                  <h3 class="section-subheading text-muted"><?php echo $lang['sponsors-sub'] ?></h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-6 portfolio-item center-block">
                  <a href="http://www.enduroktm.com" class="portfolio-link" target=_blank>
                    
                      <img src="img/sponsor/enduro.jpg" class="img-responsive center-block" alt="Enduro website">
                  </a>
                  <div class="portfolio-caption text-center">
                      <h4>Vespa Quebec/KTM Enduro</h4>
                      <p class="text-muted"><strong><?php echo $lang['discount'] ?></strong> <i class="fa fa-cog yellow"></i> <?php echo $lang['parts'] ?> <i class="fa fa-wrench yellow"></i> 
          <?php echo $lang['service'] ?> <i class="fa fa-circle-o yellow"></i> <?php echo $lang['tires'] ?></p>
                      <p class="text-muted"> <i class="fa fa-phone yellow"></i> 1-418-661-5683<br />
          <i class="fa fa-map-marker yellow"></i> 266 Seigneuriale Quebec City QC G1C 3P5</p>
          
                  </div>
              </div>
              <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="http://www.gearheadcanada.com" target=_blank class="portfolio-link">
                    
                      <img src="img/sponsor/gearhead.jpg" class="img-responsive  center-block" alt="Gearhead Website">
                  </a>
                  <div class="portfolio-caption text-center">
                      <h4>Gearhead Canada</h4>
                      <p class="text-muted"><strong><?php echo $lang['discount'] ?></strong> <i class="fa fa-cog yellow"></i> <?php echo $lang['parts'] ?> <i class="fa fa-wrench"></i> <?php echo $lang['service'] ?> <i class="fa fa-circle-o yellow"></i> <?php echo $lang['tires'] ?></p>
          <p class="text-muted"><i class="fa fa-phone yellow"></i> 1-613-828-9151<br />
           <i class="fa fa-map-marker yellow"></i> 306 Moodie Dr Ottawa ON  K2W 8G3</p>

                  </div>
              </div>
              <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="http://scootart.com/" target=_blank class="portfolio-link">
                    
                      <img src="img/sponsor/scootart.jpg" class="img-responsive center-block" alt="Scootart Website">
                  </a>
                  <div class="portfolio-caption text-center">
                      <h4>Scootart</h4>
                      <p class="text-muted"><strong><?php echo $lang['discount'] ?></strong> <i class="fa fa-cog yellow"></i> <?php echo $lang['parts'] ?> <i class="fa fa-wrench"></i> <?php echo $lang['service'] ?> <i class="fa fa-circle-o yellow"></i> <?php echo $lang['tires'] ?></p>
          <p class="text-muted"><i class="fa fa-phone yellow"></i> 1-514-388-4888<br />
           <i class="fa fa-map-marker yellow"></i> 8359 rue St Laurent Mtl, QC H20 2M7</p>

                  </div>
              </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a href="http://scootertuning.ca/en/" target=_blank class="portfolio-link">
          <img src="img/sponsor/scootertuning.jpg" class="img-responsive center-block" alt="Scooter Tuning Website">
        </a>
        <div class="portfolio-caption text-center">
          <h4>Scootertuning</h4>
          <p class="text-muted">
            <strong><?php echo $lang['discount'] ?></strong> 
            <i class="fa fa-cog yellow"></i> <?php echo $lang['parts'] ?> 
            <i class="fa fa-circle-o yellow"></i> <?php echo $lang['tires'] ?> (<?php echo $lang['use-code'] ?>: VESPACLUB)
          </p>
          <p class="text-muted">
            <i class="fa fa-phone yellow"></i> 1-866-770-1214<br />
            <i class="fa fa-map-marker yellow"></i> 202-438 boul Jacques-Cartier, Shannon QC G0A 4N0
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a href="http://www.vespahalifax.com/" target=_blank class="portfolio-link">
            <img src="img/sponsor/vespashalifax.jpg" class="img-responsive center-block" alt="Vespa Halifax Website">
        </a>
        <div class="portfolio-caption text-center">
          <h4>Vespa Halifax</h4>
          <p class="text-muted"><strong><?php echo $lang['discount'] ?></strong> <i class="fa fa-cog yellow"></i> <?php echo $lang['parts'] ?> <i class="fa fa-wrench"></i> <?php echo $lang['service'] ?> <i class="fa fa-circle-o yellow"></i> <?php echo $lang['tires'] ?></p>
          <p class="text-muted"><i class="fa fa-phone yellow"></i> 1-902-404-3000<br />
          <i class="fa fa-map-marker yellow"></i> 224 Wyse Rd. Dartmouth NS B3A 1M9</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="https://www.tastea.ca" target=_blank class="portfolio-link">
                    
                      <img src="img/sponsor/tastea.jpg" class="img-responsive center-block" alt="Tastea Inc">
                  </a>
                  <div class="portfolio-caption text-center">
                      <h4>Tastea Inc</h4>
                      <p class="text-muted"><strong><?php echo $lang['discount'] ?></strong><?php echo $lang['tastee-discount'] ?></p>
          <p class="text-muted"><i class="fa fa-phone yellow"></i> (450) 332-0780<br />
           <i class="fa fa-map-marker yellow"></i> 1313 Ch Chambly, Longueuil, QC J4J 3X1</p>
                  </div>
              </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
                  <a href="https://www.sparkplugcoffee.com" target=_blank class="portfolio-link">
                    
                      <img src="img/sponsor/sparkplug2.jpg" class="img-responsive center-block" alt="Sparkplug Coffee">
                  </a>
                  <div class="portfolio-caption text-center">
                      <h4>Sparkplug Coffee</h4>
                      <p class="text-muted"><strong><?php echo $lang['discount'] ?></strong> <a href="https://www.sparkplugcoffee.com/shop-coffee/vespa-club-of-canada-coffee" target=_blank><?php echo $lang['click-details'] ?></a></p>
          <p class="text-muted"><i class="fa fa-phone yellow"></i> (647) 479-2897<br />
           <i class="fa fa-map-marker yellow"></i> Toronto, ON M5A 1N1</p>						 
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['shop-title'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $lang['shop-sub'] ?></h3>
                </div>
            </div>
            <div class="row text-center">
   
                <div class="col-sm-4">
                    <img src="img/shops/t-shirt2017.png" class="img-responsive center-block" alt="Shirt is Red with dark blue trim at neck and arms. Embroidered on left side of chest is the club's logo.  On the arm is embroidered the outline of a maple leaf in dark blue thread.">
                    <h4 class="service-heading"><?php echo $lang['shop1'] ?></h4>
                    <p class="text-muted"><?php echo $lang['dollar25'] ?> CAD</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="New Member's Shirt">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<p class="text-muted"><?php echo $lang['size'] ?>
						<input type="hidden" name="on0" value="Sizes" class="text-muted">
							<select name="os0">
								<!--<option value="Men's XL">XL</option>-->
								<option value="XXXL"><?php echo $lang['XXXL'] ?></option>
								<option value="Extra Large"><?php echo $lang['XL'] ?></option>
								<option value="Large"><?php echo $lang['L'] ?></option>
								<option value="Medium"><?php echo $lang['medium'] ?></option>
								<option value="Small"><?php echo $lang['small'] ?></option>
							</select> 
						<input type="hidden" name="currency_code" value="CAD">
						<!-- --><input type="hidden" name="option_select0" value="XXXL">
						<input type="hidden" name="option_amount0" value="25.00">
						<input type="hidden" name="option_select1" value="Extra Large">
						<input type="hidden" name="option_amount1" value="25.00">
						<input type="hidden" name="option_select2" value="Large">
						<input type="hidden" name="option_amount2" value="25.00">
						<input type="hidden" name="option_select3" value="Medium">
						<input type="hidden" name="option_amount3" value="25.00">
						<input type="hidden" name="option_select4" value="Small">
						<input type="hidden" name="option_amount4" value="25.00">

						<input type="hidden" name="option_index" value="0"></p>
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>
                <div class="col-sm-4">
                    <img src="img/shops/t-shirt.png" class="img-responsive center-block" alt="Vespa Vintage T-shirt.  Shirt is black. The words 'Vespa Club of Canada' written in pink on the front.">
                    <h4 class="service-heading"><?php echo $lang['shop2'] ?></h4>
                    <p class="text-muted"><?php echo $lang['dollar5'] ?> CAD</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vintage VCoC T's">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<p class="text-muted"><?php echo $lang['size'] ?>
						<input type="hidden" name="on0" value="Sizes" class="text-muted">
							<select name="os0">
								<!--<option value="Men's XL">XL</option>
								<option value="Men's XXL">XXL</option>-->
								<option value="Mens's Medium"><?php echo $lang['medium'] ?></option>
							</select> 
						<input type="hidden" name="currency_code" value="CAD">
						<!--<input type="hidden" name="option_select0" value="Men's XL">
						<input type="hidden" name="option_amount0" value="10.00"> -->
						<input type="hidden" name="option_select1" value="Mens's Medium">
						<input type="hidden" name="option_amount1" value="5.00">

						<input type="hidden" name="option_index" value="0"></p>
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>
				<div class="col-sm-4 text-center">
                    <img src="img/shops/t-shirt.png" class="img-responsive center-block" alt="Vespa Vintage T-shirt.  Shirt is black. The words 'Vespa Club of Canada' written in pink on the front.">
                    <h4 class="service-heading"><? echo $lang['shop3'] ?></h4>
                    <p class="text-muted"><?php echo $lang['dollar5'] ?> CAD</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vintage VCoC T's">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<p class="text-muted"><?php echo $lang['size'] ?><input type="hidden" name="on0" value="Sizes" class="text-muted">
							<select name="os0">
								<option value="Women's Small"><?php echo $lang['small'] ?></option>
								<option value="Women's Medium"><?php echo $lang['medium'] ?></option>
							</select> 
						<input type="hidden" name="currency_code" value="CAD">

						<input type="hidden" name="option_select2" value="Women's Small">
						<input type="hidden" name="option_amount2" value="5.00">
						<input type="hidden" name="option_select3" value="Women's Medium">
						<input type="hidden" name="option_amount3" value="5.00">
						<input type="hidden" name="option_index" value="0"></p>
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>
				
				
			</div>
			<div class="row text-center">
				<div class="col-sm-4 text-center">					
                    <img src="img/shops/rally.png" class="img-responsive center-block" alt="VCoC Rally Badge Large: The words 'Vespa Club of Canada' written in white around the round blue badge. In the center is an image of a scooter rider over a red maple leaf.">
                    
					<h4 class="service-heading"><?php echo $lang['shop4'] ?> </h4>					
                    <p class="text-muted"><?php echo $lang['dollar15'] ?> CAD</p>
					<p class="text-muted"><?php echo $lang['size'] ?>: 8" Colour: Blue</p>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vespa Club of Canada Large Badge">
						<input type="hidden" name="amount" value="15.00">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>
				
				<div class="col-sm-4 text-center">
                    <img src="img/shops/VCoc_small.png" class="img-responsive center-block" alt="VCoC Rally Badge Small: The words 'Vespa Club of Canada' written in white around the round black badge. In the center is an image of a scooter rider over a red maple leaf.">
                    <h4 class="service-heading"><?php echo $lang['shop5'] ?></h4>
                    <p class="text-muted"><?php echo $lang['dollar5'] ?> CAD</p>
					<p class="text-muted"><?php echo $lang['size'] ?>: 3.5" Colour: Black</p>				
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vespa Club of Canada Small Badge">
						<input type="hidden" name="amount" value="5.00">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>  
				<div class="col-sm-4 text-center">
                    <img src="img/shops/vespa70.png" class="img-responsive center-block" alt="Vespa 70 years button and decal: The word 'Vespa' with the date 1946 - 2016 and a large 70 written in white over a red maple leaf with a green background.">
                    <h4 class="service-heading"><?php echo $lang['shop6'] ?></h4>
                    <p class="text-muted"><?php echo $lang['dollar2'] ?> CAD</p>
			
					
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vespa 70 years">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<p class="text-muted"><?php echo $lang['options'] ?><input type="hidden" name="on0" value="Sizes" class="text-muted">
							<select name="os0">
								<option value='Button large'><?php echo $lang['button'] ?> 3<?php echo $lang['inch'] ?></option>
								<option value='Button small'><?php echo $lang['button'] ?> 1.75<?php echo $lang['inch'] ?></option>
								<option value='Decal'><?php echo $lang['decal'] ?> 3<?php echo $lang['inch'] ?></option>
							</select> 
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="option_select0" value="Button large">
						<input type="hidden" name="option_amount0" value="2.00">
						<input type="hidden" name="option_select1" value="Button small">
						<input type="hidden" name="option_amount1" value="2.00">
						<input type="hidden" name="option_select2" value="Decal">
						<input type="hidden" name="option_amount2" value="2.00">

						<input type="hidden" name="option_index" value="0"></p>
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>  
			</div>
			
			<div class="row text-center">
				<div class="col-sm-4 text-center">
                    <img src="img/shops/banner.png" class="img-responsive center-block" alt="VCOC banner styled like the Canadian flag with red bars on end and the words 'Vespa Club of Canada' written arcross a red maple leaf.">
                    <h4 class="service-heading"><?php echo $lang['shop6'] ?></h4>
                    <p class="text-muted"><?php echo $lang['dollar25'] ?> CAD</p>
					<p class="text-muted"><b><?php echo $lang['shop6des'] ?></b> <?php echo $lang['size'] ?>: 26<?php echo $lang['inch'] ?> x 8<?php echo $lang['inch'] ?></p>				
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vespa Club of Canada Legshield Banner">
						<input type="hidden" name="amount" value="25.00">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>
				<div class="col-sm-4 col-sm-offset-4 text-center">					
                    <img src="img/shops/neck.png" class="img-responsive center-block" alt="Vespa Club of Canada Neck Warmer: Red in colour with the Vespa Club of Canada logo as a repeated pattern in darker red.">
                    
					<h4 class="service-heading"><?php echo $lang['shop7'] ?></h4>					
                    <p class="text-muted"><?php echo $lang['dollar20'] ?> CAD</p>
					<p class="text-muted"><?php echo $lang['onesize'] ?></p>
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vespa Club of Canada Neck Warmer">
						<input type="hidden" name="amount" value="20.00">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
                </div>
            </div>
			
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section id="joinus" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['join-title'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $lang['join-sub'] ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                  <img src="img/keepcalm.png" class="img-responsive img-circle center-block" alt="Keep Calm and Drive a Vespa">
                  <?php echo $lang['join-why'] ?>
                </div>
                <div class="col-sm-4 text-center">
                  <img src="img/cog.png" class="img-responsive img-circle center-block" alt="VCoC Member's Badge">
                  <?php echo $lang['join-included'] ?>
                </div>
                <div class="col-sm-4 text-center">
                  <img src="img/club.png" class="img-responsive img-circle center-block" alt="Keep Calm and Drive a Vespa">
                  <?php echo $lang['join-how'] ?>				
                  <p class="text-muted"><?php echo $lang['dollar21'] ?> CAD</p>
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="business" value="membership@vespaclubofcanada.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Vespa Club of Canada Annual Membership">
						<input type="hidden" name="amount" value="21.00">
						<input type="hidden" name="currency_code" value="CAD">
						<input type="hidden" name="button_subtype" value="products">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <p class="small text-muted"><?php echo $lang['join-included-foot'] ?></p>
                </div>
            </div>
        </div>
    </section>
	
	
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['contact-title'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $lang['contact-sub'] ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo $lang['contact-name'] ?> *" id="name" required data-validation-required-message="<?php echo $lang['contact-name-error'] ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo $lang['contact-email'] ?> *" id="email" required data-validation-required-message="<?php echo $lang['contact-email-error'] ?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="<?php echo $lang['contact-phone'] ?> " id="phone" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="<?php echo $lang['contact-message'] ?> *" id="message" required data-validation-required-message="<?php echo $lang['contact-message'] ?>"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl"><?php echo $lang['send'] ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy;<?php echo $lang['copyright'] ?>  <?php echo $lang['title'] ?> 2016 - <?php echo date("Y") ?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                      
                        <li><a href="https://www.facebook.com/vespaclubofcanada/?fref=ts"><i class="fa fa-facebook"></i></a>
                        </li>
                      
                    </ul>
                </div>
                <div class="col-md-4">
                   <span class="copyright"><?php echo $lang['credit'] ?> <a href="http://www.rockycoastcreative.ca">Rocky Coast Creative</a></span>
                </div>
            </div>
        </div>
    </footer>

   
  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

	<!-- Google Map API -->
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY1jjwEO1aLvRocUBNyMQCqL113KpAXi4&callback=initMap">
    </script>

</body>

</html>
