@extends('layouts.master') @section('content')

<!-- CAROUSEL -->

<div id="carouselIndicators" class="toHide carousel slide" data-ride="carousel" data-interval="35000" style="">

    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active indicators"></li>
        <li data-target="#carouselIndicators" data-slide-to="1" class="indicators"></li>
        <li data-target="#carouselIndicators" data-slide-to="2" class="indicators"></li>
        <!-- <li data-target="#carouselIndicators" data-slide-to="3" class="indicators"></li> -->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <!-- <div class="" style="margin-top:-50px;"> -->
            <!-- <video  class="" src="../img/videos/deli.mp4"   autoplay loop></video> -->
            <div class="video-container">
                <video autoplay loop>
                    <source src="../img/videos/deli.mp4" type="video/mp4" />
                </video>
            </div>
            <!-- </div> -->

            <div class="container">
                <div class="carousel-caption ml-auto" style="position: absolute; right:0;">
                    <h2 class="animate-plus  text-center display-3" data-animations="slideInDown" data-animation-delay="0s" data-animation-duration="4s">WELCOME TO</h2>
                    <h1 class="animate-plus  text-center display-3" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
                        DELIVERANCE CHURCH INTERNATIONAL KASARANI
                    </h1>
                    <h2 class="animate-plus  text-center display-3" data-animations="slideInRight,bounce" data-animation-delay="4s" data-animation-duration="4s">COME AS YOU ARE !</h2>
                    <h2 class="animate-plus d-none d-md-block" data-animations="bounceInLeft" data-animation-delay="6s" data-animation-duration="5s"
                        style="color:white;">We are a church for the tribe of Kenya,no matter your look,your denomination,your religion,your race,no
                        matter your social status,you are welcome</h2>
                </div>
            </div>
        </div>

        <div class="carousel-item poster">
            <img class="d-block w-100" src="http://dcumoja.org/site2/wp-content/uploads/2018/01/slide12-1.jpg" alt="First slide">

        </div>

        <div class="carousel-item poster">
            <img class="d-sm-block  w-100" src="../img/homepage/doi.jpg" alt="First slide">

        </div>



    </div>


</div>

<!-- END OF CAROUSEL -->

<!-- SERVICES ALERT  -->

<div class="container-fluid mt-1 bg-light" style="height: 100px; margin-bottom:100px;">
    <p class="lead py-4  text-center" style="font-weight:400; font-size:28px;">Join us every Sunday @ 7:00 a.m,9:00 a.m. and 11:00 a.m.
        <br>
        <button class="btn btn-large bg-danger ml-5 ">
            <a href="/services" class="text-light">
                <h4> See All Services </h4>
            </a>
        </button>
    </p>
</div>

<!-- END OF SERVICE ALERT -->

<!-- QUICK TOUR -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="card-deck mx-auto mt-3">
            <div class="card   text-white">
                <img class="card-img " src="img/homepage/sermons" alt="Card image" height="300">
                <div class="card-img-overlay text-center" style=" background-color:rgba(150, 136, 7, 0.781); ">
                    <h5 class="card-title mt-5" style="font-weight:900; font-size:30px;">I'M NEW HERE</h5>
                    <i class="fas fa-10x fa-handshake"></i>
                </div>
            </div>

            <div class="card  text-white">
                <img class="card-img " src="img/homepage/sermons" alt="Card image" height="300">
                <div class="card-img-overlay text-center" style=" background-color:rgba(19, 150, 7, 0.774);">
                    <h5 class="card-title mt-5" style="font-weight:900; font-size:30px;">NEXT STEPS</h5>
                    <i class="fas fa-10x fa-step-forward"></i>
                </div>
            </div>

            <div class="card  text-white">
                <img class="card-img " src="img/homepage/sermons" alt="Card image" height="300">
                <div class="card-img-overlay text-center" style=" background-color:rgba(7, 69, 150, 0.774);">
                    <h5 class="card-title mt-5" style="font-weight:900; font-size:30px;">GET INVOLVED</h5>
                    <i class="fas fa-10x fa-people-carry"></i>
                </div>
            </div>

            <div class="card  text-white">
                <img class="card-img" src="img/homepage/sermons" alt="Card image" height="300">
                <div class="card-img-overlay text-center" style=" background-color:rgba(126, 7, 150, 0.774);">
                    <h5 class="card-title mt-5" style="font-weight:900; font-size:30px;">SERVICES</h5>
                    <i class="fas fa-10x fa-bell"></i>
                </div>
            </div>

        </div>
    </div>


    <div class="jumbotron text-center ">
        <h1 class="display-4 mt-5">What We Believe</h1>
        <p class="lead">The Bible is the inspired, only infallible word of God (2 Tim 3:15-17; 2 Peter 1:19-21; 1 Thessalonians 2:13).</p>
        <p>This means that God's Word stands on its own - it doesn't need a complement or a supplement.</p>
        <br>
        <p class="lead">There is one Eternal, Almighty and Perfect God.</p>
        <p>He reveals Himself as Father, Son and Holy Spirit with distinct personal attributes, without division of Nature,
            Essence, or Being (Deuteronomy 6:4; John 1:1; 14; Gen 1:2, 26-27).</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>


