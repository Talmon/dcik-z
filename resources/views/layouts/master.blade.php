<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logos/logo7.jpeg">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bs4megamenu.css">
    <link rel="stylesheet" href="css/ihover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="dist/css/slider-pro.min.css"/>
    <link rel="stylesheet" href="flipclock/compiled/flipclock.css">

    <title>Deliverance Church International Kasarani</title>

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
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animate-plus.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="libs/js/jquery-1.11.0.min.js"></script>
<script src="dist/js/jquery.sliderPro.min.js"></script>
<script src="flipclock/compiled/flipclock.js"></script>

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
            autoplay: false,
            autoScaleLayers: false,
            thumbnailPosition: 'bottom'

        });
	});
</script>
<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#sermons' ).sliderPro({
            width: '100%',
            height: 500,
            arrows: false,
            buttons: true,
            waitForLayers: true,
            fade: true,
            autoplay: false,
            autoScaleLayers: false,
            thumbnailPosition: 'bottom'

        });
	});
</script>
<script>
var clock;

$(document).ready(function() {

    // Grab the current date
    var currentDate = new Date();
    console.log(currentDate);

    // Set some date in the past. In this case, it's always been since Jan 1
    var futureDate  = new Date(currentDate.getFullYear(), 2, 30);
    console.log(futureDate);
    // Calculate the difference in seconds between the future and current date
    var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

    // Instantiate a coutdown FlipClock
    clock = $('.clock').FlipClock(diff, {
        clockFace: 'DailyCounter'
    });
});
</script>


</body>
</html>
