@extends('layouts.master') 


@section('content')

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

            <div class="video-overlay"></div>
            <video class="video-fluid"  autoplay loop muted preload>
                <source src="../img/videos/deli.mp4" type="video/mp4" /> Your browser does not support the video tag.
            </video>


            <div class="container">
                <div class="carousel-caption ml-auto" style="position: absolute; right:0;">
                    <!-- <h1 class="animate-plus  text-center " data-animations="slideInDown" data-animation-delay="0s" data-animation-duration="4s">WELCOME TO</h1> -->
                    <h2 class="animate-plus  text-center " data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
                        DELIVERANCE CHURCH INTERNATIONAL KASARANI
                    </h2>
                    <p class="animate-plus d-none d-md-block" data-animations="bounceInLeft" data-animation-delay="6s" data-animation-duration="5s"
                        style="color:white;">We are a church for everyone,no matter your look,your denomination,your religion,your race,no matter
                        your social status,you are welcome
                        <p>
                     <button class="animate-plus btn btn-lg btn-danger"  data-animations="bounceInLeft" data-animation-delay="9s" data-animation-duration="5s"><a class="text-light" href="/visit-us">VISIT US</a></button> 
                     <button class="animate-plus btn btn-lg btn-danger " data-animations="bounceInRight" data-animation-delay="8s" data-animation-duration="5s"><a class="text-light" href="/sermons">WATCH SERMONS</a></button>      
                </div>
            </div>
        </div>

        <div class="carousel-item poster">
            <img class="d-block w-100" src="../img/homepage/fathers-vision" alt="First slide">

        </div>

        <div class="carousel-item poster">
            <img class="d-sm-block  w-100" src="../img/homepage/doi.jpg" alt="First slide">

        </div>



    </div>


</div>

<!-- END OF CAROUSEL -->

<!-- SERVICES ALERT  -->

<div class="container-fluid mt-1 bg-light font-official" style="height: 100px; margin-bottom:100px;">
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






{{--WELCOME SECTION--}}

<div class="container-fluid  text-dark" style="" >
    <div class="row mt-5" data-aos="zoom-in-left">
        <div class="col-md-3 mt-3">
            <img src="../img/pastors/dad-and-mum.jpg" alt="" class="card-img img-fluid" style="height:auto; max-width:100%;">
        </div>
        <div class="col-md-9">
            <h1 class="">Welcome to Deliverance Church Kasarani</h1>
            <hr>
            <p class="muted">Come and experience the realness of God.</p>
            <p class="lead display-5 mt-5">
                "We are more than delighted to host you in the Deliverance Church Kasarani - Zimmerman website. Our desire is that in the
                few minutes that you browse through you will be nourished and when logging out you will be more deeply rooted
                in the word of Christ as a Christian and ready to do extraordinary exploits like Daniel for it is your portion.
                (Dan. 11:32) You may check out the life changing Sunday sermon and the history of sermons.</p>

            <p class="lead display-5 mt-1">You may plan to
                attend the church activities and support any project. If you wish to join a cell or volunteer your skills
                and time we are more than willing to connect you to any of the available ministries in the church. Join us
                in any of our services or meetings as we grow together in Christ and make Jesus known to all. We appreciate
                and value you. - Bishop Dr. Jimmy & Pastor Alice Kimani"</p>    
            <h2>BISHOP DR. JIMMY KIMANI AND PASTOR ALICE KIMANI</h2>
        </div>
    </div>
</div>



<!-- QUICK TOUR -->


<div class="what-we-believe bg-overlay text-center text-light mt-5 ">
    <h1 class="display-3 mt-5">What We Believe</h1>
    <p class="lead">The Bible is the inspired, only infallible word of God (2 Tim 3:15-17; 2 Peter 1:19-21; 1 Thessalonians 2:13).</p>
    <p>This means that God's Word stands on its own - it doesn't need a complement or a supplement.</p>
    <br>
    <p class="lead">There is one Eternal, Almighty and Perfect God.</p>
    <p>He reveals Himself as Father, Son and Holy Spirit with distinct personal attributes, without division of Nature, Essence,
        or Being (Deuteronomy 6:4; John 1:1; 14; Gen 1:2, 26-27).</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="what-we-believe" role="button">Learn more</a>
    </p>