</div>





<!-- END OF QUICK TOUR -->




{{--WELCOME SECTION--}}

<!-- <div class="container-fluid vision-carriers toHide text-light " style="background-color: rgba(0,0,0,0.7); ">
    <div class="row mt-5">
        <div class="col-md-3">
            <img src="../img/pastors/dad-and-mum.jpg" alt="" class="card-img img-fluid" style="height:auto; max-width:100%;">
        </div>
        <div class="col-md-9">
            <p class="lead display-5 mt-5">
                "We are more than delighted to host you in the Deliverance Church Kasarani - Zimmerman website. Our desire is that in the
                few minutes that you browse through you will be nourished and when logging out you will be more deeply rooted
                in the word of Christ as a Christian and ready to do extraordinary exploits like Daniel for it is your portion.
                (Dan. 11:32) You may check out the life changing Sunday sermon and the history of sermons. You may plan to
                attend the church activities and support any project. If you wish to join a cell or volunteer your skills
                and time we are more than willing to connect you to any of the available ministries in the church. Join us
                in any of our services or meetings as we grow together in Christ and make Jesus known to all. We appreciate
                and value you. - Bishop Dr. Jimmy & Pastor Alice Kimani" </p>
            <h2>BISHOP DR. JIMMY KIMANI AND PASTOR ALICE KIMANI</h2>
        </div>
    </div>
</div> -->



<!-- EVENTS -->
<div class="events container-fluid font-official text-white mt-5 bg-light toHide">
    <div class="text-center hr-divider">
        <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
            class=""> </div>
    <h1 class="text-center mx-auto" style="color:blue">UPCOMING EVENTS</h1>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-title">
                    <h1 style="position:absolute; top:50px; left:0;">
                        <span class="badge badge-danger">March 30th-31st</span>
                    </h1>
                </div>
                <img src="img/events/navbar-events.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                <div class="card-text">
                    <h4 class=" text-primary text-center">Bolts and Nuts Seminar</h4>
                    <hr class="mx-auto">
                    <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
                </div>
                <div class="card-footer mx-auto">
                    <button class="btn btn-danger btn-large  text-right mt">Go To Event</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-title">
                    <h1 style="position:absolute; top:50px; left:0;">
                        <span class="badge badge-danger">April 13th-15th</span>
                    </h1>
                </div>
                <img src="img/events/grand-opening.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                <div class="card-text">
                    <h4 class=" text-primary text-center">Ladies Encounter</h4>
                    <hr class="mx-auto">
                    <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
                </div>
                <div class="card-footer mx-auto">
                    <button class="btn btn-danger btn-large  text-right mt">Go To Event</button>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-title">
                    <h1 style="position:absolute; top:50px; left:0;">
                        <span class="badge badge-danger">April 20th-22nd</span>
                    </h1>
                </div>
                <img src="img/events/icc-conference.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                <div class="card-text">
                    <h4 class=" text-primary text-center">Men's Encounter</h4>
                    <hr class="mx-auto">
                    <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
                </div>
                <div class="card-footer mx-auto">
                    <button class="btn btn-danger btn-large  text-right mt">Go To Event</button>
                </div>
            </div>
        </div>

        <div class="mx-auto">
            <h3 class="display-4 text-dark ">Next Event Starts In:</h3>
            <div class="clock mx-auto text-center" style="margin:2em;"></div>
        </div>
    </div>
</div>
<!-- END OF EVENTS -->


