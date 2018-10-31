@extends('layouts.master') 


@section('content')

<!-- CAROUSEL -->

<div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="35000" style="">

    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active indicators"></li>
        <li data-target="#carouselIndicators" data-slide-to="1" class="indicators"></li>
        <li data-target="#carouselIndicators" data-slide-to="2" class="indicators"></li>
        <!-- <li data-target="#carouselIndicators" data-slide-to="3" class="indicators"></li> -->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item church active">

            <!-- <div class="video-overlay"></div>
            <video class="video-fluid"  autoplay loop muted preload>
                <source src="../img/videos/deli.mp4" type="video/mp4" /> Your browser does not support the video tag.
            </video> -->

            <img class="d-block w-100" src="../img/homepage/dcik_gathering2.jpg" alt="First slide">


            <div class="container">
                <div class="carousel-caption ml-auto" style="position: absolute; right:0;">
                    <!-- <h1 class="animate-plus  text-center " data-animations="slideInDown" data-animation-delay="0s" data-animation-duration="4s">WELCOME TO</h1> -->
                    <h2 class="animate-plus  text-center " data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
                        DELIVERANCE CHURCH INTERNATIONAL KASARANI
                    </h2>
                    <p class="animate-plus d-none d-md-block" data-animations="bounceInLeft" data-animation-delay="6s" data-animation-duration="5s"
                        style="color:white;">"We are a ministry on time, centered on the Bible, believing in the Holy Spirit, and preaching Jesus(Col 1:28), Him Risen and Reigning. 34 Years in, He has not once failed us! Karibu Sana DCIK_z.
                        <p>
                     <button class="animate-plus btn "  data-animations="bounceInLeft" data-animation-delay="9s" data-animation-duration="5s"><a class="text-light" href="/visit-us">VISIT US</a></button>
                     <button class="animate-plus btn " data-animations="bounceInRight" data-animation-delay="8s" data-animation-duration="5s"><a class="text-light" href="/sermons">WATCH SERMONS</a></button>
                </div>
            </div>
        </div>

        <div class="carousel-item poster">
            <img class="d-block w-100" src="../img/homepage/icc_2018.jpeg" alt="Second slide">

        </div>

        <div class="carousel-item poster">
            <img class="d-sm-block  w-100" src="../img/homepage/doi2.jpg" alt="Third slide">
        </div>



    </div>


</div>

<!-- END OF CAROUSEL -->

<!-- SERVICES ALERT  -->

<div class="container-fluid mt-1 font-official" style="height: 100px; margin-bottom:100px;">
    <p class="lead py-4 col-sm text-center" style="font-weight:400; font-size:28px;">Join us every Sunday @ 7:00 a.m,9:00 a.m. and 11:00 a.m.
        <br>
        <button class="btn btn-large bg-danger ml-5 ">
            <a href="/services" class="text-light">
                <h4> See All Services </h4>
            </a>
        </button>
    </p>
</div>

<!-- END OF SERVICE ALERT -->

<!-- WELCOME -->

<div class="container-fluid  text-dark" style="" >
    <div class="row mt-2" data-aos="zoom-in-left">
        <div class="col col-sm col-md-4 mt-5">
            <img src="../img/homepage/dad_and_mum.jpg" alt="" class="card-img img-fluid" style=""> 
        </div>
        <div class="col-md-8 text-center text-dark">
            <h1 class="text-dark">Welcome to Deliverance Church Kasarani</h1>
            <hr>
            <p class="muted">Come and experience the realness of God.</p>
            <p class="lead display-5 mt-5">
                We are more than delighted to host you on the Deliverance Church Kasarani - Zimmerman website. Our desire is that as you browse through, you will be so nourished as you log out you will be more deeply rooted in the word of Christ, ready to do extraordinary exploits like Daniel (Dan. 11:32). You're welcome to watch the impactful sermons on our database.
            </p>

            <p class="lead display-5 mt-1">If you wish to join a cell or volunteer your skills and time we are more than willing to connect you to any of the ministries in the church. Join us in any of our services or meetings as we grow together in Christ and make Jesus known to all. We appreciate and value you. - </p>
            <h2> Bishop Dr. Jimmy & Pastor Alice Kimani (Lead Pastors)</h2>
        </div>
    </div>
