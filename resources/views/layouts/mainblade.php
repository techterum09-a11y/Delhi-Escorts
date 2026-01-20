<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitgirl08</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background:#000;
        }

        /* NAVBAR */
        .navbar{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:70px;
            background:#111;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:0 50px;
            z-index:1000;
        }

        .navbar .logo{
            color:#fff;
            font-size:22px;
            font-weight:bold;
        }

        .navbar ul{
            list-style:none;
            display:flex;
            gap:30px;
            margin:0;
            padding:0;
        }

        .navbar ul li a{
            color:#fff;
            text-decoration:none;
            font-size:15px;
        }

        .navbar ul li a:hover{
            color:#f44336;
        }

        /* HERO SECTION */
        .hero{
            position:relative;
            width:100%;
            height:100vh;
            overflow:hidden;
            margin-top:70px;
        }

        .hero video{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            object-fit:cover;
        }

        .hero::after{
            content:'';
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.35);
            z-index:1;
        }

        .hero-content{
            position:relative;
            z-index:2;
            height:100%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            text-align:center;
        }

        /* FLOAT BUTTONS */
        .float-btn{
            position:fixed;
            right:20px;
            width:50px;
            height:50px;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            font-size:22px;
            z-index:999;
        }

        .call-btn{
            bottom:90px;
            background:#e53935;
        }

        .whatsapp-btn{
            bottom:30px;
            background:#25d366;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">Fitgirl08</div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Call Girls</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Rates</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- FLOATING BUTTONS -->
    <a href="tel:+919999999999" class="float-btn call-btn">📞</a>
    <a href="https://wa.me/919999999999" class="float-btn whatsapp-btn">💬</a>

</body>
</html>
