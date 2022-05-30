@extends('main')
@section('content')
<div class="carousel slide mt-5 mb-5" data-bs-ride="carousel" id="carousel-1">
    <div class="carousel-inner">
        <div class="carousel-item active"><img class="w-100 d-block" src="{{URL('imagess/test.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('imagess/test2.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('imagess/test3.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('imagess/test4.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('imagess/test5.jpg')}}" alt="Slide Image"></div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
    </ol>
</div>

<br>

<!-- ---------girls products----------- -->
<div class="small-container">
{{-- <h2 class="title">Girls Product</h2> --}}
<div class="container-fluid">
<div class="col-md-12">
    <div class="row">

    @foreach ($products as $product)
    <div class='card mb-5' style='width: 18rem;'>
    <div class='card-body'>
    {{-- <td>{{ $product->id }}</td> --}}
    <img src="{{ url('public/image/'.$product->image) }}"class='card-img-top' alt='...'>
    <h5 class='card-title text-center text-dark'>{{ $product->name }}</h5>
    <h5 class='card-text text-center text-dark'>{{ $product->mrp }}</h5>
    <h5 class='card-text text-center text-dark'>{{ $product->price }}</h5>
    <button type='button' class='btn btn-warning text-white w-100' value='Buy Now'>Buy Now</button>

    </div>
    </div>
    @endforeach

</div>
</div>
</div>


<!-- ---------------boys product------------------ -->

{{-- <br><h2 class="title">Boys Products</h2> --}}
{{-- <div class="container-fluid">
<div class="col-md-12">
  <div class="row">

  </div>
</div>
</div> --}}



  <!-- ---------------badies product------------------ -->

{{-- <br><h2 class="title">Babies Products</h2> --}}
{{-- <div class="container-fluid">
<div class="col-md-12">
  <div class="row">

  </div>
</div>
</div> --}}

<!-- ------------offer-------------- -->



<!-- ------------testimonial--------------- -->
<div class="testimonial">
<div class="small-container">
    <div class="row">
        <div class="col-3">
            <span class="quote">&#8220;</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Eius totam modi molestias quod quisquam error quas, quis sit enim.</p>
            <div class="rating">
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
            </div>
            <img src="{{URL('imagess/user_1.jpg')}}" alt="product">
            <h3>Anwesha Chatterjee</h3>
        </div>
        <div class="col-3">
            <span class="quote">&#8220;</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Eius totam modi molestias quod quisquam error quas, quis sit enim.</p>
            <div class="rating">
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
            </div>
            <img src="{{URL('imagess/user_2.jpg')}}" alt="product">
            <h3>Deblina Banerjee</h3>
        </div>
        <div class="col-3">
            <span class="quote">&#8220;</span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Eius totam modi molestias quod quisquam error quas, quis sit enim.</p>
            <div class="rating">
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9734;</span>
            </div>
            <img src="{{URL('imagess/user_3.jpg')}}" alt="product">
            <h3>Priti Debnath</h3>
        </div>
    </div>
</div>
</div>
<!-- ---------------brands--------------- -->
<div class="brands">
<div class="small-container">
    <div class="row">
        <div class="col-5">
            <img src="{{URL('imagess/logo_godrej.png')}}" alt="logo">
        </div>
        <div class="col-5">
            <img src="{{URL('imagess/pampers1.jpg')}}" alt="logo" width="90px" height="75px">
        </div>
        <div class="col-5">
            <img src="{{URL('imagess/sp2.png')}}" alt="logo">
        </div>
        <div class="col-5">
            <img src="{{URL('imagess/huggies1.png')}}" alt="logo" width="85px" height="80px">
        </div>
        <div class="col-5">
            <img src="{{URL('imagess/logo_paypal.png')}}" alt="logo">
        </div>
    </div>
</div>
</div>
        </div>
@endsection
