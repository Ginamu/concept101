
<!DOCTYPE html>
<html>
<head>
  <title>Our Portfolio</title>

    <!-- styles -->
  <link href="plato/assets/css/bootstrap.css" rel="stylesheet">
  <link href="plato/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="plato/assets/css/docs.css" rel="stylesheet">
  <link href="plato/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="plato/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="plato/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="plato/assets/css/flexslider.css" rel="stylesheet">
  <link href="plato/assets/css/refineslide.css" rel="stylesheet">
  <link href="plato/assets/css/font-awesome.css" rel="stylesheet">
  <link href="plato/assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="plato/assets/css/style.css" rel="stylesheet">
  <link href="plato/assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="plato/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="plato/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="plato/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="plato/sassets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Plato
    Theme URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <link rel="stylesheet" type="text/css" href="concept/css/bootstrap.css" media="screen"> 

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="concept/css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="concept/css/settings.css" media="screen" />

  <link rel="stylesheet" type="text/css" href="concept/css/font-awesome.css" media="screen">
  <link rel="stylesheet" type="text/css" href="concept/css/jquery.bxslider.css" media="screen">
  <link rel="stylesheet" type="text/css" href="concept/css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="concept/css/responsive.css" media="screen">
  
  <link rel="shortcut icon" href="concept/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="concept/images/favicon.png" type="image/x-icon">

  <!-- Style Switch -->
  <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/yellow-black.css" title="yellow" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/violet-black.css" title="black" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/orange-black.css" title="orange" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/blue-black.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="concept/css/colors/red-black.css" title="red" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/green-black.css" title="green" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/pink-black.css" title="pink" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="concept/css/colors/pale-green-black.css"  title="pale-green" media="screen" />


</head>
<body>
 </section>
   <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12" id="portfolio3">
          <article>
            <div class="heading">
              <h3><strong>My manager</strong></h3>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <!-- start flexslider -->
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="concept/pics/task1.png" alt="" />
                    </li>
                    <li>
                      <img src="concept/pics/task2.png" alt="" />
                    </li>
                    <li>
                      <img src="concept/pics/task3.png" alt="" />
                    </li>
                  </ul>
                </div>
                <!-- end flexslider -->
                <div class="blank10"></div>
                <p>
                  Cu cum noster euismod appellantur, mundi vitae vim ut, ea sea scripta expetendis vituperatoribus. Et cibo dicat impetus cum, id his quodsi scripserit. Nec purto habeo recteque eu. Posse oportere accusamus an sit, ex quando phaedrum sapientem ius. Perfecto
                  ocurreret no nam, eu quas cetero qui, vel ea minim nusquam salutatus. Nemore integre his ei, tollit eirmod eam at.
                </p>
              </div>
              <div class="span4">
                <aside>
                  <div class="widget">
                    <h4>Project information</h4>
                    <ul class="project-detail">
                      <li><label>Project name :</label> My Manager</li>
                      <li><label>Category :</label> Web </li>
                      <li><label>Project date :</label>6 January 2017</li>
                      <li><label>Project link :</label><a href="#">www.mymanager.co.ke</a></li>
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>

 
   <?php include 'footer.php'; ?>
    <script type="text/javascript" src="concept/js/jquery.min.js"></script>
  <script type="text/javascript" src="concept/js/jquery-ui.js"></script>
  
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


<script type="text/javascript" src="concept/js/jquery.superfish.js"></script>
  <script type="text/javascript" src="concept/js/jquery.bxslider.js"></script>
  <script type="text/javascript" src="concept/js/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="concept/js/bootstrap.js"></script>
  <script type="text/javascript" src="concept/js/retina-1.1.0.min.html"></script>
  <script type="text/javascript" src="concept/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="concept/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="concept/js/plugins-scroll.html"></script>
    <script type="text/javascript" src="concept/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="concept/js/jquery.imagesloaded.min.js"></script>
  <script type="text/javascript" src="concept/js/jquery.appear.js"></script>
  <script type="text/javascript" src="concept/js/jquery.countTo.js"></script>
  <script src="concept/js/jquery.parallax.html"></script>
     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="concept/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="concept/js/script.js"></script>
   <!-- Style Switcher -->
  <script src="concept/js/styleswitch.js"></script>
  <script src="concept/js/style_switch_custom.js"></script>


   <script src="plato/assets/js/jquery.js"></script>
  <script src="plato/assets/js/modernizr.js"></script>
  <script src="plato/assets/js/jquery.easing.1.3.js"></script>
  <script src="plato/assets/js/google-code-prettify/prettify.js"></script>
  <script src="plato/assets/js/bootstrap.js"></script>
  <script src="plato/assets/js/jquery.prettyPhoto.js"></script>
  <script src="plato/assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="plato/assets/js/portfolio/setting.js"></script>
  <script src="plato/assets/js/hover/jquery-hover-effect.js"></script>
  <script src="plato/assets/js/jquery.flexslider.js"></script>
  <script src="plato/assets/js/classie.js"></script>
  <script src="plato/assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="plato/assets/js/jquery.refineslide.js"></script>
  <script src="plato/assets/js/jquery.ui.totop.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="plato/assets/js/custom.js"></script>

</body>
</html>