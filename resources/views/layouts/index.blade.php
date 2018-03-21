@extends('layouts.master')
@section('content')

<!-- CAROUSEL -->
<div id="carouselIndicators" class="toHide carousel slide" data-ride="carousel" data-interval="35000" style="">

  {{--<ol class="carousel-indicators">--}}
    {{--<li data-target="#carouselIndicators" data-slide-to="0" class="active indicators"></li>--}}
    {{--<li data-target="#carouselIndicators" data-slide-to="1" class="indicators"></li>--}}
    {{--<li data-target="#carouselIndicators" data-slide-to="2" class="indicators"></li>--}}
    {{--<li data-target="#carouselIndicators" data-slide-to="3" class="indicators"></li>--}}
  {{--</ol>--}}
  <div class="carousel-inner">
  <div class="carousel-item active" >

      <div class="embed-responsive embed-responsive-16by9">
          <video class="embed-responsive-item" src="../img/videos/intro.mp4" controls autoplay loop allowfullscreen data-interval="35000"></video>
      </div>
      <div class="container">
          <div class="carousel-caption ml-auto">
              <h1 class="animate-plus  text-left display-3" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
              >
                  COME AS YOU ARE
              </h1>
              <p class="animate-plus lead display-4" data-animations="bounceInLeft" data-animation-delay="4s" data-animation-duration="5s">We are a church for the tribe of Kenya,no matter your look,your denomination,your religion,your race,no matter your social status,you are welcome</p>
              <a href="/guests">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="3s" data-animation-duration="4s">
                      <h4 class=" text-white">I'M NEW HERE </h4>
                  </button>
              </a>

              <a href="/guests">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="3s" data-animation-duration="4s">
                      <h4 class=" text-white">WATCH SERMON </h4>
                  </button>
              </a>

              <a href="/visit-us">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="2s" data-animation-duration="4s">
                      <h4 class=" text-white">VISIT US </h4>
                  </button>
              </a>

              <a href="/give">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="1s" data-animation-duration="4s">
                      <h4 class=" text-white">GIVE</h4>
                  </button>
              </a>

          </div>
      </div>
      </div>

      <!-- <div class="carousel-item">
          <img class="d-block w-100" src="http://dcumoja.org/site2/wp-content/uploads/2018/01/slide12-1.jpg" alt="First slide">

      </div>

    <div class="carousel-item ">
      <img class="d-sm-block  w-100" src="../img/doi.jpg" alt="First slide">

    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/fathers-vision.jpeg" alt="First slide">

    </div> -->







  </div>

  {{--<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">--}}
    {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--<span class="sr-only">Previous</span>--}}
  {{--</a>--}}
  {{--<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">--}}
    {{--<span class="carousel-control-next-icon " aria-hidden="true" style="margin-left: -100px;"></span>--}}
    {{--<span class="sr-only">Next</span>--}}
  {{--</a>--}}
</div>

<!-- END OF CAROUSEL -->

{{--WELCOME SECTION--}}

<div class="container-fluid vision-carriers toHide">
    <div class="row mt-5">
      <div class="col-md-3">
          <img src="../img/pastors/dad-and-mum.jpg" alt="" class="card-img img-fluid" style="height:auto; max-width:100%;">
      </div>
      <div class="col-md-9 my-auto">
          <h2 class="text-white mx-auto px-2 py-5" style="background-color: #0000fe">WELCOME TO DELIVERANCE CHURCH INTERNATIONAL KASARANI</h2>
          <p class="lead">
              "We are more than delighted to host you in the Deliverance Church Kasarani - Zimmerman website. Our desire is that in the few minutes that you browse through you will be nourished and when logging out you will be more deeply rooted in the word of Christ as a Christian and ready to do extraordinary exploits like Daniel for it is your portion. (Dan. 11:32) You may check out the life changing Sunday sermon and the history of sermons. You may plan to attend the church activities and support any project like the building of The Cathedral. If you wish to join a cell or volunteer your skills and time we are more than willing to connect you to any of the available ministries in the church. Join us in any of our services or meetings as we grow together in Christ and make Jesus known to all. We appreciate and value you. - Bishop Dr. Jimmy & Pastor Alice Kimani"         </p>
          <h2>BISHOP DR. JIMMY KIMANI AND PASTOR ALICE KIMANI</h2>
      </div>
    </div>
</div>



<!-- EVENTS -->
<div class="events container-fluid font-official text-white mt-5 toHide">
    <hr class="w-25 mx-auto" style="border: 1px solid #0000fe">
    <h1 class="text-center mx-auto text-danger">Upcoming Events</h1>
  <div class="row">
    <div class="col-md-4 mt-3">
      <div class="card">
      <div class="card-title">
      <h1 style="position:absolute; top:50px; left:0;"><span class="badge badge-danger">March 30th-31st</span></h1>
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
      <h1 style="position:absolute; top:50px; left:0;"><span class="badge badge-danger">April 13th-15th</span></h1>
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
      <h1 style="position:absolute; top:50px; left:0;"><span class="badge badge-danger">April 20th-22nd</span></h1>
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




<!-- ABOUT OUR CHURCH -->
<div class="events container-fluid font-official text-white mt-5 toHide">
    <div class="row">
        <div class="col-md-6 mt-3">
            <div class="card">
                <img src="img/homepage/who-we-are.jpeg" alt="" class="card-img-top" style="height: 500px; max-width: 100%;">
                <div class="card-img-overlay d-flex" >
                    <div class="my-auto mx-auto text-center">
                        <a href="/who-we-are" class="" >
                            <h4 class=" display-3 text-white text-center" style="position:absolute; top: 400px; left:0;"><span class="badge badge-primary">WHO WE ARE</h4>
                        </a>
                    </div>

                </div>
            </div>
        </div>

         <div class="col-md-6 mt-3">
                    <div class="card">
                        <img src="img/homepage/what-to-expect" alt="" class="card-img-top" style="height: 500px; max-width: 100%;">
                        <div class="card-img-overlay d-flex" >
                            <div class="my-auto mx-auto text-center">
                                <a href="/who-we-are" class="" >
                                    <h4 class=" display-3 text-white text-center" style="position:absolute; top: 400px; left:0;"><span class="badge badge-primary">WHAT TO EXPECT</h4>
                                </a>
                            </div>

                        </div>
                    </div>
        </div>

    </div>
        
    <div class="row">
        <div class="col-md-6 mt-3">
                    <div class="card">
                        <img src="img/homepage/next-steps.jpeg" alt="" class="card-img-top" style="height: 500px; max-width: 100%;">
                        <div class="card-img-overlay d-flex" >
                            <div class="my-auto mx-auto text-center">
                                <a href="/who-we-are" class="" >
                                    <h4 class=" display-3 text-white text-center" style="position:absolute; top: 400px; left:0;"><span class="badge badge-primary">NEXT STEPS</h4>
                                </a>
                            </div>

                        </div>
                    </div>
        </div>
        
        <div class="col-md-6 mt-3">
            <div class="card">
                <img src="img/homepage/join-a-cell.jpeg" alt="" class="card-img-top" style="height: 500px; max-width: 100%;">
                    <div class="card-img-overlay d-flex" >
                        <div class="my-auto mx-auto text-center">
                            <a href="/who-we-are" class="" >
                                <h4 class=" display-3 text-white text-center" style="position:absolute; top: 400px; left:0;"><span class="badge badge-primary">JOIN A CELL GROUP</h4>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
              

               
        </div>
           
    </div>
</div>






<div class="slider-pro mt-3 toHide" id="dcik-theme">
	<div class="sp-slides">
		<!-- Slide 1 -->
		<div class="sp-slide bg-danger  py-5">
            <h1 class="text-center text-dark font-official display-5">THEME OF THE YEAR:KINGDOM MANIFESTATION</h1>
			<p class="lead mt-3 text-center text-white font-bilbo display-4">Matthew 6:10: 
Thy kingdom come, Thy will be done in earth, as it is in heaven</p>
		</div>
		
		<!-- Slide 2 -->
		<div class="sp-slide bg-danger  py-5">
			<p class="lead mt-3 text-center text-white font-official display-4">Matthew 6:33 New Living Translation (NLT)
 Seek the Kingdom of God above all else, and live righteously, and he will give you everything you need.</p>
		</div>

        <!-- Slide 3 -->
		<div class="sp-slide bg-danger  py-5">
			<p class="lead mt-3 text-center text-white font-official display-4">Romans 14:17 New Living Translation (NLT)
For the Kingdom of God is not a matter of what we eat or drink, but of living a life of goodness and peace and joy in the Holy Spirit.</p>
		</div>
		
		<!-- Slide 4 -->
		<div class="sp-slide bg-danger  py-5">
			<p class="lead mt-3 text-center text-white font-official display-4">Matthew 24:14 New Living Translation (NLT)
And the Good News about the Kingdom will be preached throughout the whole world, so that all nations will hear it; and then the end will come.</p>
		</div>

        <!-- Slide 5 -->
		<div class="sp-slide bg-danger  py-5">
        <p class="lead mt-3 text-center text-white font-official display-4">Zechariah 14:9 New Living Translation (NLT)
And the Lord will be king over all the earth. On that day there will be one Lord—his name alone will be worshiped.</p>
        </div>
</div>
</div>



<div class="container toHide">
    <h2 class="text-white px-2 py-5 w-100 mx-auto mt-5" style="background-color: #0000fe">DELIVERANCE CHURCH INTERNATIONAL KASARANI MINISTRIES</h2>
    <div class="row mt-5">
        <div class="col-md">
            <div class="card">
                <img src="http://www.caclouisville.org/hp_wordpress/wp-content/uploads/2015/06/LadiesMinistry.png" alt="" class="card-img-top" style="height: 200px;" >
                <hr>
                <div class="card-title mt-3">
                    <a href="/ladies">
                        <h3 class="text-center text-dark">LADIES' MINISTRY </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">
                <img src="http://resources.razorplanet.com/510138-5445/510138_223_543150.jpg" alt="" class="card-img-top" style="height: 200px;">
                <hr>
                <div class="card-title mt-3">
                    <a href="/men">
                        <h3 class="text-center text-dark">MEN'S MINISTRY </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">
                <img src="https://www.theworshipplace.org/filerequest/2218" alt="" class="card-img-top" style="height: 200px;">
                <hr>
                <div class="card-title mt-3">
                    <a href="/children">
                        <h3 class="text-center text-dark">CHILDREN'S MINISTRY </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md">
            <div class="card">
                <img src="https://static1.squarespace.com/static/5636cdc7e4b0e79c6ccc21d6/t/56b908911bbee041002c34be/1454966993881/" alt="" class="card-img-top" style="height: 200px;" >
                <hr>
                <div class="card-title mt-3">
                    <a href="/ladies">
                        <h3 class="text-center text-dark">COMPASSION MINISTRY </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">
                <img src="http://www.cctustin.org/images/ministries/Couples-Ministry_800x600.png" alt="" class="card-img-top" style="height: 200px;">
                <hr>
                <div class="card-title mt-3">
                    <a href="/men">
                        <h3 class="text-center text-dark">COUPLES' MINISTRY </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="card">
                <img src="http://www.stregis.org/wp-content/uploads/2012/10/youth11.jpg" alt="" class="card-img-top" style="height: 200px;">
                <hr>
                <div class="card-title mt-3">
                    <a href="/children">
                        <h3 class="text-center text-dark">YOUTH MINISTRY </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>









<!-- BLOG -->

<div class="row toHide">
    <div class="col-lg-8">
        <h3 class="text-left ml-3 mt-5">Latest From Our Blog</h3>
        <div class="row mt-1">
            <div class="col-lg-3 mt-3  blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/459688/pexels-photo-459688.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 1</h3>
                            <p>Read More</p>
                        </div></a>
                </div>
                <div class="mt-3 ml-5">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 1</a>
                </div>
            </div>
            <div class="col-lg-8 mt-3 ml-5">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur culpa dolorem mollitia, pariatur possimus quasi repudiandae vel. Ad aliquid cumque doloremque modi obcaecati pariatur soluta unde velit, voluptatibus..</p>
                <a href="">Read More</a>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/34601/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 2</h3>
                            <p>Read More</p>
                        </div></a></div>
                <div class="mt-3  ml-5">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 2</a>
                </div>
            </div>
            <div class="col-lg-8 mt-3 ml-5">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur culpa dolorem mollitia, pariatur possimus quasi repudiandae vel. Ad aliquid cumque doloremque modi obcaecati pariatur soluta unde velit, voluptatibus..</p>
                <a href="">Read More</a>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 3</h3>
                            <p>Read More</p>
                        </div></a></div>
                <div class="mt-3 ml-5">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 3</a>
                </div>
            </div>
            <div class="col-lg-8 mt-3 ml-5">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur culpa dolorem mollitia, pariatur possimus quasi repudiandae vel. Ad aliquid cumque doloremque modi obcaecati pariatur soluta unde velit, voluptatibus..</p>
                <a href="">Read More</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 3</h3>
                            <p>Read More</p>
                        </div></a></div>
                <div class="mt-3 ml-5">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 4</a>
                </div>
            </div>
            <div class="col-lg-8 mt-3 ml-5">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur culpa dolorem mollitia, pariatur possimus quasi repudiandae vel. Ad aliquid cumque doloremque modi obcaecati pariatur soluta unde velit, voluptatibus..</p>
                <a href="">Read More</a>
            </div>
        </div>

    </div>

    <div class="col-lg-4 mr-auto">


            <div class="card mt-3">
            
            <div class="card-title"> <h1> RECENT SERMONS </h1> </div>   

            <div class="slider-pro mt-3 toHide" id="sermons">
                                <div class="sp-slides">
                                    <!-- Slide 1 -->
                                    <div class="sp-slide">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hwlB_cWTk6Y" allowfullscreen>
                                    </iframe>
                                    </div>

                                    <!-- Slide 2 -->
                                    <div class="sp-slide">
                                    <iframe width="100%" height="100%"  src="https://www.youtube.com/embed/CEkwmKXOiog" allowfullscreen>
                                    </iframe>
                                    </div>

                                    <!-- Slide 3 -->
                                    <div class="sp-slide">
                                    <iframe  width="100%" height="100%" src="https://www.youtube.com/embed/lgyakZLwAbc" allowfullscreen>
                                    </iframe>
                                    </div>

                                    <!-- Slide 4 -->
                                    <div class="sp-slide">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/AQSJpud1nHI" allowfullscreen>
                                    </iframe>
                                    </div>                                  
                                </div>
                            </div>
 

            </div>    

            <div class="card mt-5">

                <div class="card-body">
                    <div class="card-text" style="">
                        <h3>STAY INFORMED</h3>
                        <a href="#" class="text-primary">Subscribe To Our Newsletter</a>
                        <hr>
                        <div class=" social-media mt-4 list-inline mr-5">
                            <a href="https://www.facebook.com/dczimma/?fref=ts">
                                <i class="fa fa-2x fa-facebook list-inline-item text-dark mr-3 mb-3"></i>
                            </a>
                            <a class="" href="#">
                                <i class="fa fa-2x fa-twitter list-inline-item text-dark mr-3 mb-3"></i>
                            </a>
                            <a class="" href="https://www.youtube.com/channel/UCbFf1WXtK4WRV2tz9Zx6nIg">
                                <i class="fa fa-2x fa-youtube list-inline-item text-dark mr-3 mb-3"></i>
                            </a>
                            <a class="" href="#">
                                <i class="fa fa-2x fa-instagram list-inline-item text-dark mr-3 mb-3"></i>
                            </a>
                        </div>

                        <hr>

                        <h3>LOOKING FOR SOMETHING?</h3>

                        <p class="lead"> <a href="#" class="text-primary">I'm New Here</a>  </p>
                        <hr>
                        <p class="lead"> <a href="#" class="text-primary">Next Steps</a>  </p>
                        <hr>
                        <p class="lead"> <a href="#" class="text-primary">Ministries</a>  </p>
                        <hr>
                        <p class="lead"> <a href="#" class="text-primary">Lorem ipsum dolor.</a>  </p>
                        <hr>
                        <p class="lead"> <a href="#" class="text-primary">Lorem ipsum.</a>  </p>
                        <hr>
                        <p class="lead"> <a href="#" class="text-primary">Lorem ipsum.</a>  </p>
                        <hr>

                            
                    </div>
                </div>

            </div>


        </div>

    </div>

</div>


@endsection