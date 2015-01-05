<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  -->

  <title> Plants Time</title>
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Mobile viewport optimization h5bp.com/ad -->
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <!--<link rel="stylesheet" href="less/libs/jquery.mobile.custom.structure.min.css">-->
  <link rel="stylesheet" href="less/libs/jquery.mobile-1.1.1.css" />
  <link rel="stylesheet" href="less/libs/flexslider.css" />
  <link rel="stylesheet" href="less/photoswipe/photoswipe.css" />



    
  <!-- LESS converted to css and minified via build script -->
  <link rel="stylesheet/less" href="less/style.css" />
  <script src="js/libs/less-1.1.4.js"></script>
  <!-- end LESS -->
  <!-- fonts -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css' />

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects;
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-XXXXX-X']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
  </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
  <header>

  </header>
  <div role="main">
    
    <div id="videosPage" data-role="page" class="page innerPage">
      <div class="topGrahic"></div>
      <a href="index.html" class="menuButton">
        <img src="img/menu-button.png" alt="Menu" />
      </a>
      
      <div class="padpage padtop">
        <h1><a href="#">Reciente.</a></h1>
      	 <p>
          	Aqu&iacute; puede ver las entradas recientes a su diario.
        </p>
         <form action="mostrar_reciente.php" id="enviar" method="POST" data-enhance="false" enctype="multipart/form-data">
		<input type="submit" class="button buttonStrong right listarContenido" value="Ver" name="buttonRecent" >
		</form>
      </div>
      
      <br /><br />
      <div class="padpage">
        <h2> </h2>
        <span class="h2">
          Entradas recientes.
        </span>
      </div>
  
          
        
      <div class="padpage padbottom">
        <div class="footer">
          <div class="social right">
            <a href="http://plus.google.com" target="_blank"> <img src="img/icon-gplus.png" alt="Like us on Google+" /></a>
            <a href="http://twitter.com" target="_blank"> <img src="img/icon-twitter.png" alt="Follow us on Twitter" /></a>
            <a href="http://facebook.com" target="_blank"> <img src="img/icon-facebook.png" alt="Like us on Facebook" /></a>
          </div>
          
          <div class="copyright left">
           Plants Time
          </div>
          
          <div class="clearfix"></div>
        </div>
        <!--end footer-->
        
      </div>
      <!--end padbottom-->
      
      
      </div>
    <!--end careers page-->
    
  </div>
  
  <footer>

  </footer>



  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
         
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.1.min.js"><\/script>')</script>


  <script type="text/javascript">
    $(document).bind("mobileinit", function(){
      $.mobile.defaultPageTransition = 'fade';
      $.mobile.ignoreContentEnabled = true;
      $.mobile.page.prototype.options.domCache = false;

      //$.mobile.ajaxEnabled = false;
    });
  </script>

  <script src="js/libs/iscroll.js"></script>
  <script src="js/libs/jquery.mobile-1.1.1.min.js"></script>
  <script src="js/libs/jquery.flexslider-min.js"></script>
  <script src="js/photoswipe/klass.min.js"></script>
  <script src="js/photoswipe/code.photoswipe.jquery-3.0.5.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/MobileDetect.js"></script>
  


  
  <!-- scripts concatenated and minified via build script -->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts -->


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