<div class="slider-pro mt-3 toHide" id="dcik-theme" style="background:rgba(38, 84, 145, 0.856);">
    <div class="sp-slides">
        <!-- Slide 1 -->
        <div class="sp-slide py-5">
            <h1 class="text-center text-light font-official">THEME OF THE YEAR:KINGDOM MANIFESTATION</h1>
            <p class="lead mt-3 text-center text-white font-official">Matthew 6:10: Thy kingdom come, Thy will be done in earth, as it is in heaven</p>
        </div>

        <!-- Slide 2 -->
        <div class="sp-slide py-5">
            <p class="lead mt-3 text-center text-white font-official" >Matthew 6:33 New Living Translation (NLT) Seek the Kingdom of God above all else, and live righteously, and he
                will give you everything you need.</p>
        </div>

        <!-- Slide 3 -->
        <div class="sp-slide py-5">
            <p class="lead mt-3 text-center text-white font-official ">Romans 14:17 New Living Translation (NLT) For the Kingdom of God is not a matter of what we eat or drink, but
                of living a life of goodness and peace and joy in the Holy Spirit.</p>
        </div>

        <!-- Slide 4 -->
        <div class="sp-slide py-5">
            <p class="lead mt-3 text-center text-white font-official" >Matthew 24:14 New Living Translation (NLT) And the Good News about the Kingdom will be preached throughout the
                whole world, so that all nations will hear it; and then the end will come.</p>
        </div>

        <!-- Slide 5 -->
        <div class="sp-slide py-5">
            <p class="lead mt-3 text-center text-white font-official" >Zechariah 14:9 New Living Translation (NLT) And the Lord will be king over all the earth. On that day there will
                be one Lord—his name alone will be worshiped.</p>
        </div>
    </div>
</div>






<!-- BLOG -->



    <div class="text-center hr-divider">
        <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
            class="">
    </div>
    <h3 class="text-center" style="color:blue">RECENT SERMONS</h3>

<!-- SERMON SLIDE        -->
<div class="slider-pro" id="sermon-slider">
    <div class="sp-slides">
        <!-- Slide 1 -->
        <div class="sp-slide bg-overlay">
            <div class="row mt-1">
                <div class="col-lg-3">
                    <div class="">
                        <iframe  src="https://www.youtube.com/embed/lgyakZLwAbc" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 " style="z-index:10;">
                    <h3 class="text-center ">Bishop Dr. Jimmy Kimani</h3>
                    <h3 class="text-center ">Kingdom Manifestation: Abundance in Life</h3>
                    <p class="lead text-light text-center ">John 10:10(KJV) The thief cometh not, but for to steal, and to kill, and to destroy: I am come that they
                        might have life, and that they might have it more abundantly.
                    </p>
                    <a href="/sermons" class="text-center text-light " style="border: 1px solid white;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="sp-slide bg-overlay">
            <div class="row">
                <div class="col-lg-3">
                    <div class=" ">
                        <iframe  src="https://www.youtube.com/embed/dEkfu70PVsk" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 ">
                    <h3 class="text-center ">Pastor Francis Omedo</h3>
                    <h3 class="text-center ">The Grace of God</h3>
                    <p class="lead text-center">John 10:10(KJV) The thief cometh not, but for to steal, and to kill, and to destroy: I am come that they
                        might have life, and that they might have it more abundantly.
                    </p>
                    <a href="/sermons" class="text-center text-light" style="border: 1px solid white;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="sp-slide bg-overlay">
            <div class="row">
                <div class="col-lg-3">
                    <div class="">
                        <iframe src="https://www.youtube.com/embed/vtbdwmLuBBM" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-8 mt-5">
                    <h3 class="text-center ">Pastor Ruth Wacu</h3>
                    <h3 class="text-center ">Storms of Life</h3>
                    <p class="lead text-light text-center ">John 10:10(KJV) The thief cometh not, but for to steal, and to kill, and to destroy: I am come that they
                        might have life, and that they might have it more abundantly.
                    </p>
                    <a href="/sermons" class="text-center text-light" style="border: 1px solid white;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END -->

</div>
</div>

<hr>




<div class="bg-light">
    <div class="text-center hr-divider">
        <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
            class=""> </div>
