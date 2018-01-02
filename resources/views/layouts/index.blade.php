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

<!-- SERVICES -->
<div class="list-inline bg-danger text-white mt-5 font-niconne animate-plus" data-animations="" data-animation-delay="0s" data-animation-duration="3s" data-animation-repeat="">
<h1 class="list-inline-item text-dark display-2">Our Sunday Services :</h1>
<p class="list-inline-item display-4">Express Service - 7:00am - 8:30am |</p>
<p class="list-inline-item display-4">Celebration Service - 8:45am - 10:45am |</p>
<p class="list-inline-item display-4">Miracle Service - 11:00am - 1:00pm</p>

<div class="list-inline">
<h1 class="list-inline-item text-dark display-2">Our Midweek Service :</h1>
<p class="list-inline-item display-4">Wednesday:  6:30pm - 8:00pm</p>
</div>

</div>

<!-- EVENTS -->

<div id="events" class="font-pacifico bg-dark text-white text-center mt-5" >
    <h4 class="display-4 text-center mb-5 w-50 mx-auto pb-3" style="border-bottom: 5px solid red;" >UPCOMING EVENTS</h4>


    <div class="row mt-5 w-75 mx-auto bg-light">
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


    <div class="row mt-5 w-75 mx-auto bg-light">
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

    <div class="row mt-5 w-75  mx-auto bg-light">
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

      <div class="row mt-5 mb-5 w-75  mx-auto bg-light">
          <div class="col-lg-12 mt-3">
            <a href="/events" class="display-3">VIEW ALL EVENTS</a>
          </div>
      </div>    
  </div>

<!-- END OF EVENTS -->





<!-- ABOUT OUR CHURCH -->
<div class="card my-3 mt-5 font-pacifico" style=" background: rgba(10, 10, 124, 0.7);">
  <img class="card-img-top mt-5 text-center mx-auto h-50" src="img/grand opening/cathedral2.jpg" alt="Card image cap" style="width: 700px; height: 500px; margin-left: 500px;">
  <div class="card-body text-center text-white">
    <h4 class="card-title display-4">ABOUT OUR CHURCH</h4>
    <p class="card-text display-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, eligendi dignissimos repellat inventore nemo odit
      modi molestias aperiam nisi. Aut cupiditate cum, velit minima rem, eum minus fugit aspernatur recusandae quas ipsum
      illo voluptatibus doloribus quo! Accusamus, vel dolor suscipit nesciunt velit soluta iusto debitis aliquam itaque illum
      quia odit.</p>
    <p>
      <a href="#">
        <button class="btn btn-lg bg-primary text-white">KNOW MORE </button>
      </a>
    </p>
    <p class="card-text">
      <small class="">The Church of Choice</small>
    </p>
  </div>
</div>

<!-- END OF ABOUT -->

<!-- INFORMATION DESK -->
<!-- <div id="info-desk" class="row" style="overflow:hidden">
  <div class="col-lg-4 h-75" style="overflow:hidden">
    <div class="hovereffect">
      <img class="img-responsive" src="img/bible.jpeg" alt="">
      <div class="overlay">
        <h2 class="display-5 mb-5">
          <strong> SERMONS </strong>
        </h2>
        <p>
          <a href="#">
            <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
          </a>
        </p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 h-75" style="overflow:hidden">
    <div class="hovereffect">
      <img class="img-responsive" src="img/events5.jpeg" alt="">
      <div class="overlay">
        <h2 class="display-5 mb-5">
          <strong> EVENTS </strong>
        </h2>
        <p>
          <a href="#">
            <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
          </a>
        </p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 h-75" style="overflow:hidden">
    <div class="hovereffect">
      <img class="img-responsive" src="img/announcements1.jpeg" alt="">
      <div class="overlay">
        <h2 class="display-5 mb-5">
          <strong> ANNOUNCEMENTS </strong>
        </h2>
        <p>
          <a href="#">
            <button class="btn btn-lg text-white" style="background-color: #00004c;"> CLICK HERE TO VIEW </button>
          </a>
        </p>
      </div>
    </div>
  </div>

</div> -->

<!-- LATEST SERMONS -->
<h4 class="display-4 text-center mb-5 w-50 mx-auto pb-3" style="border-bottom: 5px solid red;">LATEST SERMONS</h4>
<div class="row">
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

</div>

<!-- END OF LATEST SERMONS  -->


<!-- ADVERTISEMENT -->
<div class="bg-overlay mt-5" style="height:800px; margin-top: -20px; z-index:9; font-family:'Handlee', cursive ;">
  <div class="row text-right" style="margin-top: 500px;">
    <div class="col-12 mt-5  ml-auto">
      <h1 class="animate-plus" data-animations="bounceInDown" data-animation-delay="0s" data-animation-duration="7s" >Do you want to join our church?</h1>
        <button type="button" class="btn btn-lg bg-danger animate-plus" data-animations="slideInLeft" data-animation-delay="0s" data-animation-duration="7s">
          <h4 class="display-4">
            <a class="text-white" href="/become-a-member">BECOME A MEMBER</a>
          </h4>
        </button>
    </div>
  </div>
</div>

<!-- END OF ADVERTISEMENT -->



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
