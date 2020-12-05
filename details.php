<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>


    <!---------------------File-links--------------------->

    <link href="Style_sheet_Index.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<?php include_once "components/navbar.php";?>





<!--
	 	 --
	 		 -->
	<!---------------------Page_content--------------------->
	<!--
	 	 --
			  -->
    <div class="row mt-1">
		<div class="h3 col-sm-12 text-dark mx-5 py-4">
			Product Detail
		</div>
    </div>
    








    <div class="container mt-4">
		 <div class="row">
			 
				 
			 <!---------------------Product--------------------->
	<div class="col-lg-9">		 
		<div class="row">	 
			 
			 
	  	 <div class="col-sm-12">
            <div class="card ">
              <div class="mx-5 my-5">
					
				<div class="float-left float-left">
					<img class="img-fluid" src="https://source.unsplash.com/400x400/?fashion" width="400px" alt="">
					
				</div>
				  <div class="float-left mt-5 ml-4">
					<div><img class="img-fluid" src="https://source.unsplash.com/130x130/?fashion" width="130px"></div>
					<div><img class="mt-5 img-fluid" src="https://source.unsplash.com/130x130/?fashion" width="130px"></div>
				</div>
			</div>
          
			
          <div class="card-body">
             <h3 class="card-title">Product Name</h3>
            <h4 class="text-success">$24.99</h4>
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <span class="text-warning float-right">&#9733; &#9733; &#9733; &#9733; &#9734;
				<b class="text-dark"> 4.0 stars</b>
			  </span>            
			  <a href="proceed.php" class="btn btn-success text-light float-left"><b>Oder Now</b></a>
          </div>
           </div>
        </div>
			 
			 
			 
		<!-- /.card -->

        <div class="card my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
           	 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            	<hr>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            	<hr>
          	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
           		<hr>
            <a href="#" class="btn btn-success float-right">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->
			 
			 
			 
			</div> 
		</div>
			 
			 	 <!---------------------left-side--------------------->
			 <div class="mt-5 navbar-expand-lg col-lg-3">				 
			 	<ul class="nav flex-column collapse navbar-collapse">
					<h2 class="text-primary">Cetagries</h2>
					<li>
						<a href="Index.html" class="nav-link text-dark">Winter Collection</a></li> 
					<li>
						<a href="#" class="nav-link text-dark -dark">Unstiched</a></li> 
					<li>
						<a href="#" class="nav-link text-dark -dark">Fragrances</a></li> 
					<li>
						<a href="#" class="nav-link text-dark -dark">New Arrivals</a></li> 
					<li>
						<a href="#" class="nav-link text-dark -dark">New Arrivals</a></li> 
					
				
				</ul>
			 </div>
	  </div>	
	</div>
	























<!-- sign up form -->
<?php include_once "components/sign_up_form.php";?>
<!-- sign up form -->
<?php include_once "components/footer.php";?>