<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories</title>
    <link rel="icon" href="img/iconlogo.png" type="iconlogo/png">
    <style>
        /* Styling for the page */
        body {
            background-color: #ffffff;
            color: #000000;
        }

        #top-header {
            background-color: #232f3e;
            color: #ffffff;
        }

        #header {
            background-color: #ffffff;
            padding: 10px 0;
        }

        .header-links a {
            color: #ffffff;
        }

        .header-links a:hover {
            color: #fdd835;
        }

        h1, h5, p, button {
            color: #000000;
        }

        .text-white {
            color: #ffffff;
        }

        .card-footer button {
            background-color: #232f3e;
            color: #ffffff;
        }

        .card-footer button:hover {
            background-color: #fdd835;
            color: #000000;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    	<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +6281324835760</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> adillayasiyroh@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Sukamanah, Majalaya</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="login"><i class="fa fa-user-o"></i> My Account</a></li>
                </ul>
            </div>
        </div>

        <!-- MAIN HEADER -->
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="./img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-search">
                            <form method="GET">
                                <input type="text" name="query" class="input" placeholder="Search here">
                                <button type="submit" class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTENT -->
    <div class="container my-5">
        <h1 class="text-left mb-4">Accessories</h1>

        <!-- Row for Accessories -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/accessories/adaptor-19v 3-42a.jpg" class="card-img-top" alt="Adaptor 19V 3.42A">
                    <div class="card-body">
                        <h5 class="card-title">Adaptor 19V 3.42A</h5>
                        <p class="card-text">This adaptor is compatible with various laptop models. It delivers 19V output and 3.42A current, perfect for high-performance laptops.</p>
                        <p class="card-text"><strong>Price: Rp.45.000</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/accessories/card-reade- 4 port.jpg" class="card-img-top" alt="HDMI Cable 2m">
                    <div class="card-body">
                        <h5 class="card-title">HDMI Cable 2m</h5>
                        <p class="card-text">A high-quality HDMI cable with a length of 2 meters, suitable for connecting devices like TVs, projectors, and computers.</p>
                        <p class="card-text"><strong>Price: $15</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/accessories/card-reader-kecil.jpg" class="card-img-top" alt="Power Sumply Standard Advance">
                    <div class="card-body">
                        <h5 class="card-title">Power Sumply Standard Advance</h5>
                        <p class="card-text">The Power Sumply Standard Advance is designed for efficient energy supply, providing consistent power to various devices.</p>
                        <p class="card-text"><strong>Price: $120</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/accessories/cmos-baterai.jpg" class="card-img-top" alt="USB Flash Drive 64GB">
                    <div class="card-body">
                        <h5 class="card-title">USB Flash Drive 64GB</h5>
                        <p class="card-text">A high-speed 64GB USB flash drive for secure and quick data storage. Compatible with both Windows and Mac systems.</p>
                        <p class="card-text"><strong>Price: $25</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/accessories/card-reader-sotta.jpg" class="card-img-top" alt="Laptop Cooling Pad">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Cooling Pad</h5>
                        <p class="card-text">A laptop cooling pad designed to enhance airflow, reduce temperature, and improve your laptop's performance.</p>
                        <p class="card-text"><strong>Price: $35</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/accessories/conventer-DVI-to-VGA.jpg" class="card-img-top" alt="Bluetooth Headset">
                    <div class="card-body">
                        <h5 class="card-title">Bluetooth Headset</h5>
                        <p class="card-text">A comfortable Bluetooth headset with noise-canceling features, perfect for calls, music, and gaming.</p>
                        <p class="card-text"><strong>Price: $85</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
