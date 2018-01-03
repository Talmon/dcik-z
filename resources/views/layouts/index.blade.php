@extends('layouts.master')
@section('content')
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
      <img class="d-block w-100" src="../img/ladies/doi-1.JPG" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-bottom">
          <h1 class="animate-plus font-pacifico display-1  ml-5 text-center" data-animations="zoomIn,bounce"  data-animation-delay="0s" data-animation-duration="4s">
           LADIES' MINISTRY   
          </h1>
          <!-- <p class="lead display-7 animated slideInUp">Amazing ministry for the ladies</p> -->
          <a href="/ladies">
            <button class="animate-plus mt-2 btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
              <h4 class="display-5 text-white"> VIEW MINISTRY </h4>
              
            </button>
          </a>

        </div>
      </div>
    </div>

    <div class="carousel-item">
    <img class="d-block w-100" src="../img/men/men-4.JPG" alt="First slide">
    <div class="container">
      <div class="carousel-caption text-bottom">
        <h1 class="animate-plus display-1  ml-5 text-bottom" data-animations="zoomIn,bounce"  data-animation-delay="0s" data-animation-duration="4s" style="color: white; margin-top:100px;" style="font-family: Gloria Hallelujah;">
         MEN'S MINISTRY   
        </h1>
        <!-- <p class="lead display-7 animated slideInUp">Amazing ministry for the ladies</p> -->
        <a href="/men">
          <button class="animate-plus mt-2 btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
            <h4 class="display-5 text-white"> VIEW MINISTRY </h4>
            
          </button>
        </a>
      </div>
    </div>
    </div>

    <div class="carousel-item">
    <img class="d-block w-100" src="../img/youth/youth-ministry.JPG" alt="First slide">
    <div class="container">
      <div class="carousel-caption text-bottom">
        <h1 class="animate-plus display-1  ml-5 text-center" data-animations="zoomIn,bounce"  data-animation-delay="0s" data-animation-duration="4s" style="color: yellow;">
         YOUTH MINISTRY   
        </h1>
        <!-- <p class="lead display-7 animated slideInUp">Amazing ministry for the ladies</p> -->
        <a href="/youth">
          <button class="animate-plus mt-2 btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
            <h4 class="display-5 text-white"> VIEW MINISTRY </h4>
            
          </button>
        </a>
      </div>
    </div>
    </div>

    <div class="carousel-item">
    <img class="d-block w-100" src="../img/couples/couples.jpg" alt="First slide">
    <div class="container">
      <div class="carousel-caption text-bottom">
        <h1 class="animate-plus display-1  ml-5 text-center" data-animations="zoomIn,bounce"  data-animation-delay="0s" data-animation-duration="4s">
         COUPLES' MINISTRY   
        </h1>
        <!-- <p class="lead display-7 animated slideInUp">Amazing ministry for the ladies</p> -->
        <a href="/couples">
          <button class="animate-plus mt-2 btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
            <h4 class="display-5 text-white"> VIEW MINISTRY </h4>
            
          </button>
        </a>
      </div>
    </div>
    </div>

    

    <div class="carousel-item">
    <img class="d-block w-100" src="../img/children/children-1.JPG" alt="First slide">
    <div class="container">
      <div class="carousel-caption text-bottom">
        <h1 class="animate-plus display-2  ml-5 text-center" data-animations="zoomIn,bounce"  data-animation-delay="0s" data-animation-duration="4s" style="color: white; margin-top:100px;">
         CHILDREN'S MINISTRY   
        </h1>
        <!-- <p class="lead display-7 animated slideInUp">Amazing ministry for the ladies</p> -->
        <a href="/children">
          <button class="animate-plus mt-2 btn btn-lg" data-animations="bounceInRight" data-animation-delay="2s" data-animation-duration="4s">
            <h4 class="display-5 text-white"> VIEW MINISTRY </h4>
            
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
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- END OF CAROUSEL -->

<hr class="w-25 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center display-4 mx-auto text-danger">Our Services</h1>

