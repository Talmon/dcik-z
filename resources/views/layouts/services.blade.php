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
                <div class="card-text lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi velit quis magnam tempora eaque, iusto doloremque mollitia! Hic quo neque perferendis consequatur modi, autem placeat sint enim optio repellat at?</div>

            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <img src="img/services/celebration" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne">Celebration Service</div>
                <div class="card-text lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi velit quis magnam tempora eaque, iusto doloremque mollitia! Hic quo neque perferendis consequatur modi, autem placeat sint enim optio repellat at?</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6" style="border-right: 1px solid gray;">
            <div class="card">
                <img src="img/services/miracle" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne">Miracle Service</div>
                <div class="card-text lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi velit quis magnam tempora eaque, iusto doloremque mollitia! Hic quo neque perferendis consequatur modi, autem placeat sint enim optio repellat at?</div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <img src="img/services/revival" height="100%" width="100%" alt="" class="card-img-left">
                <div class="card-title display-3 font-niconne">Revival Meetings</div>
                <div class="card-text lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi velit quis magnam tempora eaque, iusto doloremque mollitia! Hic quo neque perferendis consequatur modi, autem placeat sint enim optio repellat at?</div>
            </div>
        </div>
    </div>
</div>

@endsection