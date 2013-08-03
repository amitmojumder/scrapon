<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Welecome to Scrapon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.scrapon.forms.js"></script>
        <script src="js/jquery.scrapon.reveal.js"></script>
        <script src="js/js-scrapon-image-slider.js"></script>
        <script src="js/scrapon.gallery.js"></script>        
        <script src="js/scrapon.showHide.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery.dcjqaccordion.2.7.min.js"></script>
        <script src="js/jquery.selectbox-0.2.min.js"></script>
        <script src="js/jquery.foundation.tabs.js"></script>
        
        <script type="text/javascript">

  $(document).ready(function(){
	 $('.show_hide').showHide({			 
		  speed: 300,  // speed you want the toggle to happen	
		  easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		  changeText: 1, // if you dont want the button text to change, set this to 0
		  //showText: 'View',// the button text to show when a div is closed
		  //hideText: 'Close' // the button text to show when a div is open					   
	  }); 
  });

</script> 
       
         <!-- IE Fix for HTML5 Tags -->
         <!--[if lt IE 9]>
           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <![endif]-->
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div class="header"> <!--header block start here-->
  <div class="container">
    <div class="row">
       <div class="span12">
         <div class="logo left"> <!--logo start here-->
           <h1><a href="index.php"><img src="image/logo.png" alt="scrapon"/></a></h1>
         </div> <!--logo end here-->
         <div class="navigation left"> <!--upper navigation start here-->
           <div class="clearfix">
             <div class="nav-left left"> <!--top left navigation start here-->
               <ul>
                 <li><a href="openAshop.php">Open a Shop</a></li>
                 <li><a href="#">Buy Credits</a></li>
                 <li><a href="faq.php">FAQ</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="#" data-reveal-id="contactModal">Contact</a><?php include 'modal.php'; ?></li>
               </ul>
             </div> <!--top left navigation end here-->
             <div class="notification right"> <!--notification block start here-->
               <?php include 'nav.php'; ?>
             </div> <!--notification block end here-->
           </div>
           <div class="clearfix">
             <ul class="main-nav"> <!--main nav start here-->
             	<li><a href="#">complete kits</a></li>
             	<li><a href="#">templates</a></li>
             	<li><a href="#">embellishments</a></li>
             	<li><a href="#">vector</a></li>
             	<li><a href="#">backgrounds</a></li>
             	<li><a href="#">even more <span class="arrow"></span></a>
                  <ul class="nav-slide">
                    <li><a href="#">Photo card</a></li>
                    <li><a href="#">digital papers</a></li>
                    <li><a href="#">holiday themed</a></li>
                    <li><a href="#">for girls</a></li>
                    <li><a href="#">for boys</a></li>
                    <li><a href="#">family themed...etc</a></li>
                  </ul>
                </li>
             </ul> <!--main nav end here-->
             <div class="search-block"> <!--search block start here-->
               <input type="text" />
             </div> <!--search blcok end here-->
           </div> 
         </div> <!--upper navigation end here-->          
       </div>
    </div>
  </div>
</div> <!--header block end here-->




