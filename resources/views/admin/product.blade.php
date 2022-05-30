<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{url('/categories')}}" >Category Master</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{url('/products')}}" > Product Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="{{url('/categories')}}" > Order Master</a>
                  </li>

				  <li class="menu-item-has-children dropdown">
                     <a href="{{url('/categories')}}" > User Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="{{url('/categories')}}" > Contact Us</a>
                  </li>

               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="{{url('/')}}"><img src="pic/icon.png" alt="logo3"></a>
                  <a class="navbar-brand hidden" href="{{url('/')}}"><img src="pic/icon.png" alt="logo3"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Admin</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power-off"></i>logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>




<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Products </h4>
				   <h4 class="box-link"><a href="
                  {{url('manage_products')}}">Add Product</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>ID</th>
							   <th>Name</th>
							   <th>MRP</th>
							   <th>PRICE</th>
							   <th>QUANTITY</th>
							   <th>IMAGE</th>
                        <th>DELETE</th>
                        <th>UPDATE</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							@foreach ($products as $product)
							<tr>
							   <td class="serial">{{$product->id}}</td>
							   <td>{{$product->name}}</td>
							   <td>{{$product->mrp}}</td>
							   <td>{{$product->price}}</td>
							   <td>{{$product->qty}}</td>
							   <td><img src="{{ url('public/Image/'.$product->img_name) }}"  height="50px"></td>
                        <td><span class='badge badge-delete'><a href='delete/{{$product->id}}'>Delete</a></span></td>
                        <td><span class='badge badge-edit'><a href=''>Edit</a></span>&nbsp;</td>
							   <td></td>
							</tr>
							@endforeach
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>





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
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>