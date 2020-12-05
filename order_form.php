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
              <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mt-5">
                            <div class=" h4 p-3">
                                Name & Address			<small><small><small>Cash on Delivery</small></small></small>
                                <hr>
                            </div>
                            <div class="card-body">
                                <form action="thanks.php">
                                    <div class="form-group">
                                            Email Address
                                        <input type="email" class="form-control" placeholder="Email address" required autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                            First Name
                                        <input type="text" class="form-control" placeholder="First Name" required autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                            Last Name
                                        <input type="text" class="form-control" placeholder="Last Name" required autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                            Street Address
                                        <input type="" class="form-control" placeholder="Street Address" required autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                            Country
                                        <select class="form-control">
                                            <option>Pakistan</option>
                                            <option>U.K</option>
                                            <option>U.A.E</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                            State/Province
                                        <select class="form-control">
                                            <option>asd</option>
                                            <option>zxc</option>
                                            <option>qwe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                            City
                                        <input type="text" class="form-control" placeholder="City" required autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                            CNIC Number
                                            <input type="number" class="form-control" placeholder="CNIC Number" required autofocus="autofocus">
                                        </div>
                                    <div class="form-group">
                                            Zip/Postal Code
                                        <input type="number" class="form-control" placeholder="Zip or Postal Code" required autofocus="autofocus">
                                    </div>
                                    <div class="form-group">
                                            Phone Number
                                        <input type="tel" class="form-control" placeholder="Phone" required autofocus="autofocus">
                                    </div>
                                    
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">Submit</button>
                                    </div> 
                                </form>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Order Summary
                             </div>
                            <div class="row text-center">
                                <div class="col-6">
                                    Cart Subtotal
                                </div>
                                 <div class="col-6">
                                   PKR 1456
                                 </div>
                               
                            </div>
                                  <div class="row text-center">
                                 <div class="col-6">
                                        ShipPing
                                    </div>
                                     <div class="col-6">
                                       Not Yet Calculated
                                     </div>
                                </div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                           Tax
                                        </div>
                                         <div class="col-6">
                                          PKR 234
                                         </div>
                                    </div>
                                    <div class="row text-center">
                                            <div class="col-6">
                                               Order Total
                                            </div>
                                             <div class="col-6">
                                               PKR 1,890
                                             </div>
                                    </div>
                                    <div class="row mt-4">
                                          <div class="col-12 ml-3">
                                                <label>1 item in Cart</label><br>
                                                <a class="float-right mx-4" href="#">Edit Cart</a>
                                          </div>
                                            <div class="col-4">
                                               <img src="Images/PKPretCatImage07112019.jpg" height="50px" class="img-fluid">
                                            </div>
                                             <div class="col-8">
                                                <div class="row">
                                                    <div class="col-12">
                                                            Name of Product
                                                    </div>
                                                    <div class="col-12">
                                                           Qty
                                                        <select>                                                            
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                            PKR 1,456
                                                    </div>
                                                </div>
                                             </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
	
	