</div>

<!-- END WELCOME -->


<!-- QUICK TOUR -->


<div class=" row bg-overlay-3 what-we-believe  text-center text-dark mt-5">
    <div class="col text-light">
        <h1 class="display-3 mt-5">What We Believe</h1>
        <p class="lead">The Bible is the inspired, only infallible word of God (2 Tim 3:15-17; 2 Peter 1:19-21; 1 Thessalonians 2:13).</p>
        <p>This means that God's Word stands on its own - it doesn't need a complement or a supplement.</p>
        <br>
        <hr>
        <p class="lead">There is one Eternal, Almighty and Perfect God.</p>
        <p>He reveals Himself as Father, Son and Holy Spirit with distinct personal attributes, without division of Nature, Essence,
            or Being (Deuteronomy 6:4; John 1:1; 14; Gen 1:2, 26-27).</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="what-we-believe" role="button">Learn more</a>
        </p>
    </div>
</div>
<!-- END OF QUICK TOUR -->


<!-- QUICKTOUR -->
<div class="row quicktour">
    <div class="col-xl-3 col-xs-12 col-sm-12 dark-overlay">
        <img src="/img/gallery/bridge.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">I'm New Here</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>

    <div class="col-xl-3">
        <img src="/img/gallery/benches.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">Join a Cell</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>

    <div class="col-xl-3">
        <img src="/img/gallery/rails.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">Serve</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>

    <div class="col-xl-3">
        <img src="/img/gallery/traffic.jpg" height="300" alt="">
        <a href="#">
            <div class=" quicktour-img-caption">
                <h1 class="ml-3">Discipleship</h1>
                <hr class="bg-light w-25">
                <button class="ml-3 mb-2 btn btn-lg" style="background-color:transparent; border:1px solid #fff; color:white;">Know
                    More</button>
            </div>
        </a>
    </div>
</div>



<!-- END QUICKTOUR -->

<!-- EVENTS -->
<div class="row mt-5">
    <div class="col-xl-9 col-xs-12 event-countdown" style="background-image: url('/img/gallery/bg-5.jpg');">
        <h1 class="text-center">Next Event Starts In:</h1>
        <div class="clock  "></div>
    </div>

    <div class="col-xl-3">
        <h1>Upcoming Events</h1>
        <div class="">
            <div class="col-md-3">
                <h3><span class="badge badge-danger">Nov 4</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Family Day</strong><br>
                <em>Food,Fun,Family</em><br>
                <span class="small">9:00 AM - 1:00 PM</span>
            </div>
        </div>

        <div class="events">
            <div class="col-md-3">
                <h3><span class="badge badge-danger">Nov 25</span></h3>
            </div>
            <div class="col-md-9">
                <strong>International Conquerors Conference</strong><br>
                <em>Come,let us worship.</em><br>
                <span class="small">8:00 AM - 8:00 PM</span>
            </div>
        </div>

        <div class="events">
            <div class="col-md-3">
                <h3><span class="badge badge-danger">Dec 12</span></h3>
            </div>
            <div class="col-md-9">
                <strong>Lorem, ipsum.</strong><br>
                <em>Lorem ipsum dolor sit.</em><br>
                <span class="small">5:30 PM - 8:00 PM</span>
            </div>
        </div>
    </div>
</div>
<!-- END EVENTS -->
.


<div class="text-center hr-divider">
    <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
        class="">