</div>







<!-- END OF QUICK TOUR -->


<div class="tour container-fluid font-official text-white  bg-light">
    <div class="row">

        <div class="card col-md-6 border-0  col-lg-6 mt-lg-5 text-white" data-aos="zoom-in" data-aos-duration="500">
            <a href="/im-new-here" class="text-light">
                <img class="card-img" src="img/cathedral1.JPG" alt="Card image">
                <div class="card-img-overlay  text-center" style="">
                    <h5 class="card-title " style="font-weight:900; font-size:40px; position:absolute; bottom:35px; left:2; z-index:10;">I'M NEW HERE</h5>
                    <div class="button btn-danger btn-lg" style="position:absolute; bottom:0; left:2;">Check us out...</div>
                    <!-- <i class="fas fa-10x fa-handshake"></i> -->
                </div>
            </a>
        </div>



        <div class="card col-md-6 col-lg-6 border-0 mt-lg-0 mt-lg-5 text-white" data-aos="zoom-in" data-aos-duration="1500">
            <a href="/next-steps" class="text-light">
                <img class="card-img " src="img/the-fathers-vision.JPG" alt="Card image">
                <div class="card-img-overlay  text-center" style="">
                    <h5 class="card-title " style="font-weight:900; font-size:40px; position:absolute; bottom:35px; left:2; z-index:10;">NEXT STEPS</h5>
                    <div class="button btn-danger btn-lg" style="position:absolute; bottom:0; left:2;">Okay now,what next?...</div>
                    <!-- <i class="fas fa-10x fa-handshake"></i> -->
                </div>
            </a>
        </div>

        <div class="card col-md-6 mt-md-5 mt-lg-0 border-0 col-lg-6 mt-lg-5 text-white" data-aos="zoom-in" data-aos-duration="2500">
            <a href="get-involved" class="text-light">
                <img class="card-img " src="img/gallery/rocks.jpg" alt="Card image">
                <div class="card-img-overlay  text-center" style="">
                    <h5 class="card-title " style="font-weight:900; font-size:40px; position:absolute; bottom:35px; left:2; z-index:10;">GET INVOLVED</h5>
                    <div class="button btn-danger btn-lg" style="position:absolute; bottom:0; left:2;">Serve the Lord with us...</div>
                    <!-- <i class="fas fa-10x fa-handshake"></i> -->
                </div>
            </a>
        </div>

        <div class="card col-md-6 mt-md-5 mt-lg-0 border-0 col-lg-6 mt-lg-5 mx-auto text-white" data-aos="zoom-in" data-aos-duration="3500">
            <a href="/services" class="text-light">
                <img class="card-img" src="img/bg-1.JPG" alt="Card image">
                <div class="card-img-overlay  text-center" style="">
                    <h5 class="card-title " style="font-weight:900; font-size:40px; position:absolute; bottom:35px; left:2; z-index:10;">SERVICES</h5>
                    <div class="button btn-danger btn-lg" style="position:absolute; bottom:0; left:2;">Come and worship us...</div>
                    <!-- <i class="fas fa-10x fa-handshake"></i> -->
                </div>
            </a>
        </div>
    </div>
</div>
<!-- END OF TOUR -->



<!-- EVENTS -->
<div class="events container-fluid font-official text-white mt-5 bg-light" data-aos="fade-down" data-aos-duration="4500">
    <div class="text-center hr-divider">
        <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
            class=""> </div>
    <h1 class="text-center text-dark mx-auto">UPCOMING EVENTS</h1>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-title">
                    <h1 style="position:absolute; top:50px; left:0;">
                        <span class="badge badge-danger">August 2nd-7th</span>
                    </h1>
                </div>
                <img src="img/events/navbar-events.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                <div class="card-text">
                    <h4 class=" text-primary text-center">Harvest Conference</h4>
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


