<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bs4megamenu.css">
    <link rel="stylesheet" href="css/ihover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


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


</body>
</html>