</div>
<h3 class="text-center text-dark">RECENT SERMONS</h3>

        <div class="row mt-1 ">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl mx-auto col-md-8 sermons">
                <div class="card"  style="margin-top: 10%;">
                    <img  class="card-img-top" src="img/homepage/bible1.jpg">
                    <h1 card-title  style="font-size: 25px;">
                            <span class="badge badge-danger">June 10th 2018</span>
                    </h1>
                    <hr class="" style="background-color:red;">
                    <div class="card-title text-dark display-5"><strong> Can God Use Me? </strong> </div>
                    <div class="card-text text-muted">Bishop Dr. Jimmy Kimani</div>
                    <div class="display-inline">
                    <i class="fas fa-video ml-2 display-inline-item"></i>
                    <i class="fas fa-headphones ml-2 display-inline-item"></i>
                    <i class="fas fa-file-pdf ml-2 display-inline-item"></i>
                    </div>  
                    <p class="lead card-text text-dark" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt quae tempore!</p>
                    <a href="/sermons" class="text-center " style="border: 1px solid gray;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                    </div>       
            </div>

           <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl  mx-auto col-md-8 sermons">
                <div class="card"  style="margin-top: 10%;">
                    <img  class="card-img-top" src="img/homepage/bible2.jpg" >
                    <h1 card-title  style="font-size: 25px;">
                            <span class="badge badge-danger">June 3rd 2018</span>
                    </h1>
                    <hr class="" style="background-color:red;">
                    <div class="card-title text-dark display-5"><strong> Fresh Oil </strong> </div>
                    <div class="card-text text-muted">Bishop Dr. Jimmy Kimani</div>
                    <div class="display-inline">
                    <i class="fas fa-video ml-2 display-inline-item"></i>
                    <i class="fas fa-headphones ml-2 display-inline-item"></i>
                    <i class="fas fa-file-pdf ml-2 display-inline-item"></i>
                    </div>  
                    <p class="lead card-text text-dark" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt quae tempore!</p>
                    <a href="/sermons" class="text-center " style="border: 1px solid gray;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                    </div>       
            </div>


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl mx-auto col-md-8 sermons">
                <div class="card"  style="margin-top: 10%;">
                    <img class="card-img-top" src="img/homepage/bible3.jpg" >
                    <h1 card-title  style="font-size: 25px;">
                            <span class="badge badge-danger">May 27th 2018</span>
                    </h1>
                    <hr class="" style="background-color:red;">
                    <div class="card-title text-dark display-5"><strong> Ministry with the Angels </strong> </div>
                    <div class="card-text text-muted">Bishop Dr. Jimmy Kimani</div>
                    <div class="display-inline">
                    <i class="fas fa-video ml-2 display-inline-item"></i>
                    <i class="fas fa-headphones ml-2 display-inline-item"></i>
                    <i class="fas fa-file-pdf ml-2 display-inline-item"></i>
                    </div>  
                    <p class="lead card-text text-dark" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt quae tempore!</p>
                    <a href="/sermons" class="text-center " style="border: 1px solid gray;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                    </div>       
            </div>


        </div>


    <!-- </div> -->
    <!-- </div> -->

    <!-- END -->

    <hr>

<!-- DCIK THEME OF THE YEAR -->
<div class=" ">
    <div class="slider-pro " id="dcik-theme" style="">
        <div class="sp-slides ">
            <!-- Slide 1 -->
            <div class="sp-slide bg-overlay">
                <h1 class="text-center text-light font-official display-3">THEME OF THE YEAR:KINGDOM MANIFESTATION</h1>
                <p class="lead mt-3 text-center text-light font-official">Matthew 6:10: Thy kingdom come, Thy will be done in earth, as it is in heaven</p>
            </div>

            <!-- Slide 2 -->
            <div class="sp-slide py-5 bg-overlay aya">
                <p class="lead mt-3 text-center text-light font-official pt-5">Matthew 6:33 New Living Translation (NLT) Seek the Kingdom of God above all else, and live righteously, and he
                    will give you everything you need.</p>
            </div>

            <!-- Slide 3 -->
            <div class="sp-slide py-5 bg-overlay aya">
                <p class="lead mt-3 text-center text-light font-official pt-5">Romans 14:17 New Living Translation (NLT) For the Kingdom of God is not a matter of what we eat or drink, but
                    of living a life of goodness and peace and joy in the Holy Spirit.</p>
            </div>

            <!-- Slide 4 -->
            <div class="sp-slide py-5 bg-overlay aya">
                <p class="lead mt-3 text-center text-light font-official pt-5">Matthew 24:14 New Living Translation (NLT) And the Good News about the Kingdom will be preached throughout the
                    whole world, so that all nations will hear it; and then the end will come.</p>
            </div>

            <!-- Slide 5 -->
            <div class="sp-slide py-5 bg-overlay aya">
                <p class="lead mt-3 text-center text-light font-official pt-5">Zechariah 14:9 New Living Translation (NLT) And the Lord will be king over all the earth. On that day there will
                    be one Lord—his name alone will be worshiped.</p>
            </div>
        </div>
    </div>
