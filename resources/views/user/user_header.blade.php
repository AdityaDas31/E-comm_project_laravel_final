
{{-- <h2> header</h2> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL('css/style.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL('js/sca.js')}}"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

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
            "><img src="{{URL('imagess/logo2.png')}}" alt="logo" width="125px"> </a>
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
                <li><a href="about" class="activee">About</a></li>
                <li><a href="contact" class="activee">Contact</a></li>
                <li><a href="account" class="activee">Account</a></li>
            </ul>
        </nav>
        <a href="{{URL('cart')}}" class="cart"><img src="{{URL('imagess/cart.png')}}" alt="cart" width="30px" height="30px"></a>
        <img src="{{URL('imagess/menu.png')}}" class="menu-icon"
        onclick ="menutoggle()">
    </div>
    <div class="row">
        <div class="col-2">
            <h1 class="title-design">Give Your Baby<br>A New Life!</h1>
            <p>Giving birth and being born brings us into the essence of creation, where the human spirit is courageous and bold and the body<br> miracle of wisdom.</p>
            <!-- <a href="product.php" class="btn">Explore Now &#8594;</a> -->
        </div>
        <div class="col-2">
            <img src="{{URL('imagess/image01.png')}}" alt="image">
        </div>
    </div>
</div>
</div>
<br>
