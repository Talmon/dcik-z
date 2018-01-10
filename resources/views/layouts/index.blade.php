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



<!-- THEME -->
<div class="jumbotron bg-danger text-white text-center font-official">
  <h1 class=""> Theme of The Year: Kingdom Manifestation </h1>
  <p class="lead"> Matthew 6:10: "May your Kingdom come soon.</p>
  <p class="lead"> May your will be done on earth,</p>
  <p class="lead">as it is in heaven(NLT)."</p>
</div>

<!-- END OF THEME -->

<hr class="w-25 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center mx-auto text-danger">Upcoming Events</h1>

<!-- EVENTS -->
<div class="events container-fluid font-official text-white mt mb">
  <div class="row">
    <div class="col-md mt-3">
      <div class="card">
        <img src="img/events/navbar-events.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
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
        <img src="img/events/grand-opening.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
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
        <img src="img/events/icc-conference.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
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
<div class="row mt-5">
  <div class="col-md-9">
    <div class="card my-3 mt font-official" style=" background: url(../img/backgrounds/gplaypattern.png); ">
      <div class="card-body text-center">
        <h4 class="card-title  text-danger">ABOUT OUR CHURCH</h4>
        <p class="card-text  text-dark">Deliverance Church Kasarani Zimmerman was established on November 4, 1984 by Bishop Dr. Jimmy Kimani. The church
          is situated in Zimmerman Estate in Nairobi Kenya, opposite Mirema Drive, off Kamiti Road. Over the time we have
          grown in leaps and bounds establishing, supporting and building other churches around the Kasarani region as well
          as in other parts of the country. Among the many Deliverance churches that we have planted are Mwirigo, Mwiki,
          Kiamumbi, Ihururu and Kahawa West.</p>
        <p>
          <a href="#">
            <button class="btn btn-lg bg-primary text-white"> KNOW MORE </button>
          </a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <img src="../img/Bish and mum.jpg" alt="" class="img-fluid" style="height:auto; max-width:100%;">
  </div>
</div>

<!-- END OF ABOUT -->
<hr class="w-25 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center  mx-auto text-danger mb-3">Latest Sermons</h1>


<!-- LATEST SERMONS -->

<div class="container sermons card-group">
  <div class="card border-0">
    <img src="https://images.pexels.com/photos/372326/pexels-photo-372326.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" class="rounded-circle img-top mx-auto mt-3" alt="" style="height:200px; width:200px">
     <div class="card-title mx-auto mt-3 text-danger">
       <h2>Fake News</h2>
     </div>
     <div class="card-body mx-auto mt-3">
     <div class="card-text">
     <p class="lead">Bishop Dr. Jimmy Kimani / 7th Jan 2018</p>
     </div>
     </div>
    <div class="card-footer list-inline text-muted mx-auto">
      <a href="#"> <i class="list-inline-item fa fa-2x fa-video-camera" aria-hidden="true"></i> </a> 
      <a href="#"> <i class="list-inline-item fa fa-2x fa-headphones" aria-hidden="true"></i> </a>
      <a href="#"> <i class="list-inline-item fa fa-2x fa-file-pdf-o" aria-hidden="true"></i> </a>
      <a href="#"> <i class="list-inline-item fa fa-2x fa-download" aria-hidden="true"></i> </a> 
    </div>
  </div>


  <div class="card border-0">
      <img src="https://images.pexels.com/photos/256560/pexels-photo-256560.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" class="rounded-circle img-top mx-auto mt-3" alt="" style="height:200px; width:200px">
       <div class="card-title mx-auto mt-3 text-danger text-danger">
         <h2>Lorem ipsum dolor sit.</h2>
       </div>
       <div class="card-body mx-auto mt-3">
       <div class="card-text">
       <p class="lead">Bishop Dr. Jimmy Kimani / 1st Jan 2018</p>
       </div>
       </div>
      <div class="card-footer list-inline text-muted mx-auto">
        <a href="#"> <i class="list-inline-item fa fa-2x fa-video-camera" aria-hidden="true"></i> </a> 
        <a href="#"> <i class="list-inline-item fa fa-2x fa-headphones" aria-hidden="true"></i> </a>
        <a href="#"> <i class="list-inline-item fa fa-2x fa-file-pdf-o" aria-hidden="true"></i> </a>
        <a href="#"> <i class="list-inline-item fa fa-2x fa-download" aria-hidden="true"></i> </a> 
      </div>
    </div>

    <div class="card border-0">
        <img src="https://images.pexels.com/photos/272337/pexels-photo-272337.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" class="rounded-circle img-top mx-auto mt-3" alt="" style="height:200px; width:200px">
         <div class="card-title mx-auto mt-3 text-danger">
           <h2>Lorem, ipsum dolor.</h2>
         </div>
         <div class="card-body mx-auto mt-3">
         <div class="card-text">
         <p class="lead">Bishop Dr. Jimmy Kimani / 24th Dec 2017</p>
         </div>
         </div>
        <div class="card-footer list-inline text-muted mx-auto">
          <a href="#"> <i class="list-inline-item fa fa-2x fa-video-camera" aria-hidden="true"></i> </a> 
          <a href="#"> <i class="list-inline-item fa fa-2x fa-headphones" aria-hidden="true"></i> </a>
          <a href="#"> <i class="list-inline-item fa fa-2x fa-file-pdf-o" aria-hidden="true"></i> </a>
          <a href="#"> <i class="list-inline-item fa fa-2x fa-download" aria-hidden="true"></i> </a> 
        </div>
      </div>

</div>

<!-- END OF LATEST SERMONS  -->

<!-- BLOG -->
  <div class="row mt-5">
    <div class="col-md">
      <div class="card h-100 border-0">
        <div class="card-body">
          <h4 class="card-title  text-center  text-dark my-auto">LATEST FROM BLOG</h4>
        </div>
      </div>
    </div>

    <div class="col-md">
        <div class="ih-item square colored effect4"><a href="#">
            <div class="img"><img src="https://images.pexels.com/photos/459688/pexels-photo-459688.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
            <div class="mask1"></div>
            <div class="mask2"></div>
            <div class="info">
              <h3>STAGES OF DISLOYALTY PART 1</h3>
              <p>Read More</p>
            </div></a></div>
    </div>

    <div class="col-md">
        <div class="ih-item square colored effect4"><a href="#">
            <div class="img"><img src="https://images.pexels.com/photos/34601/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
            <div class="mask1"></div>
            <div class="mask2"></div>
            <div class="info">
              <h3>STAGES OF DISLOYALTY PART 2</h3>
              <p>Read More</p>
            </div></a></div>
    </div>


    <div class="col-md">
        <div class="ih-item square colored effect4"><a href="#">
            <div class="img"><img src="https://images.pexels.com/photos/34124/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="img"></div>
            <div class="mask1"></div>
            <div class="mask2"></div>
            <div class="info">
              <h3>STAGES OF DISLOYALTY PART 3</h3>
              <p>Read More</p>
            </div></a></div>
    </div>

    </div>
    <!-- END OF BLOG -->




    @endsection