</div>
<!-- END OF THEME -->

   


    <!-- ARTICLES -->

    
    <div class="bg-overlay-2">
        
        <h3 class="text-center text-light mx-auto" style="font-weight:900; font-size:40px;">LATEST ARTICLES</h3>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="ih-item square colored effect4 mx-auto" style="margin-top:20px;">
                    <a href="#">
                        <div class="img-fluid">
                            <img  src="https://images.pexels.com/photos/34601/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img">
                        </div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sequi.</h5>
                            <h3 class="lead" style="border: 1px solid #ccc">READ MORE</h3>
                        </div>
                    </a>
                </div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-light" style="font-weight:900; font-size:20px;">STAGES OF DISLOYALTY PART 1</a>
                </div>
            </div>




            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="ih-item square colored effect4 mx-auto" style="margin-top:20px;">
                    <a href="#">
                        <div class="img-fluid">
                            <img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img" width="150px" height="150px">
                        </div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sequi.</h3>
                            <h3 class="lead" style="border: 1px solid #ccc">READ MORE</h3>
                        </div>
                    </a>
                </div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-light" style="font-weight:900; font-size:20px;">STAGES OF DISLOYALTY PART 2</a>
                </div>
            </div>


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="ih-item square colored effect4 mx-auto" style="margin-top:20px;">
                    <a href="#">
                        <div class="img-fluid" >
                            <img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img">
                        </div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sequi.</h3>
                            <h3 class="lead" style="border: 1px solid #ccc">READ MORE</h3>
                        </div>
                    </a>
                </div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-light" style="font-weight:900; font-size:20px;">STAGES OF DISLOYALTY PART 3</a>
                </div>
            </div>


        </div>


        <!-- GALLERY -->
    <div class="row mt-5">


<div class="col-lg-12">

    <div class="container">
        <div class="container gallery-container">
            
            <h3 class="text-center text-light" style="font-weight:900; font-size:40px;">DCIK GALLERY</h3>

            <p class="page-description text-center text-light" style="font-weight:900; font-size:30px;">Share special moments with friends :)</p>

            <div class="tz-gallery" >
                <div class="row" >
                    <div class="col-md" >
                        <div class="card border-0 bg-none">
                            <a class="lightbox" href="img/gallery/church1.jpg">
                                <img src="img/gallery/church1.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church2.jpg">
                                <img src="img/gallery/church2.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church3.jpg">
                                <img src="img/gallery/church3.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church4.jpg">
                                <img src="img/gallery/church4.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church5.jpg">
                                <img src="img/gallery/church5.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church6.jpg">
                                <img src="img/gallery/church6.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church7.jpg">
                                <img src="img/gallery/church7.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church8.jpg">
                                <img src="img/gallery/church8.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church9.jpg">
                                <img src="img/gallery/church9.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church10.jpg">
                                <img src="img/gallery/church10.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church11.jpg">
                                <img src="img/gallery/church11.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-0">
                            <a class="lightbox" href="img/gallery/church12.jpg">
                                <img src="img/gallery/church12.jpg" alt="Park" class="card-img-top">
                            </a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger btn-lg  mt-3 mx-auto text-center">View More</button>
            </div>
        </div>

    </div>

</div>
</div>
<!-- END OF GALLERY -->

    </div>

    <!-- END OF ARTICLES -->



    

       
<!-- <div class="bg-overlay" style="height: 100px;">
    <h1 class="text-center">SIGN UP TO OUR NEWSLETTER</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda reprehenderit earum consectetur voluptates in aperiam?</p>
    <form class="text-center">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div> -->

@endsection