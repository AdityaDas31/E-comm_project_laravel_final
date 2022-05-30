
{{-- <h2> header</h2> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL('user/css/style.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL('user/js/sca.js')}}"></script>
    <script src="user/assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    .card:hover{
    transform: scale(1.1);
}
.card{
    transition: transform .5s;
}
</style>

<div class="header">
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="/
            "><img src="{{URL('user/imagess/logo2.png')}}" alt="logo" width="125px"> </a>
        </div>

        <!-- ----------Search Box----------- -->

        <div class="ho">
            <form action="">
                <!-- <div class="poi"> -->
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="poipoi">
             <input type="search" id="search" class="search" placeholder="Search data">
            </div>
             <button type="submit" id="search" class="search-button">Search</button>

            <!-- </div> -->
              <!-- </div> -->
            </form>
        </div>
        <div id="display"></div>



        <!-- <div class="Box">
            <form action="">
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="autocomplete">
            <input  id="myInput" type="search" name="search" onkeyup="myFunction()" >
            <button type="submit" class="search-button" >Search</button> -->
            <!-- <div class="searchinput"> -->

                <!-- <li>Boys Graphic Print Hosiery T'Shirt </li>
                <li>Full Sleeve Solid Boys Casual Jacket </li>
                <li>New Gen-india T'Shirt(Black & White) </li>
                <li>Graphic Print Pure Cotton T'Shirt Combo </li>
                <li>MammyPoko Pants Extra-L(96 Pieces) </li>
                <li>HIMALAYA Happy Gift PackS </li> -->

             <!-- </div> -->
             <!-- </div>
            </form>
        </div> -->
        <!-- ----------Menu Items----------- -->

        <nav>
            <ul id="MenuItems">
                <!-- <i class="fa fa-search" aria-hidden="true"></i>
                <input type="search" name="" class="search"> -->
                <li><a href="/" class="activee active">Home</a></li>
                <!-- <li><a href="product.php" class="activee">Products</a></li> -->
                <li><a href="/about" class="activee">About</a></li>
                <li><a href="contact" class="activee">Contact</a></li>
                <li><a href="{{url('/')}}" class="activee">Logout</a></li>
            </ul>
        </nav>
        <a href="{{URL('cart')}}" class="cart"><img src="{{URL('user/imagess/cart.png')}}" alt="cart" width="30px" height="30px"></a>
        <img src="{{URL('user/imagess/menu.png')}}" class="menu-icon"
        onclick ="menutoggle()">
    </div>
    <div class="row">
        <div class="col-2">
            <h1 class="title-design">Give Your Baby<br>A New Life!</h1>
            <p>Giving birth and being born brings us into the essence of creation, where the human spirit is courageous and bold and the body<br> miracle of wisdom.</p>
            <!-- <a href="product.php" class="btn">Explore Now &#8594;</a> -->
        </div>
        <div class="col-2">
            <img src="{{URL('user/imagess/image01.png')}}" alt="image">
        </div>
    </div>
</div>
</div>
<br>






<div class="carousel slide mt-5 mb-5" data-bs-ride="carousel" id="carousel-1">
    <div class="carousel-inner">
        <div class="carousel-item active"><img class="w-100 d-block" src="{{URL('user/imagess/test.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('user/imagess/test2.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('user/imagess/test3.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('user/imagess/test4.jpg')}}" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="{{URL('user/imagess/test5.jpg')}}" alt="Slide Image"></div>
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

    @foreach($products as $product)

    <div class='card mb-5' style='width: 18rem;'>
    <div class='card-body'>
    <img src="{{ url('public/image/'.$product->img_name) }}"class='card-img-top' alt='...'>
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
            <img src="{{URL('user/imagess/user_1.jpg')}}" alt="product">
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
            <img src="{{URL('user/imagess/user_2.jpg')}}" alt="product">
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
            <img src="{{URL('user/imagess/user_3.jpg')}}" alt="product">
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
            <img src="{{URL('user/imagess/logo_godrej.png')}}" alt="logo">
        </div>
        <div class="col-5">
            <img src="{{URL('user/imagess/pampers1.jpg')}}" alt="logo" width="90px" height="75px">
        </div>
        <div class="col-5">
            <img src="{{URL('user/imagess/sp2.png')}}" alt="logo">
        </div>
        <div class="col-5">
            <img src="{{URL('user/imagess/huggies1.png')}}" alt="logo" width="85px" height="80px">
        </div>
        <div class="col-5">
            <img src="{{URL('user/imagess/logo_paypal.png')}}" alt="logo">
        </div>
    </div>
</div>
</div>
        </div>


{{-- <h6>Foter</h6> --}}


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 class="sizeb">Download Our App</h3>
                <p>Download App for Android ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{URL('user/imagess/play_store.png')}}" alt="image">
                    <img src="{{URL('user/imagess/app_store.png')}}" alt="image">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{URL('user/imagess/logo3.png')}}" alt="logo">
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Baby
                 Accessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3 class="size">Useful Links</h3>
                <ul class="sizec">
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Discount</li>

                </ul>
            </div>
            <div class="footer-col-4">
                <h3 class="sizea">Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Â© Copyright <script>document.write(new Date().getFullYear())</script> - TINY TRESSERS</p>
    </div>
</div>

<?php

// include "footer.php";

?>

<!-- ----------js for toggle menu----------- -->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("MenuItems");
    var btns = header.getElementsByClassName("activeee");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>
       <!-- <script src="suggestions.js"></script> -->





</body>
</html>
