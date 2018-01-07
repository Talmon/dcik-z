@extends('layouts.master') @section('content')
<!-- CAROUSEL -->
<div id="carouselIndicators" class=" carousel slide" data-ride="carousel" data-interval="10000">

  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="1" class="indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="2" class="indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="3" class="indicators"></li>
    <li data-target="#carouselIndicators" data-slide-to="4" class="indicators"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-sm-block  w-100" src="../img/ladies/homepage.JPG" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus font-pacifico -1  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
            LADIES' MINISTRY
          </h1>
          <a href="/ladies">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>
            </button>
          </a>

        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/men/homepage.JPG" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus -1  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
            style="color:green;">
            MEN'S MINISTRY
          </h1>
          <a href="/men">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>

            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/youth/homepage.JPG" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus -1 text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
            style="color: yellow;">
            YOUTH MINISTRY
          </h1>
          <a href="/youth">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>

            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/couples/homepage.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus -1  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s">
            COUPLES' MINISTRY
          </h1>
          <!-- <p class="lead -7 animated slideInUp">Amazing ministry for the ladies</p> -->
          <a href="/couples">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>

            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img class="d-block img-fluid" src="../img/children/homepage.JPG" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus  text-left" data-animations="zoomIn,bounce" data-animation-delay="0s" data-animation-duration="4s"
            style="color: white; margin-left:-10px;">
            CHILDREN'S MINISTRY
          </h1>
          <a href="/children">
            <button class="animate-plus mt btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class=" text-white"> VIEW MINISTRY </h4>

            </button>
          </a>
        </div>
      </div>
    </div>

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



<!-- SERVICES -->
<div class="container">
    <hr class="w-25 mx-auto" style="border: 4px solid darkblue">
    <h1 class="text-center  mx-auto text-danger">Our Services</h1>
  <div class="row font-official">
    <div class="col-md order-2 ">
      <div class="card bg-primary text-white animate-plus" data-animations="" data-animation-delay="0s" data-animation-duration="3s"
        data-animation-eat="">
        <div class="card-title text-primary ">
          <h1 class="text-dark"> Sunday </h1>
        </div>
          <h3 class="card-text">Express Service - 7:00am - 8:30am </h3>
          <h3 class="card-text">Celebration Service - 8:45am - 10:45am </h3>
          <h3 class="card-text">Miracle Service - 11:00am - 1:00pm</h3>
        <div class="card-title text-primary">
          <h1 class="text-dark"> Wednesday </h1>
        </div>
        <h3 class="card-text">Midweek Service - 6:30pm - 8:00pm</h3>
      </div>
    </div>
    <div class="col-md order-1">
      <img class="h-100 w-100 d-none d-md-block" src="../img/bg-1.JPG" alt="">
    </div>
  
    <div class="col-md order-3">
      <img class="h-100 w-100 d-none d-md-block" src="../img/service3.JPG" alt="">
    </div>
  </div>
</div>

<!-- END OF SERVICES -->

<hr class="w-25 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center mx-auto text-danger">Upcoming Events</h1>

<!-- EVENTS -->
  <div class="events container-fluid font-official text-white mt mb">
    <div class="row">
      <div class="col-md mt-3">
        <div class="card">
          <img src="img/events/navbar-events.jpg" alt="" class="card-img-top img-fluid d-none d-md-block" style="height: auto; max-width: 100%;">
          <div class="card-text">
            <h4 class=" text-primary">Crossover 2017</h4>
            <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
          </div>
          <div class="card-footer ">
            <button class="btn btn-danger btn-large text-right mt">Go To Event</button>
          </div>
        </div>
      </div>

      <div class="col-md mt-3">
        <div class="card">
          <img src="img/events/grand-opening.jpg" alt="" class="card-img-top img-fluid d-none d-md-block" style="height: auto; max-width: 100%;">
          <div class="card-text">
            <h4 class=" text-primary">Grand Opening</h4>
            <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
          </div>
          <div class="card-footer ">
            <button class="btn btn-danger btn-large text-right mt">Go To Event</button>
          </div>
        </div>
      </div>

      <div class="col-md mt-3">
        <div class="card">
          <img src="img/events/icc-conference.jpg" alt="" class="card-img-top img-fluid d-none d-md-block" style="height: auto; max-width: 100%;">
          <div class="card-text">
            <h4 class=" text-primary">ICC Conference</h4>
            <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
          </div>
          <div class="card-footer ">
            <button class="btn btn-danger btn-large text-right mt">Go To Event</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- END OF EVENTS -->




<!-- ABOUT OUR CHURCH -->
<div class="row ">
  <div class="col-lg-9">
    <div class="card my-3 mt font-official" style=" background: url(../img/backgrounds/gplaypattern.png); ">
      <div class="card-body text-center">
        <h4 class="card-title  text-danger">ABOUT OUR CHURCH</h4>
        <p class="card-text  text-dark">Deliverance Church Kasarani Zimmerman was established on November 4, 1984 by Bishop Dr. Jimmy Kimani. The church
          is situated in Zimmerman Estate in Nairobi Kenya, opposite Mirema Drive, off Kamiti Road. Over the time we have
          grown in leaps and bounds establishing, supporting and building other churches around the Kasarani region as well
          as in other parts of the country. Among the many Deliverance churches that we have planted are Mwirigo, Mwiki,
          Kiamumbi, Ihururu and Kahawa West.</p>
        <p>

          <h3>Want to know more?See Below</h3>
          <ul class="list-inline-group">
            <li class="list-inline-item">
              <a href="/what-we-believe">
                <button class="btn btn-lg bg-primary text-white">WHAT WE BELIEVE </button>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/pastors">
                <button class="btn btn-lg bg-primary text-white">PASTORS </button>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/fathers-vision">
                <button class="btn btn-lg bg-primary text-white">FATHER'S VISION</button>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/become-a-member">
                <button class="btn btn-lg bg-primary text-white">BECOME A MEMBER </button>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="/cornerstone-academy">
                <button class="btn btn-lg bg-primary text-white">CORNERSTONE ACADEMY </button>
              </a>
            </li>
          </ul>

        </p>

      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <img src="../img/Bish and mum.jpg" alt="" class="img-fluid d-none d-md-block" >
  </div>
