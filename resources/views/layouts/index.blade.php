@extends('layouts.master') @section('content')
<!-- CAROUSEL -->
<div id="carouselIndicators" class=" carousel slide" data-ride="carousel" data-interval="20000">

  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="1" class="indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="2" class="indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="3" class="indicators"></li>
    {{--<li data-target="#carouselIndicators" data-slide-to="4" class="indicators"></li>--}}
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img class="d-block img-fluid" src="../img/service3.JPG" alt="First slide">
      <div class="container">
          <div class="carousel-caption ml-auto">
              <h1 class="animate-plus  text-left display-3" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
              >
                  COME AS YOU ARE
              </h1>
              <p class="animate-plus lead display-4" data-animations="bounceInLeft" data-animation-delay="4s" data-animation-duration="5s">We are a church for the tribe of Kenya,no matter your look,your denomination,your religion,your race,no matter your social status,you are welcome</p>
              <a href="/im-new">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="3s" data-animation-duration="4s">
                      <h4 class=" text-white">I'M NEW HERE </h4>
                  </button>
              </a>

              <a href="/im-new">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="2s" data-animation-duration="4s">
                      <h4 class=" text-white">VISIT US </h4>
                  </button>
              </a>

              <a href="/im-new">
                  <button class="animate-plus mt btn btn-lg" data-animations="bounceInLeft" data-animation-delay="1s" data-animation-duration="4s">
                      <h4 class=" text-white">GIVE ONLINE </h4>
                  </button>
              </a>

          </div>
      </div>
      </div>

      <div class="carousel-item">
          <img class="d-block w-100" src="http://dcumoja.org/site2/wp-content/uploads/2018/01/slide12-1.jpg" alt="First slide">
          {{--<div class="container">
            <div class="carousel-caption text-bottom">
              <h1 class="animate-plus -1  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
                COUPLES' MINISTRY
              </h1>
              <p class="animate-plus lead" data-animations="bounceInRight" data-animation-delay="3s" data-animation-duration="4s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur aliquam molestias eligendi?</p>
                <a href="/couples">
                <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
                  <h4 class=" text-white"> VIEW MINISTRY </h4>
                </button>
              </a>
            </div>
          </div>--}}
      </div>

    <div class="carousel-item ">
      <img class="d-sm-block  w-100" src="../img/doi.jpg" alt="First slide">
      {{--<div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
            DAUGHTERS OF IMPACT
          </h1>
          <p class="animate-plus lead" data-animations="bounceInRight" data-animation-delay="3s" data-animation-duration="4s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur aliquam molestias eligendi?</p>
          <a href="/ladies">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>
            </button>
          </a>

        </div>
      </div>--}}
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/dcik-youth.jpg" alt="First slide">
     {{-- <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus -1  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
          >
            MEN'S ENCOUNTER
          </h1>
          <p class="animate-plus lead" data-animations="bounceInRight" data-animation-delay="3s" data-animation-duration="4s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur aliquam molestias eligendi?</p>
          <a href="/men">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>

            </button>
          </a>
        </div>
      </div>--}}
    </div>

    {{--<div class="carousel-item">
      <img class="d-block w-100" src="../img/youth/homepage.JPG" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus -1 text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
            >
            YOUTH MINISTRY
          </h1>
          <p class="animate-plus lead" data-animations="bounceInRight" data-animation-delay="3s" data-animation-duration="4s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur aliquam molestias eligendi?</p>
          <a href="/youth">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>

            </button>
          </a>
        </div>
      </div>
    </div>--}}





  </div>

  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true" style="margin-left: -100px;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- END OF CAROUSEL -->

{{--VISION CARRIERS--}}

<div class="container-fluid vision-carriers">
    <div class="row mt-5">
      <div class="col-md-3">
          <img src="../img/vision-carriers.jpg" alt="" class="card-img img-fluid" style="height:auto; max-width:100%;">
      </div>
      <div class="col-md-9 my-auto">
          <h2 class="text-white mx-auto px-5 py-5" style="background-color: #0000fe">WELCOME TO DELIVERANCE CHURCH INTERNATIONAL KASARANI</h2>
          <p class="lead">
              "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi, autem beatae cumque, delectus doloremque earum eos est eum excepturi fuga fugit id in laudantium magnam modi necessitatibus nesciunt nihil obcaecati officiis placeat porro sunt tempore ullam, unde velit voluptatibus. At consectetur cupiditate dolorum ducimus ipsam qui, tempora unde. Accusamus aperiam consequatur delectus distinctio dolorem eligendi in laudantium molestias mollitia quas, ratione, recusandae repellat repudiandae sequi soluta voluptate voluptatum. Adipisci architecto consequatur consequuntur cumque, earum fugiat harum id nam nostrum quo, quos recusandae reprehenderit tempora ullam veniam? A consectetur culpa ipsa quae ratione sint, veniam voluptatem. Accusamus adipisci cumque dolorum enim exercitationem illum modi nobis non quae quo rerum tempore vitae, voluptates. Accusantium, ad dolorum eaque eligendi maiores possimus voluptate.
          </p>
          <h2>BISHOP AND MRS. JIMMY KIMANI</h2>
      </div>
    </div>
</div>

<hr class="w-25 mx-auto" style="border: 1px solid #0000fe">
<h1 class="text-center mx-auto text-danger">Upcoming Events</h1>

