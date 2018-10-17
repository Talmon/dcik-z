@extends('layouts.master')

@section('content')
<div class="card" style="border-top: 2px solid #fff;" data-aos="slide-down">
        <img src="img/ladies/ladies.jpg" alt="" class="card-img w-100" style="height: 800px;">
        <div class="card-img-overlay text-center text-white" style="font-family: Belleza; padding-top: 200px;">
        <h3 class="sub-heading font-niconne w-50  mx-auto text-white card-title mt-5" style="">Ladies Ministry</h3>
        </div>
</div>

<div class="container">
    <div class="row mt-3">
        <h4>Ministry Information</h4>
        <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab delectus deleniti dolor, dolorem doloremque enim illo iusto officia omnis qui quis quod recusandae sed? Aliquid aspernatur autem commodi cum, ducimus enim exercitationem fugit iste libero maiores molestiae, molestias, nam nihil nulla odio pariatur qui quisquam reprehenderit sint sit unde voluptas.</p>
        <ul class="col-lg-4 nav nav-tabs flex-column" id="myTab" role="tablist" style="border-right: 2px solid #ccc; height:500px;>
        <li class="nav-item mt-5">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DAUGHTERS OF IMPACT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark bg-light" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LADIES GROUPS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark bg-light" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">LADIES WEEK</a>
        </li>
        </ul>

        <div class="col-lg-8 tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium delectus dolores et excepturi maiores modi nam numquam optio quam, reprehenderit similique, sunt vero. A animi dicta dolores iusto laudantium? Amet?</p> </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore dolorum ducimus earum eligendi esse ipsam ipsum maxime nemo numquam odio, perferendis quo recusandae sequi veniam veritatis voluptatem voluptatum. Dignissimos ipsum, nihil? Ab accusamus alias commodi cum, deleniti dolore dolorem et eum fuga itaque minima non placeat repellendus sint tempora.</p></div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, enim error esse ipsam, iure maxime optio quod repellendus sunt tempore tenetur ut voluptas. Accusamus aperiam asperiores enim expedita harum laudantium molestiae, nesciunt numquam praesentium quia suscipit ullam velit! Aspernatur cumque, et illum quae qui quidem ratione sint voluptas? Dolore doloribus earum incidunt inventore laudantium officiis perferendis reiciendis tempora veritatis! A, consectetur dolore dolorum harum numquam recusandae reiciendis repudiandae sed voluptate!</p></div>
        </div>

    </div>

</div>

<div class="text-center">
<button class="btn-lg btn-primary text-center mt-5 mb-3">SIGN UP NOW</button>
</div>


<p class="display-4 text-center"> <strong> Or for more information  </strong> </p>
<p class="display-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem exercitationem debitis rerum maxime voluptas nemo eaque beatae iusto consectetur iste.</p>
@endsection  