</div>

<!-- END OF ABOUT -->

<hr class="w5 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center  mx-auto text-danger mb-3">Latest Sermons</h1>

<!-- LATEST SERMONS -->
<div class="row">
  <div class="col-lg mb-3">
    <div class="card font-official" style=" background: url(../img/backgrounds/greyfloral.png);">
      <img src="" alt="" class="img-top">
      <div class="card-title bg-light">
        <h1 class="">
          <span class="text-primary"> Speaker: </span> Bishop Dr. Jimmy Kimani</div>
      <div class="card-title bg-light mb-3">
        <h1>
          <span class="text-primary"> Message: </span> Divine Elevation</h1>
      </div>
      <iframe class="mx-auto mt-3" width="420" height="345" src="https://www.youtube.com/embed/6AuAUUnuyUE" allowfullscreen>
      </iframe>
      <p class="card-text">
        <ul class="list-inline mx-auto bg-light">
          <li class="list-inline-item">
            <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
          </li>
          <li class="list-inline-item">
            <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
          </li>
          <li class="list-inline-item">
            <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
          </li>
        </ul>
      </p>
    </div>

  </div>

  <div class="col-lg mb-3">
    <div class="card font-official" style=" background: url(../img/backgrounds/greyfloral.png);">
      <img src="" alt="" class="img-top">
      <div class="card-title bg-light">
        <h1 class="">
          <span class="text-primary"> Speaker: </span> Bishop Dr. Jimmy Kimani</div>
      <div class="card-title bg-light mb-3">
        <h1>
          <span class="text-primary"> Message: </span> The 1st Christmas</h1>
      </div>
      <iframe class="mx-auto mt-3" width="420" height="345" src="https://www.youtube.com/embed/KDobDfg-nSo" allowfullscreen>
      </iframe>
      <p class="card-text">
        <ul class="list-inline mx-auto bg-light">
          <li class="list-inline-item">
            <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
          </li>
          <li class="list-inline-item">
            <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
          </li>
          <li class="list-inline-item">
            <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
          </li>
        </ul>
      </p>
    </div>

  </div>

  <div class="col-lg mb-3">
    <div class="card font-official" style=" background: url(../img/backgrounds/greyfloral.png);">
      <img src="" alt="" class="img-top">
      <div class="card-title bg-light">
        <h1 class="">
          <span class="text-primary"> Speaker: </span> Pastor Francis Omedo</div>
      <div class="card-title bg-light mb-3">
        <h1>
          <span class="text-primary"> Message: </span> Righteousness</h1>
      </div>
      <iframe class="mx-auto mt-3" width="420" height="345" src="https://www.youtube.com/embed//rYC8pfiJoCk" allowfullscreen>
      </iframe>
      <p class="card-text">
        <ul class="list-inline mx-auto bg-light">
          <li class="list-inline-item">
            <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
          </li>
          <li class="list-inline-item">
            <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
          </li>
          <li class="list-inline-item">
            <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
          </li>
        </ul>
      </p>
    </div>

  </div>
</div>

<!-- END OF LATEST SERMONS  -->


<!-- BLOG -->
<div id="blog" class="card-group mt">
  <div class="row">
    <div class="col-lg-3">
      <div class="card h-100 " style="background-color: #00004c;">
        <div class="card-body">
          <h4 class="card-title  text-center mt text-white py-auto">LATEST FROM BLOG</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-3">

      <div class="card hovereffect" style="height: 250px;">
        <img class="card-img-top img-responsive" src="img/events-1.JPG" alt="Card image cap">
        <div class="card-footer overlay">
          <h2 class=" mb">
            <strong> STAGES OF DISLOYALTY </strong>
          </h2>
          <p class="mb">
            <a href="#">
              <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
            </a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 " style="height: 250px;">

      <div class="card hovereffect">
        <img class="card-img-top img-responsive" src="img/events.JPG" alt="Card image cap">
        <div class="card-footer overlay">
          <h2 class=" mb">
            <strong> STAGES OF DISLOYALTY PART 2</strong>
          </h2>
          <p>
            <a href="#">
              <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
            </a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-3" style="height: 250px;">

      <div class="card hovereffect">
        <img class="card-img-top img-responsive" src="img/events-3.JPG" alt="Card image cap">
        <div class="card-footer overlay ">
          <h2 class=" mb">
            <strong> STAGES OF DISLOYALTY PART 3 </strong>
          </h2>
          <p>
            <a href="#">
              <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
            </a>
          </p>
        </div>
      </div>
    </div>

    <!-- END OF BLOG -->




    @endsection