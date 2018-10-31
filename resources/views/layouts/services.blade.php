@extends('layouts.master')

@section('content')
<div class="container-fluid mt-1" style="height: 100px; margin-bottom:100px;">
    <p class="lead py-4 text-white  text-center" style="font-weight:700; font-size:48px;background-color: rgba(5, 5, 143, 0.959);">Our Services
        <br>
    </p>

</div>

<div class="jumbotron">
<div class="row">
        <div class="col-lg-6" style="border-right: 1px solid gray;">
            <div class="card">
                <img src="img/services/express" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne">Express Service</div>
                <div class="btn btn-lg btn-danger">7:00 am - 8:30 am</div>
                <div class="card-text lead">Our 'speed' service, without compromise on the main dish. We cut everything else to focus on worship, prayer and the word, to cater for all those who work on Sundays, or need to rush somewhere.Karibu sana.</div>

            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <img src="img/services/celebration" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne">Celebration Service</div>
                <div class="btn btn-lg btn-danger">8:45 am - 10:45 am</div>
                <div class="card-text lead">Our family service. We have it all, worship and celebration, prayer, the word, and fellowship. You're welcome to share Jesus with us. There is more than enough of Him to go round  :) You're welcome.</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6" style="border-right: 1px solid gray;">
            <div class="card">
                <img src="img/services/miracle" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne">Miracle Service</div>
                <div class="btn btn-lg btn-danger">11:00 am - 1:00 pm</div>
                <div class="card-text lead">Our 'interpretation' service. We have English and Swahili. For those that work late , or prefer to sleep in on Sundays. Our Miracle service has it all. Worship and Celebration,prayer, the word and fellowship, all in both English and Swahili. Karibu Sana.</div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <img src="img/services/revival" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne"> Midweek Live</div>
                <div class="btn btn-lg btn-danger">Wednesday 5.30pm - 8pm</div>
                <div class="card-text lead">Our Midweek service is aimed at refreshing the soul during the week, and staying the mind on Jesus. Prayer,Worship,The Word and Fellowship.  Karibu Sana.</div>
            </div>
        </div>
    </div>
</div>

@endsection