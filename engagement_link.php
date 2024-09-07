<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gainly | Admin Dashboard</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <style>
        body {
            background-color: #202221;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 10px;
        }
        .row {
            display: flex;
            align-items: center;
            width: 98%;
            margin: 10px auto;
            background-color: #333;
            border-radius: 8px;
            padding: 75px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            color: #ffffff;
            text-decoration: none;
        }
        .row:hover {
            background-color: #444;
        }
        .icon {
            border-radius: 50%; /* Makes the image circular */
            width: 64px;
            height: 64px;
            margin-right: 10px;
            border: #22c55e solid 2px;
        }
        .description {
            flex-grow: 1;
        }
        .button {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 20px;
            background-color: #22c55e;
            color: #ffffff;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
        }
        .button:hover {
            background-color: #1e9c4e;
        }
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background: black;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 10;
        }
        .header img {
            height: 40px;
        }
        .header .company-name {
            color: #22c55e;
            font-size: 24px;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('assets/images/users/bg.png') no-repeat fixed center center/cover;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
        }
        .hero-content h1 {
            font-size: 48px;
            margin: 0;
        }
        .hero-content p {
            font-size: 18px;
            margin-top: 10px;
        }
        .search-bar {
            margin-top: 20px;
        }
        .search-bar form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 25px 0 0 25px;
            width: 300px;
            outline: none;
        }
        .search-bar input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 0 25px 25px 0;
            background-color: red;
            color: white;
            cursor: pointer;
        }
        .search-bar input[type="submit"]:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<header class="header">
    <img src="assets/images/users/GAINLY-LOGO.png" alt="Gainly Logo" class="logo">
    <div class="company-name">Gainly</div>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Gainly</h1>
        <p>Your solution for effective financial management.</p>
        <div class="search-bar">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search...">
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
</section>

<!-- Ad Section -->
<div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/zqtxfubhks?key=1fda895b2547122784738b785efb0326" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->


<!-- Ad Section -->
<div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/dfzsq5hu?key=7c395a94e6760486a46ce7c354e4c2d3" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>


    <!-- Repeat rows for more ads -->



    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/q2u7mgak6?key=e6fbed9a59e1654c0d97fa551c619318" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->


    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/dm9443gj?key=8430620e6ffda3777b68c5c03195d98b" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>
    <!-- Repeat rows for more ads -->



    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/ch356sx0?key=2eb0b3eb90b3f001feeaf0d173302aee" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->



    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/jyqbwwk72?key=109b871d2af178bb4f9ee99efc5bd114" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>
    <!-- Repeat rows for more ads -->



    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/k4nustah9?key=b3dd296c563771d07f572803c4e7e590" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->



    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/kr4c532cf?key=7b43d4fe584e155d717da0c5491f4b08" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->


    <!-- Ad Section -->
    <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/c358ih99wp?key=55005b9e8866c076dd22367ff9c0e4a2" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->

    


     <!-- Ad Section -->
     <div class="container">
    <div class="row">
        <img src="assets/images/icons/ad-icon.png" alt="Ad Icon" class="icon">
        <div class="description">
            <h2>Law Advertisement</h2>
            <p><span class="text-success"><i class="mdi mdi-trending-up"></i>Ksh 40</span> Payout</p>
        </div>
        <!-- Add the link URL to a PHP script for click tracking -->
        <a href="track_click.php?link=https://www.cpmrevenuegate.com/eiav1d4zu?key=a5168744e88ca8582848f671dfaf37d8" class="btn btn-primary btn-sm px-2">Watch Ad</a>
    </div>
</div>

    <!-- Repeat rows for more ads -->
</div>

    
   
</div>

<form action="update_funds.php" method="POST">
    <input type="hidden" name="update_funds" value="1">
    <input type="submit" value="Update Funds" class="button">
</form>

</body>
</html>



