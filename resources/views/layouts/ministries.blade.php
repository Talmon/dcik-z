@extends('layouts.master')

@section('content')
 <!-- MINISTRIES -->

   <div class="container-fluid">
        <div class="card" data-aos="slide-down">
            <img src="img/services/cathedral" class="" height="600px"  alt="" style="max-width: 100%;">
            <div class="card-img-overlay">
                <div class="sub-heading text-center text-white font-niconne" style="">Welcome <i class="fas fa-smile text-white"></i> </div>
            </div>
        </div>
    </div>
        
    <div class="container-fluid  ministries">

    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/homepage/mens_ministry2.jpg" alt="Card image cap">
            <div class="card-footer">
            <small class="text-muted"><a href="/men" class="btn btn-lg btn-primary"> Men's Ministry </a></small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/homepage/ladies.jpg" alt="Card image cap">
            <div class="card-footer">
            <small class="text-muted"><a href="/ladies" class="btn btn-lg btn-primary"> Ladies Ministry </a></small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/homepage/childrens_ministry.jpg" alt="Card image cap">
            <div class="card-footer">
            <small class="text-muted"><a href="/men" class="btn btn-lg btn-primary"> Children Ministry </a></small>
            </div>
        </div>
    </div>

    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/homepage/youth_ministry3.jpg" alt="Card image cap">
            <div class="card-footer">
            <small class="text-muted"><a href="/youth" class="btn btn-lg btn-primary"> Youth Ministry </a></small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/homepage/media_ministry.jpg" alt="Card image cap">
            <div class="card-footer">
            <small class="text-muted"><a href="/media" class="btn btn-lg btn-primary"> Media Ministry </a></small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/homepage/youth_ministry.jpg" alt="Card image cap">
            <div class="card-footer">
            <small class="text-muted"><a href="/connect" class="btn btn-lg btn-primary"> Connect Ministry </a></small>
            </div>
        </div>
    </div>

    </div>
    

<!-- END OF TOUR -->

    <!-- END OF MINISTRIES -->





@stop