<!-- EVENTS -->
<div class="events container font-official text-white mt-5">
  <div class="row">
    <div class="col-md mt-3">
      <div class="card">
        <img src="img/events/navbar-events.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
        <div class="card-text">
          <h4 class=" text-primary text-center">Lorem ipsum.</h4>
            <hr class="mx-auto">
            <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
        </div>
        <div class="card-footer mx-auto">
          <button class="btn btn-danger btn-large  text-right mt">Go To Event</button>
        </div>
      </div>
    </div>

    <div class="col-md mt-3">
      <div class="card">
        <img src="img/events/grand-opening.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
          <div class="card-text">
              <h4 class=" text-primary text-center">Lorem ipsum.</h4>
              <hr class="mx-auto">
              <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
          </div>
          <div class="card-footer mx-auto">
              <button class="btn btn-danger btn-large  text-right mt">Go To Event</button>
          </div>
      </div>
    </div>

    <div class="col-md mt-3">
      <div class="card">
        <img src="img/events/icc-conference.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
          <div class="card-text">
              <h4 class=" text-primary text-center">Lorem ipsum.</h4>
              <hr class="mx-auto">
              <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
          </div>
          <div class="card-footer mx-auto">
              <button class="btn btn-danger btn-large  text-right mt">Go To Event</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF EVENTS -->




<!-- ABOUT OUR CHURCH -->
<div class="events container-fluid font-official text-white mt-5">
    <div class="row">
        <div class="col-md mt-3">
            <div class="card">
                <img src="img/who-we-are.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                <div class="card-img-overlay d-flex" >
                    <div class="my-auto mx-auto text-center">
                        <a href="/who-we-are" class="" >
                            <h4 class=" display-3 text-white text-center" style="top: 200px;">WHO WE ARE</h4>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md mt-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/269419/pexels-photo-269419.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                <div class="card-img-overlay" >
                    <div class="card-img-overlay d-flex" >
                        <div class="my-auto mx-auto text-center">
                            <a href="/who-we-are" class="" >
                                <h4 class=" display-3 text-white text-center" style="top: 200px;">NEXT STEPS</h4>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<h2 class="text-white px-2 py-5 w-75 mx-auto mt-5" style="background-color: #0000fe">DELIVERANCE CHURCH INTERNATIONAL KASARANI MINISTRIES</h2>


{{--MINISTRIES AND SERMONS--}}

<div class="container">
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






{{--END OF MINISTRIES AND SERMONS--}}



<!-- BLOG -->

<h3 class="text-left ml-3 mt-5">Latest From Our Blog</h3>
<div class="row">
    <div class="col-md-7">
        <div class="row mt-1">
            <div class="col-md-4 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/459688/pexels-photo-459688.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 1</h3>
                            <p>Read More</p>
                        </div></a>
                </div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 1</a>
                </div>
            </div>
            <div class="col-md-8 mt-3 text-center">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet aperiam cupiditate dicta dolorum expedita fuga minima nesciunt perferendis provident. Amet debitis enim fugiat harum iste maxime odio quidem. Consequatur consequuntur error est in inventore ipsum laboriosam odit quibusdam sequi tenetur? Cupiditate itaque obcaecati odit, sint tempora ut. Adipisci, incidunt.</p>
                <a href="">Read More</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/34601/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 2</h3>
                            <p>Read More</p>
                        </div></a></div>
                <div class="mt-3  text-center">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 2</a>
                </div>
            </div>
            <div class="col-md-8 mt-3 text-center">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet aperiam cupiditate dicta dolorum expedita fuga minima nesciunt perferendis provident. Amet debitis enim fugiat harum iste maxime odio quidem. Consequatur consequuntur error est in inventore ipsum laboriosam odit quibusdam sequi tenetur? Cupiditate itaque obcaecati odit, sint tempora ut. Adipisci, incidunt.</p>
                <a href="">Read More</a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 3</h3>
                            <p>Read More</p>
                        </div></a></div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 3</a>
                </div>
            </div>
            <div class="col-md-8 mt-3 text-center">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet aperiam cupiditate dicta dolorum expedita fuga minima nesciunt perferendis provident. Amet debitis enim fugiat harum iste maxime odio quidem. Consequatur consequuntur error est in inventore ipsum laboriosam odit quibusdam sequi tenetur? Cupiditate itaque obcaecati odit, sint tempora ut. Adipisci, incidunt.</p>
                <a href="">Read More</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mt-3 blog">
                <div class="ih-item square colored effect4 mx-auto"><a href="#">
                        <div class="img-fluid"><img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
                        <div class="mask1"></div>
                        <div class="mask2"></div>
                        <div class="info">
                            <h3>STAGES OF DISLOYALTY PART 3</h3>
                            <p>Read More</p>
                        </div></a></div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-dark">STAGES OF DISLOYALTY PART 4</a>
                </div>
            </div>
            <div class="col-md-8 mt-3 text-center">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet aperiam cupiditate dicta dolorum expedita fuga minima nesciunt perferendis provident. Amet debitis enim fugiat harum iste maxime odio quidem. Consequatur consequuntur error est in inventore ipsum laboriosam odit quibusdam sequi tenetur? Cupiditate itaque obcaecati odit, sint tempora ut. Adipisci, incidunt.</p>
                <a href="">Read More</a>
            </div>
        </div>

    </div>

    <div class="col-md-5">
            <h3 class="text-right text-center">Latest Sermons</h3>

            <div class="card">
                <img src="http://www.chronicle.com/blogs/linguafranca/files/2017/12/8-31-17-Fake-news-graphic_1504210558496_8357678_ver1.0_640_360.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">

                <div class="card-body">
                    <div class="card-title text-center">
                        <a href="/sermons"> <button class="text-center btn btn-lg btn-danger">WATCH NOW</button>  </a>
                    </div>
                    <div class="card-text" style="">
                        <hr>
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