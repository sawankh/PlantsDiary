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

  <title> Plants Diary</title>
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
  <link rel="stylesheet" href="less/style.css" />
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
  
  <script type="text/javascript" charset="utf-8">
 
    function uploadPhoto() {
        //selected photo URI is in the src attribute (we set this on getPhoto)
        var imageURI = document.getElementById('imageCamara').getAttribute("src");
        if (!imageURI) {
            alert('Please select an image first.');
            return;
        }
        //set upload options
        var options = new FileUploadOptions();
        options.fileKey = "file";
        options.fileName = imageURI.substr(imageURI.lastIndexOf('/')+1);
        options.mimeType = "image/jpeg";
        options.params = {
			
				'NameSci'		:	document.getElementsByClassName("NameSci").val(),
				'NameCom'		:	document.getElementsByClassName("NameCom").val(),
				'Longitude'		:	document.getElementsByClassName("Longitude").val(),
				'Latitude'		:	document.getElementsByClassName("Latitude").val(),
				'Date'			:	document.getElementsByClassName("Date").val(),
				'Observations'	:	document.getElementsByClassName("Observations").val()
	
        }
        var ft = new FileTransfer();
        ft.upload(imageURI, encodeURI("http:192.168.1.109/PlantsDiary/www/register_plant.php"), win, fail, options);
    }
    // Called if something bad happens.
    //
    function onFail(message) {
      console.log('Failed because: ' + message);
    }
    function win(r) {
        console.log("Code = " + r.responseCode);
        console.log("Response = " + r.response);
        //alert("Response =" + r.response);
        console.log("Sent = " + r.bytesSent);
    }
    function fail(error) {
        alert("An error has occurred: Code = " + error.code);
        console.log("upload error source " + error.source);
        console.log("upload error target " + error.target);
    }
    </script>

   <script type="text/javascript" charset="utf-8">
 
 	
	var dirIP = '192.168.1.109';
        // Wait for PhoneGap to load
        document.addEventListener("deviceready", onDeviceReady, false);
 
        // PhoneGap is ready
        function onDeviceReady() {
 		// Do cool things here...
        }
 
        function getImage() {
            // Retrieve image file location from specified source
            navigator.camera.getPicture(uploadPhoto, function(message) {
			alert('get picture failed');
		},{
			quality: 50, 
			destinationType: navigator.camera.DestinationType.FILE_URI,
			sourceType: navigator.camera.PictureSourceType.PHOTOLIBRARY
		}
            );
 
        }
 
        function uploadPhoto(imageURI) {
            var options = new FileUploadOptions();
            options.fileKey="file";
            options.fileName=imageURI.substr(imageURI.lastIndexOf('/')+1);
            options.mimeType="image/jpeg";
 
            var params = new Object();
            params.value1 = "test";
            params.value2 = "param";
 
            options.params = params;
            options.chunkedMode = false;
 
            var ft = new FileTransfer();
            ft.upload(imageURI, "http:192.168.1.109/PlantsDiary/www/register_plant.php", win, fail, options);
        }
 
        function win(r) {
            console.log("Code = " + r.responseCode);
            console.log("Response = " + r.response);
            console.log("Sent = " + r.bytesSent);
            alert(r.response);
        }
 
        function fail(error) {
         
        }
 
        </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
  <header>

  </header>
  <div role="main">
    
    <div id="servicesPage" data-role="page" class="page innerPage padpage padtop padbottom">
      <a href="index.html" class="menuButton">
        <img src="img/menu-button.png" alt="Menu" />
      </a>
      <h1><a href="#">A&ntilde;adir Planta</a></h1>
      <p>
        Rellene los datos de la muestra recogida.
      </p>
      <br>
      <br>
      
      <h4> Datos </h4>
          
          <form action="register_plant.php" id="enviar" method="POST" data-enhance="false" enctype="multipart/form-data" />
            <ul>
              <li>
                  <input class="textbox" type="text" placeholder="Nombre cient&iacute;fico" required name="NameSci" id="NameSci" />
              </li>
              <li>
                  <input class="textbox" type="text" placeholder="Nombre com&uacute;n" required name="NameCom" id="NameCom" />
              </li>
               <li>
              	<input type="button" class="button" value="Obtener Ubicaci&oacute;n" onClick="getLocation();"/>
              </li>
              <li>
                  <input class="textbox" type="text" placeholder="Latitude" name="Latitude" id="Latitude" />
              </li>
              <li>
                  <input class="textbox" type="text" placeholder="Longitude" name="Longitude" id="Longitude" />
              </li>
              <li>
                  <input class="textbox" type="date" placeholder="Date" required name="Date" id="Date"/>
              </li>
                <li>
             	<input type="button" class="button" value="Capturar Foto" onClick="capturarFoto();"/>
              </li>
               <li>
              	  <input class="textbox" type="file" placeholder="URL" required name="URL" id="URL"/>
              </li>
              <li>
				<br> <img style="display: none;" id="imageCamara" src="" /> <br>
              </li>
              <li>
              <textarea class="textarea required" placeholder="Observations" required name="Observations" id="Observations"></textarea>
              </li>
            </ul>
            
            <input type="submit" class="button buttonStrong right enviarContenido" value="Send" onClick="vibrate();" name="buttonSubmit" value="submit" />
            <div class="clearfix"></div>                
          </form>
        
       <br>
       <br> 
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
    <!--end page-->
    
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

<script type="text/javascript">
        app.initialize();
    </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
