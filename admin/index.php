<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- links -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <style>
    .sidebar > li{
        font-family:arial;
        padding:0.5rem;
        font-size:20px;
        width:100%;

    }
    .sidebar li > a {
        
        color:white;
    }
    .dropdown{
        list-style:none;
        padding:0;
        display:none;
        width:100%;
    }
    .sidebar li:hover .dropdown{
        display:block;
    }
    </style>

</head>
<body>

<div class="row" style="height:100%">
    <div class="col-2 bg-secondary">
        <h2 class="text-center text-light">Admin</h2>

        
        <ul class="nav flex-column mt-5 sidebar">
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
                <ul class="dropdown">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Show All</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>

    </div>
        

    <div class="col-10">
        <h1 class="text-center">Content</h1>
    </div>
</div>








<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>