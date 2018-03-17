<html>
<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    </head>
    <body>


    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="halaman.php">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="halaman.php">Profile<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="halaman.php">Galery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="halaman.php">About Us</a>
		      </li>
		     
		    </ul>
		   
		  </div>
		</nav>

    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				@yield('content')
    			</div>
    		</div>
    	</div>

    	<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    	<script src="{{url('js/propper.min.js')}}"></script>
    	<script src="{{url('js/bootstrap.min.js')}}"></script>
    	<script src="{{url('js/fontawesome-all.min.js')}}"></script>















    </body>
</html>
