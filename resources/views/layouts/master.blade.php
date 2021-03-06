<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logos/church-logo3.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/header1.css"> -->
    <link rel="stylesheet" href="css/ihover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="dist/css/slider-pro.min.css"/>
    <link rel="stylesheet" href="flipclock/compiled/flipclock.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/gallery-grid.css">
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script> -->



    <title>| Deliverance Church International Kasarani</title>

    <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--AOS Library for element animation-->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">  

</head>

<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer')


<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animate-plus.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="dist/js/jquery.sliderPro.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://momentjs.com/downloads/moment-timezone-with-data-2012-2022.js"></script>
<script src="flipclock/compiled/flipclock.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 2000
    });
</script>
<script>
    $(document).ready(function(){
        $(".navbar button").click(function(){
            $(".toHide").toggle();
            $(".toHide").css("border-color", "red");
        });
    });
</script>
<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#dcik-theme' ).sliderPro({
            width: '100%',
            height: 300,
            arrows: false,
            buttons: true,
            waitForLayers: true,
            fade: true,
            autoplay: true,
            autoScaleLayers: false,
            thumbnailPosition: 'bottom',
            breakpoints: {
                576: {
                    height: 300
                }
            }

        });
	});
</script>
<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#sermon-slider' ).sliderPro({
            height:720,
            width: '100%',
            arrows: false,
            buttons: true,
            waitForLayers: true,
            fade: true,
            autoplay: false,
            autoScaleLayers: false,
            thumbnailPosition: 'bottom',
            // breakpoints: {
            //     767: {
            //         height: 700
            //     }             
            // }
        });
	});
</script>
<script>
$(document).ready(function() {
  var clock;
 
  // Grab the current date
  var currentDate = new Date();
 
  // Target future date/24 hour time/Timezone.
  var targetDate = moment.tz("2018-11-25 17:30", "Africa/Nairobi");
 
  // Calculate the difference in seconds between the future and current date
  var diff = targetDate / 1000 - currentDate.getTime() / 1000;
 
  if (diff <= 0) {
    // If remaining countdown is 0
    clock = $(".clock").FlipClock(0, {
      clockFace: "DailyCounter",
      countdown: true,
      autostart: false
    });
    console.log("Date has already passed!")
    
  } else {
    // Run countdown timer
    clock = $(".clock").FlipClock(diff, {
      clockFace: "DailyCounter",
      countdown: true,
      callbacks: {
        stop: function() {
          console.log("Timer has ended!")
        }
      }
    });
    
    // Check when timer reaches 0, then stop at 0
    setTimeout(function() {
      checktime();
    }, 1000);
    
    function checktime() {
      t = clock.getTime();
      if (t <= 0) {
        clock.setTime(0);
      }
      setTimeout(function() {
        checktime();
      }, 1000);
    }
  }
});
</script>

<script>
    $(document).ready(function(){
    $(".button a").click(function(){
        $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);   
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});
</script>

<script>
    baguetteBox.run('.tz-gallery');
</script>

<script>
$(document).ready(function(){
$('.nav-link').click(function() {
    if (parseInt($(window).width()) <= 991) {
        console.log(" sm breakpoint");
        $(".nav-link").removeAttr("data-toggle");
     }
    
    });
});

</script>

<script>
    $(document).ready(function(){
    const menu = $("li.dropdown");
    menu.on("mouseenter mouseleave", function(){
        menu.toggleClass("open");
    });
});
</script>

</body>
</html>