<!-- DCIK THEME OF THE YEAR -->
<div class="slider-pro  mt-3 toHide" id="dcik-theme" style="">
    <div class="sp-slides ">
        <!-- Slide 1 -->
        <div class="sp-slide bg-overlay py-5">
            <h1 class="text-center text-light font-official pt-5">THEME OF THE YEAR:KINGDOM MANIFESTATION</h1>
            <p class="lead mt-3 text-center text-light font-official">Matthew 6:10: Thy kingdom come, Thy will be done in earth, as it is in heaven</p>
        </div>

        <!-- Slide 2 -->
        <div class="sp-slide py-5 bg-overlay">
            <p class="lead mt-3 text-center text-light font-official pt-5">Matthew 6:33 New Living Translation (NLT) Seek the Kingdom of God above all else, and live righteously, and he
                will give you everything you need.</p>
        </div>

        <!-- Slide 3 -->
        <div class="sp-slide py-5 bg-overlay">
            <p class="lead mt-3 text-center text-light font-official pt-5">Romans 14:17 New Living Translation (NLT) For the Kingdom of God is not a matter of what we eat or drink, but
                of living a life of goodness and peace and joy in the Holy Spirit.</p>
        </div>

        <!-- Slide 4 -->
        <div class="sp-slide py-5 bg-overlay">
            <p class="lead mt-3 text-center text-light font-official pt-5">Matthew 24:14 New Living Translation (NLT) And the Good News about the Kingdom will be preached throughout the
                whole world, so that all nations will hear it; and then the end will come.</p>
        </div>

        <!-- Slide 5 -->
        <div class="sp-slide py-5 bg-overlay">
            <p class="lead mt-3 text-center text-light font-official pt-5">Zechariah 14:9 New Living Translation (NLT) And the Lord will be king over all the earth. On that day there will
                be one Lord—his name alone will be worshiped.</p>
        </div>
    </div>
</div>
<!-- END OF THEME -->


<div class="text-center hr-divider">
    <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
        class="">
