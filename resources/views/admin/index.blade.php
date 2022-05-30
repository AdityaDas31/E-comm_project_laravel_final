<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-filled.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{route::("/categories")}}" >Category Master</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{route::("")}}" > Product Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="{{route::("")}}" > Order Master</a>
                  </li>

				  <li class="menu-item-has-children dropdown">
                     <a href="{{route::("")}}" > User Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="{{route::("")}}" > Contact Us</a>
                  </li>

               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <img class="navbar-brand hidden" src="pic/icon.png" alt="logo3">
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i>logout</a>
                        
                     </div>
                  </div>
               </div>
            </div>
         </header>
<!-------------- header end ----------------------------->




<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Dashboard </h4>
				</div>
			</div>
		  </div>
	   </div>
	</div>
</div>





<!-------------------------- Footer ------------------------------->
<div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; <?php echo date('Y')?> TinyTressers
                  </div>

               </div>
            </div>
         </footer>
      </div>
      <script  type="text/javascript" src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
      <script  type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
      <script  type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
      <script  type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
   </body>
</html>