<!-- SERVICES -->
<div class="row font-pacifico">
  <div class="col-lg-4 order-2">
    <div class="card animate-plus" data-animations="" data-animation-delay="0s" data-animation-duration="3s" data-animation-repeat="" style="background: url(../img/backgrounds/logo_x_pattern.png); ">
      <div class="card-title text-primary ml-3"><h1> Sunday </h1> </div>
      <div class="card-body display-5">
      <h3 class="card-text">Express Service - 7:00am - 8:30am </h3>
      <h3 class="card-text">Celebration Service - 8:45am - 10:45am </h3>
      <h3 class="card-text">Miracle Service - 11:00am - 1:00pm</h3>
      </div>
      <div class="card-title text-primary ml-3"><h1> Wednesday </h1> </div>
      <h3 class="card-text mb-2">Midweek Service - 6:30pm - 8:00pm</h3>
      </div>
  </div>
  <div class="col-lg-4 order-1">
   <img class="h-100 w-100" src="../img/bg-1.JPG" alt="" >
  </div>
  
  <div class="col-lg-4 order-3">
  <img class="h-100 w-100" src="../img/service3.JPG" alt="" >    
  </div>
</div>
<!-- END OF SERVICES -->

<hr class="w-25 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center display-4 mx-auto text-danger">Upcoming Events</h1>

<!-- EVENTS -->

<div id="events" class="font-pacifico bg-dark text-white text-center mt-5" >

    <div class="row mt-5 w-75 mx-auto bg-light" style="background: url(../img/backgrounds/greyfloral.png); ">
      <div class="col-lg-4 mt-3">
        <img src="img/events/events-1.jpg" alt="" class="" style="height: 200px; width: 250px;">
      </div>
      <div class="col-lg-6 text-dark text-left">
        <h4 class="display-4 text-primary">Crossover 2017</h4>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
      </div>
      <div class="col-lg-2 ">
        <button class="btn btn-danger btn-large text-right mt-5">Go To Event</button>
      </div>
    </div>


    <div class="row mt-5 w-75 mx-auto bg-light" style="background: url(../img/backgrounds/greyfloral.png); ">
        <div class="col-lg-4 mt-3">
        <img src="img/events/icc-conference.jpg" alt="" class="" style="height: 200px; width: 250px;">
        </div>
        <div class="col-lg-6 text-dark text-left">
          <h4 class="display-4 text-primary">ICC CONFERENCE 2017</h4>
          <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis error soluta unde.</p>
        </div>
        <div class="col-lg-2 ">
          <button class="btn btn-danger btn-large text-right mt-5">Go To Event</button>
        </div>
    </div>

    <div class="row mt-5 w-75  mx-auto bg-light" style="background: url(../img/backgrounds/greyfloral.png); ">
        <div class="col-lg-4 mt-3">
          <img src="img/events/grand-opening.jpg" alt="" class="" style="height: 200px; width: 250px;">
        </div>
        <div class="col-lg-6 text-dark text-left">
          <h4 class="display-4 text-primary">CATHEDRAL GRAND OPENING</h4>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, accusantium.</p>
        </div>
        <div class="col-lg-2 ">
          <button class="btn btn-danger btn-large text-right mt-5">Go To Event</button>
        </div>
    </div>

      <div class="row mt-5 mb-5 w-75  mx-auto bg-light" style="background: url(../img/backgrounds/greyfloral.png); ">
          <div class="col-lg-12 mt-3">
            <a href="/events" class="display-3">VIEW ALL EVENTS</a>
          </div>
      </div>    
  </div>

<!-- END OF EVENTS -->




<!-- ABOUT OUR CHURCH -->
<div class="row ">
  <div class="col-lg-9">
    <div class="card my-3 mt-5 font-official" style=" background: url(../img/backgrounds/gplaypattern.png); ">
      <div class="card-body text-center">
        <h4 class="card-title display-4 text-danger">ABOUT OUR CHURCH</h4>
        <p class="card-text display-5 text-dark">Deliverance Church Kasarani Zimmerman was established on November 4, 1984 by Bishop Dr. Jimmy Kimani. The church is situated in Zimmerman Estate in Nairobi Kenya, opposite Mirema Drive, off Kamiti Road. Over the time we have grown in leaps and bounds establishing, supporting and building other churches around the Kasarani region as well as in other parts of the country. Among the many Deliverance churches that we have planted are Mwirigo, Mwiki, Kiamumbi, Ihururu and Kahawa West.</p>
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
        <img src="../img/Bish and mum.jpg" alt="" class="h-100 w-100">
  </div>
</div>

<!-- END OF ABOUT -->

<hr class="w-25 mx-auto" style="border: 4px solid darkblue">
<h1 class="text-center display-4 mx-auto text-danger mb-3">Latest Sermons</h1>