</div>
<h3 class="text-center">RECENT SERMONS</h3>

        <div class="row  mt-5">
            <div class="col-lg-11 mx-auto">
                <div class="card">
                    <img class="sermons-card-img" src="https://images.unsplash.com/photo-1481142378093-d0289ea07b78?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=82335800650e058347fd6a1ea372d51e&auto=format&fit=crop&w=1350&q=80" alt="" width="" height="">
                </div>

            </div>

            <div class="col-md-offset-6 col-lg-offset-6">
            </div>

            <div class="col-lg-4 mx-auto col-md-8">
                <div class="card"  style="margin-top: 30%;">
                    <img  class="sermons-card-img" src="img/homepage/bible1.jpg">
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
                    <p class="lead card-text" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt quae tempore!</p>
                    <a href="/sermons" class="text-center " style="border: 1px solid gray;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                    </div>       
            </div>

           <div class="col-lg-4  mx-auto col-md-8">
                <div class="card"  style="margin-top: 30%;">
                    <img  class="sermons-card-img" src="img/homepage/bible2.jpg" >
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
                    <p class="lead card-text" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt quae tempore!</p>
                    <a href="/sermons" class="text-center " style="border: 1px solid gray;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                    </div>       
            </div>


            <div class="col-lg-4 mx-auto col-md-8">
                <div class="card"  style="margin-top: 30%;">
                    <img class="sermons-card-img" src="img/homepage/bible3.jpg" >
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
                    <p class="lead card-text" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt quae tempore!</p>
                    <a href="/sermons" class="text-center " style="border: 1px solid gray;padding:10px 10px 10px 10px; font-weight:999;">VIEW MORE SERMONS</a>
                    </div>       
            </div>


        </div>


    <!-- </div> -->
    <!-- </div> -->

    <!-- END -->

    <hr>




    <div class=" ">
        <div class="text-center hr-divider">
            <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
                class=""> </div>
        <h3 class="text-center mx-auto" style="">LATEST ARTICLES</h3>
        <div class="row">

       
            <div class="col-lg-4 ml-auto mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto" style="margin-top:200px;">
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
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 1</a>
                </div>
            </div>




            <div class="col-lg-4 mt-3 ml-auto blog">
                <div class="ih-item square colored effect4 mx-auto" style="margin-top:200px;">
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
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 2</a>
                </div>
            </div>


            <div class="col-lg-4 ml-auto mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto" style="margin-top:200px;">
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
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 3</a>
                </div>
            </div>

            <div class="col-lg-11 mt-5 ml-auto">
            <img class="sermons-card-img" src="img/homepage/church.jpg" alt="" width="800px" height="700px">
            </div>

             

        </div>

    </div>


    <div class="row mt-5">


        <div class="col-lg-8">

            <div class="container">
                <div class="container gallery-container">
                    <div class="text-center hr-divider">
                        <img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/f50af39a-3818-4943-b8f9-8fad15b2c22f/hr-stephan-hilbelink2.png"
                            class=""> </div>
                    <h3 class="text-center">DCIK GALLERY</h3>

                    <p class="page-description text-center text-light">Share special moments with friends :)</p>

                    <div class="tz-gallery" >
                        <div class="row" >
                            <div class="col-md" >
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/park.jpg">
                                        <img src="img/gallery/park.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/benches.jpg">
                                        <img src="img/gallery/benches.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/bridge.jpg">
                                        <img src="img/gallery/bridge.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/sky.jpg">
                                        <img src="img/gallery/sky.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/tunnel.jpg">
                                        <img src="img/gallery/tunnel.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/traffic.jpg">
                                        <img src="img/gallery/traffic.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/sky.jpg">
                                        <img src="img/gallery/sky.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/tunnel.jpg">
                                        <img src="img/gallery/tunnel.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/traffic.jpg">
                                        <img src="img/gallery/traffic.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/coast.jpg">
                                        <img src="img/gallery/coast.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/rails.jpg">
                                        <img src="img/gallery/rails.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="card border-0">
                                    <a class="lightbox" href="img/gallery/rocks.jpg">
                                        <img src="img/gallery/rocks.jpg" alt="Park" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger btn-lg  mt-3 mx-auto text-center">View More</button>
                    </div>
                </div>

            </div>

        </div>



        <div class="col-lg-4" style="">
            <div class="card mt-5" style="">

                <div class="card-body">
                    <div class="card-text">
                        <h3 class="text-left text-primary mx-auto">STAY INFORMED</h3>
                        <a href="#" class="text-dark mt-2">Subscribe To Our Newsletter</a>
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

                        <h3 class="text-left text-primary mx-auto">LOOKING FOR SOMETHING?</h3>
                        <p class="lead">
                            <a href="#" class="text-dark">I'm New Here</a>
                        </p>
                        <hr>
                        <p class="lead">
                            <a href="#" class="text-dark">Next Steps</a>
                        </p>
                        <hr>
                        <p class="lead">
                            <a href="#" class="text-dark">Ministries</a>
                        </p>
                        <hr>
                        <p class="lead">
                            <a href="#" class="text-dark">Events</a>
                        </p>
                        <hr>
                        <p class="lead">
                            <a href="#" class="text-dark">Announcements</a>
                        </p>
                        <hr>
                        <p class="lead">
                            <a href="#" class="text-dark">The Father's Vision</a>
                        </p>
                        <hr>


                    </div>
                </div>

            </div>


        </div>
    </div>
</div>


<div class="jumbotron member bg-danger">
    <div class="row">
        <div class="col-lg-4 display-4"> WANT TO BECOME A NEW MEMBER? </div>
        <div class="col-lg-3 mt-3"> We would be delighted to have you. </div>
        <div class="col-lg-3 mt-3"> <a class="btn border-light btn-lg d-inline text-white ml-5" href="/become-a-member" role="button" style="border:5px solid;">BECOME A MEMBER</a>
        </div>
    </div>
</div>
<div class="bg-overlay" style="height: 400px;">
    <h1 class="text-center">SIGN UP TO OUR NEWSLETTER</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda reprehenderit earum consectetur voluptates in aperiam?</p>
    <form class="text-center">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div>

@endsection