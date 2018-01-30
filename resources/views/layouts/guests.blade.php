@extends('layouts.master')

@section('content')
    <div class="container-fluid h-25">
        <div class="card" data-aos="slide-down">
            <img src="http://www.crazytravellers.com/wp-content/uploads/2017/04/Welcome.jpg" class="img-fluid" alt="" style="height: auto; max-width: 100%;">
        </div>
    </div>


<div class="text-primary mb-3 text-center">
    <h4 class="display-3">I'm New</h4>
    <hr>
    <h5>Find Service Times,Where to Find Us and What to Expect</h5>
</div>

<div class="about-us">
    <p class="lead">
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda autem blanditiis consequatur dicta dolor doloremque, dolorum eos eum eveniet expedita incidunt inventore iusto magnam modi neque odit optio, pariatur porro possimus sed velit voluptatibus!"
    </p>

</div>

<h4 class="text-center text-primary display-4 mt-3"> Our Services </h4>
    <div class="events container font-official text-white mt-5">
        <div class="row">
            <div class="col-md mt-3">
                <div class="card">
                    <img src="img/events/navbar-events.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                    <div class="card-text">
                        <h4 class=" text-primary text-center">Express Service.</h4>
                        <p class="text-muted text-center">7:00am - 8:30am</p>
                        <hr class="mx-auto">
                        <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
                    </div>
                    <div class="card-footer mx-auto">
                    </div>
                </div>
            </div>

            <div class="col-md mt-3">
                <div class="card">
                    <img src="img/events/grand-opening.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                    <div class="card-text">
                        <h4 class=" text-primary text-center">Celebration Service.</h4>
                        <p class="text-muted text-center">8:45am - 10:45am</p>
                        <hr class="mx-auto">
                        <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
                    </div>
                    <div class="card-footer mx-auto">

                    </div>
                </div>
            </div>

            <div class="col-md mt-3">
                <div class="card">
                    <img src="img/events/icc-conference.jpg" alt="" class="card-img-top img-fluid" style="height: auto; max-width: 100%;">
                    <div class="card-text">
                        <h4 class=" text-primary text-center">Miracle Service.</h4>
                        <p class="text-muted text-center">10:45am - 12:45pm</p>
                        <hr class="mx-auto">
                        <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, eaque?</p>
                    </div>
                    <div class="card-footer mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF EVENTS -->

    <div class="container mt-3">
        <h4 class="text-center text-primary display-4 mt-3"> Where to Find Us </h4>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, maiores, tenetur. Aliquam aliquid aspernatur autem corporis debitis error fuga fugit in, neque nisi nobis pariatur qui quia sapiente vero. Accusamus asperiores, dolores eius illo illum ipsa ipsum laudantium maxime nobis omnis pariatur quas quisquam, ratione recusandae reiciendis rerum sunt, tenetur?
        </p>

        <h4 class="text-center text-primary display-4 mt-3"> What to Expect </h4>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, maiores, tenetur. Aliquam aliquid aspernatur autem corporis debitis error fuga fugit in, neque nisi nobis pariatur qui quia sapiente vero. Accusamus asperiores, dolores eius illo illum ipsa ipsum laudantium maxime nobis omnis pariatur quas quisquam, ratione recusandae reiciendis rerum sunt, tenetur?
        </p>
    </div>

@endsection