<!-- LATEST SERMONS -->
<div class="row">
  <div class="col-lg-4 mb-3" >
    <div class="card font-official" style=" background: url(../img/backgrounds/greyfloral.png);">
      <img src="" alt="" class="img-top">
      <div class="card-title bg-light"><h1 class=""> <span class="text-primary"> Speaker: </span> Bishop Dr. Jimmy Kimani</div>
        <div class="card-title bg-light mb-3"><h1> <span class="text-primary"> Message: </span> Divine Elevation</h1></div>            
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

  <div class="col-lg-4 mb-3">
      <div class="card font-official" style=" background: url(../img/backgrounds/greyfloral.png);">
        <img src="" alt="" class="img-top">
        <div class="card-title bg-light"><h1 class=""> <span class="text-primary"> Speaker: </span> Bishop Dr. Jimmy Kimani</div>
          <div class="card-title bg-light mb-3"><h1> <span class="text-primary"> Message: </span> The 1st Christmas</h1></div>            
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

  <div class="col-lg-4 mb-3">
      <div class="card font-official" style=" background: url(../img/backgrounds/greyfloral.png);">
      <img src="" alt="" class="img-top">
      <div class="card-title bg-light"><h1 class=""> <span class="text-primary"> Speaker: </span> Pastor Francis Omedo</div>
      <div class="card-title bg-light mb-3"><h1> <span class="text-primary"> Message: </span> Righteousness</h1></div>      
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


<!-- <div class="row">
  <div class="col-lg-6">
    <div class="card mb-3">
      <img class="card-img-top" src="img/church-2.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-video-camera fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
        <div class="card" style="width: 30rem; margin-left: 200px; margin-top: -220px;">
          <div class="card-body">
            <h4 class="card-title">
              <small class="text-muted">Sunday 19th November 2017 </small>
            </h4>
            <h6 class="card-subtitle mb-2 text-muted">Bishop Dr. Jimmy Kimani </h6>
            <p class="card-text">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolorem!</strong>
            </p>
            <a href="#" class="card-link">Read More</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col-lg-6">
    <div class="card mb-3">
      <div class="card-body">
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-video-camera fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
        <div class="card" style="width: 30rem; margin-left: 200px; margin-top: -220px;">
          <div class="card-body">
            <h4 class="card-title">
              <small class="text-muted">Sunday 12th November 2017 </small>
            </h4>
            <h6 class="card-subtitle mb-2 text-muted">Pastor Francis Omedo </h6>
            <p class="card-text">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolorem!</strong>
            </p>
            <a href="#" class="card-link">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-video-camera fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
        <div class="card" style="width: 30rem; margin-left: 200px; margin-top: -220px;">
          <div class="card-body">
            <h4 class="card-title">
              <small class="text-muted">Sunday 5th November 2017 </small>
            </h4>
            <h6 class="card-subtitle mb-2 text-muted">Pastor Millicent Kaunda </h6>
            <p class="card-text">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolorem!</strong>
            </p>
            <a href="#" class="card-link">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-video-camera fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-headphones fa-border fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <ul class="list-inline">
            <li class="list-inline-item">
              <i class="fa fa-file-pdf-o fa-border  fa-3x " aria-hidden="true"></i>
            </li>
            <li class="list-inline-item">
              <i class="fa fa-download fa-border  fa-3x " aria-hidden="true"></i>
            </li>
          </ul>
        </p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
        <div class="card" style="width: 30rem; margin-left: 200px; margin-top: -220px;">
          <div class="card-body">
            <h4 class="card-title">
              <small class="text-muted">Sunday 29th October 2017 </small>
            </h4>
            <h6 class="card-subtitle mb-2 text-muted">Pastor Alice Kimani </h6>
            <p class="card-text">
              <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolorem!</strong>
            </p>
            <a href="#" class="card-link">Read More</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div> -->

<!-- END OF LATEST SERMONS  -->


<!-- BLOG -->
<div id="blog" class="card-group mt-5">
  <div class="row">
    <div class="col-lg-3">
      <div class="card h-100 " style="background-color: #00004c;">
        <div class="card-body">
          <h4 class="card-title display-4 text-center mt-5 text-white py-auto">LATEST FROM BLOG</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-3">

      <div class="card hovereffect" style="height: 250px;">
        <img class="card-img-top img-responsive" src="img/events-1.JPG" alt="Card image cap">
        <div class="card-footer overlay">
          <h2 class="display-5 mb-5">
            <strong> STAGES OF DISLOYALTY </strong>
          </h2>
          <p class="mb-5">
            <a href="#">
              <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
            </a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 " style="height: 250px;">

      <div class="card hovereffect">
        <img class="card-img-top img-responsive" src="img/events-2.JPG" alt="Card image cap">
        <div class="card-footer overlay">
          <h2 class="display-5 mb-5">
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
          <h2 class="display-5 mb-5">
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