<h3 class="text-center mx-auto" style="color:blue">LATEST ARTICLES</h3>
<div class="row">
    <div class="col-lg blog">
        <div class="ih-item square colored effect4 mx-auto">
            <a href="#">
                <div class="img-fluid">
                    <img src="https://images.pexels.com/photos/34601/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img">
                </div>
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="info">
                    <h5 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sequi.</h5>
                    <h3 class="lead" style="border: 1px solid #ccc">Read More</h3>
                </div>
            </a>
        </div>
        <div class="mt-3 text-center">
            <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 1</a>
        </div>
    </div>




    <div class="col-lg mt-3 blog">
        <div class="ih-item square colored effect4 mx-auto">
            <a href="#">
                <div class="img-fluid">
                    <img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img">
                </div>
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="info">
                    <h5 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sequi.</h5>
                    <h3 class="lead" style="border: 1px solid #ccc">Read More</h3>
                </div>
            </a>
        </div>
        <div class="mt-3 text-center">
            <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 2</a>
        </div>
    </div>


    <div class="col-lg-3 mt-3 blog">
        <div class="ih-item square colored effect4 mx-auto">
            <a href="#">
                <div class="img-fluid">
                    <img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img">
                </div>
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="info">
                    <h5 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, sequi.</h5>
                    <h3 class="lead" style="border: 1px solid #ccc">Read More</h3>
                </div>
            </a>
        </div>
        <div class="mt-3 text-center">
            <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 3</a>
        </div>
    </div>

</div>

</div>


<div class="row bg-light">


    <!-- <h3 class="text-center mx-auto " style="color:blue">LATEST ARTICLES</h3> -->
    <div class="col-lg-9 mt-5">

        <div class="container">



            <div class="container gallery-container">
                <div class="text-center hr-divider">
                    <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
                        class=""> </div>
                <h3 class="text-center" style="color:blue">DCIK GALLERY</h3>

                <p class="page-description text-center">Share special moments with friends :)</p>

                <div class="tz-gallery">
                    <div class="row">
                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/park.jpg">
                                    <img src="img/gallery/park.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/benches.jpg">
                                    <img src="img/gallery/benches.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/bridge.jpg">
                                    <img src="img/gallery/bridge.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/sky.jpg">
                                    <img src="img/gallery/sky.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/tunnel.jpg">
                                    <img src="img/gallery/tunnel.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/traffic.jpg">
                                    <img src="img/gallery/traffic.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/sky.jpg">
                                    <img src="img/gallery/sky.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/tunnel.jpg">
                                    <img src="img/gallery/tunnel.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/traffic.jpg">
                                    <img src="img/gallery/traffic.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/coast.jpg">
                                    <img src="img/gallery/coast.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/rails.jpg">
                                    <img src="img/gallery/rails.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card">
                                <a class="lightbox" href="img/gallery/rocks.jpg">
                                    <img src="img/gallery/rocks.jpg" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-danger mt-3 mx-auto text-center">View More</button>
                </div>
            </div>

        </div>

    </div>



    <div class="col-lg-3">
        <div class="card mt-5">

            <div class="card-body">
                <div class="card-text" style="">
                    <h3 class="text-left mx-auto text-danger">STAY INFORMED</h3>
                    <a href="#" class="text-primary mt-2">Subscribe To Our Newsletter</a>
                    <hr>
                    <h5 class="text-primary mt-3">Connect With Us On Social Media</h5>
                    <div class=" social-media mt-4 list-inline mr-5">
                        <a href="https://www.facebook.com/dczimma/?fref=ts">
                            <i class="fab fa-3x text-secondary list-inline-item fa-facebook-square mr-3 mb-3"></i>
                        </a>
                        <a class="" href="#">
                            <i class="fab fa-3x fa-twitter-square list-inline-item text-secondary mr-3 mb-3"></i>
                        </a>
                        <a class="" href="https://www.youtube.com/channel/UCbFf1WXtK4WRV2tz9Zx6nIg">
                            <i class="fab fa-3x fa-youtube list-inline-item text-secondary mr-3 mb-3"></i>
                        </a>
                        <a class="" href="#">
                            <i class="fab fa-3x fa-instagram list-inline-item text-secondary mr-3 mb-3"></i>
                        </a>
                    </div>

                    <hr>

                    <h3 class="text-left mx-auto text-danger">LOOKING FOR SOMETHING?</h3>
                    <p class="lead">
                        <a href="#" class="text-primary">I'm New Here</a>
                    </p>
                    <hr>
                    <p class="lead">
                        <a href="#" class="text-primary">Next Steps</a>
                    </p>
                    <hr>
                    <p class="lead">
                        <a href="#" class="text-primary">Ministries</a>
                    </p>
                    <hr>
                    <p class="lead">
                        <a href="#" class="text-primary">Events</a>
                    </p>
                    <hr>
                    <p class="lead">
                        <a href="#" class="text-primary">Announcements</a>
                    </p>
                    <hr>
                    <p class="lead">
                        <a href="#" class="text-primary">The Father's Vision</a>
                    </p>
                    <hr>


                </div>
            </div>

        </div>


    </div>
</div>
@endsection