<?php
include('Session.php');
?>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to bookfinder</title>
    <link rel="stylesheet" type="text/css" href="../project/Activity1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

    <style>
        input[type=text] {
            margin-right: 51px;
            width: 180px;
            box-sizing: border-box;
            border: 3px solid grey;
            border-right: none;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            font-size: 16px;
            text-align: left;
            background-color: white;
            background-repeat: no-repeat;
            margin-top: 0.5px;
            margin-left: 5px;
            padding: 8px 18px 8px 40px;
            transition: width 0.5s ease-in-out;
            outline: none;
            box-shadow: 2px 2px 2px 0px rgba(72, 72, 72, 0.83);
        }

        input[type=text]:focus {
            width: 30%;
            border-color: green;
        }

        .submitbtn {
            margin-left: 1165px;
            border: 3px solid grey;
            width: 50px;
            height: 46px;
            border-left: none;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            margin-top: -46px;
            box-shadow: 0px 2px 2px 0px rgba(72, 72, 72, 0.83);
            padding: 10px;
            background: #A9A9A9;
            font-size: 17px;
            cursor: pointer;
            text-align: center;
        }

        .submitbtn:hover{
            background: #888888;
        }

        input[type=text],[type=submit]{
            float: right;
        }


        .btn{
            height: 47px;
            padding: 13px;
            font-size: 17px;
            font-weight: 550;
            border: none;
            margin:none;
            cursor: pointer;

        }

        .btn:hover{
            outline:solid grey 3px;
            color:red;
        }

        .dropbtn{
            height: 47px;
            padding: 14px;
            font-size: 17px;
            font-weight: 550;
            border: none;
            margin-top: -3px;
            margin-left: 1px;
            cursor: pointer;
            outline: none;
        }

        .dropbtn:hover{
            background-color:#808080;
            outline: grey solid 2px;
            color: red;

        }

        .dropdown{
            position: relative;
            display: inline-block;

        }

        .dropdown-content{
            margin-left: 1px;
            margin-top: 1px;
            display: none;
            position: absolute;
            background-color: #F1F1F1;
            min-width: 120px;
            border-radius: 5px;
            border:2px solid grey;
            min-height: 350px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a{
            color: black;
            margin-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 40px;
            display: block;
            text-decoration: none;
        }

        .dropdown-content a:hover {
            color: red;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropright{
            position: relative;
            display: inline-block;
        }

        .dropright-content{
            margin-left: 130px;
            margin-top: -210px;
            display: none;
            position: absolute;
            background-color: #F1F1F1;
            min-width: auto;
            border-radius: 5px;
            boarder-left:none;
            border:2px solid grey;
            min-height: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;

        }

        .dropright-content a{
            color: black;
            padding-top: 14px;
            padding-bottom: 14px;
            padding-right: 45px;
            display: block;
            text-decoration: none;
            margin-left: 45px;
        }

        .dropdown-right a:hover {
            color: red;
        }

        .dropright:hover .dropright-content {
            display: block;
        }

        .welcome{
            font-size: 18px;
            background: transparent;
            border: none;
            color: white;
            outline: none;
            margin-right: 10px;
        }

        .welcome:hover{
            cursor: pointer;

        }
        .dropdown-profile{
            margin-top: 4px;
            margin-left: 60px;
            display: none;
            position: absolute;
            background-color: #F1F1F1;
            min-width: 155px;
            border-radius: 5px;
            border:2px solid grey;
            border-top-left-radius: none;
            min-height: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-profile a{
            color: black;
            padding: 12px 30px;
            display: block;
            text-decoration: none;
        }

        .dropdown-profile a:hover {
            background-color: #365899;
            color: white;
        }

        .show {
            display: block;
        }


        .downarrow {
            position: absolute;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid white;
            margin-top: -17px;
            cursor: pointer;
            margin-left: 150px;
        }



        .active{
            background-color: #666;
            color: white;
            outline:2px solid grey;
        }

        .fa{
            margin-left: 12px;
        }
        .fa:hover{
            color: blue;
            opacity: 0.7;
        }

    </style>

</head>
<body style="background-color: #F0F0F0;margin: 0px;">

<div id="header" style="position: relative; background-color: #232f3e;height: 120px;width: 100%;margin-top: -10px;">

    <div id="logo" style=" float: left;width: 380px; ">
        <a href="Welcome.php">
            <img src="Bimage/round.png" style="margin-left: -15px;">
        </a>
    </div>

    <div id="discription" style=" width: 900px; margin-right: 0px;margin-left: 150px;">

        <h1 style=" color: white;font-size: 60px;margin-left: 0px;font-family: Times New Roman,serif ;font-weight: 600;margin-bottom: 0px;">BOOK FINDER</h1>
        <p style="float:left;color: white;font-size: 24px;margin-top: -15px;margin-left: 170px;text-align: right;font-family: Times New Roman,serif ;">An Online bookstore for buying and selling.</p>
    </div>

    <div id="nav-right" style="float: right;position: relative;margin-top:-70px;margin-right: 55px;">

        <div class="dropdown"  style="position: relative">
            <button onclick="dropdown()" class="welcome" >Welcome,<?php echo $_SESSION['firstname']; ?>  <div class="downarrow"></div> </button>

            <div class="dropdown-profile w3-animate-zoom" id="myDropdown">

                <a href="Profile.php"><i class="fa fa-user-circle"></i> Profile </a>
                <hr style="display: block;margin-top: 0px;margin-bottom: 0px;border-style: inset;color: #888888;margin-left: auto;
                     margin-right: auto;opacity: 0.2">

                <a href="Setting.php"><i class="fa fa-cogs"></i>  Setting </a>
                <hr style="display: block;margin-top: 0px;margin-bottom: 0px;border-style: inset;color: #888888;margin-left: auto;
                    margin-right: auto;opacity: 0.2">

                <a href="History.php"><i class="fa fa-archive"></i> History</a>
                <hr style="display: block;margin-top: 0px;margin-bottom: 0px;border-style: inset;color: #888888;margin-left: auto;
                    margin-right: auto;opacity: 0.2">
                <a href="Logout.php" style="font-size: 16px;"><i class="fa fa-times-circle"></i> Logout</a>

            </div>
        </div>

        <div id="profile-image" >
            <img src="" width="50px;" height="50px;" style="border-radius: 50%;margin-left: 80px;margin-top: 15px;">
        </div>
    </div>
</div>


<div class="searchbar" style="height: 50px; background-color: #FFA500;margin-top: 0px;margin-left: 0px;">

    <div class="searchbox" style="font-family: Times New Roman,serif ;font-weight:550;position: absolute">
        <form  action="" id="searchform">
            <input type="text" name="search" placeholder="Search.." autocomplete="off">
            <button type="submit" class="submitbtn"> <i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="dropdown" style="margin-top: 4.5px; margin-left:-975px;" >
        <button  class="dropbtn"> Categories <i class="fa fa-bars"></i></button>
        <div class="dropdown-content w3-animate-left">

            <div class="dropright" >
                <a class="btnright" href="#">Engineering</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">Mechanical</a>
                    <a href="#">Computer</a>
                    <a href="#">Electrical</a>
                    <a href="#">Electronics</a>
                    <a href="#">Civil </a>
                    <a href="#">Others </a>

                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Management</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">Finance</a>
                    <a href="#">Marketing</a>
                    <a href="#">Business</a>
                    <a href="#">Economics</a>
                    <a href="#">Accounting</a>
                    <a href="#">Others </a>
                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Medical</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">General</a>
                    <a href="#">Pathology</a>
                    <a href="#">Nursing</a>
                    <a href="#">Physiotheraphy</a>
                    <a href="#">Radiology</a>
                    <a href="#">Pharmecy</a>
                    <a href="#">Others </a>
                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Literature</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">Novel</a>
                    <a href="#">Biography</a>
                    <a href="#">Autobiography</a>
                    <a href="#">Mythology</a>
                    <a href="#">Language</a>
                    <a href="#">History</a>
                    <a href="#">Psychology</a>
                    <a href="#">Others </a>
                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Fiction</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">Science Fiction</a>
                    <a href="#">Horror</a>
                    <a href="#">Comics</a>
                    <a href="#">Mystery</a>
                    <a href="#">Fantasy</a>
                    <a href="#">Others </a>
                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Science</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">Physics</a>
                    <a href="#">Biology</a>
                    <a href="#">Chemistry</a>
                    <a href="#">Astronomy</a>
                    <a href="#">Electomagnetism</a>
                    <a href="#">Wave Mechanics</a>
                    <a href="#">Optics</a>
                    <a href="#">Others </a>
                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Health &Lifestyle</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">General</a>
                    <a href="#">Exercise& Diets</a>
                    <a href="#">Yoga& Meditation</a>
                    <a href="#">Pregnency& Childbirth</a>
                    <a href="#">Sexual Health</a>
                    <a href="#">Travel</a>
                    <a href="#">Food</a>
                    <a href="#">Others </a>
                </div>
            </div>
            <hr style="visibility: hidden;margin-top: 1px;margin-bottom: 1px">
            <div class="dropright" >
                <a class="btnright" href="#">Law&Order</a>
                <div class="dropright-content w3-animate-left">
                    <a href="#">General</a>
                    <a href="#">Human Right</a>
                    <a href="#">Judiciary</a>
                    <a href="#">Criminal Law</a>
                    <a href="#">Legal Education</a>
                    <a href="#">Others </a>
                </div>
            </div>
        </div>
    </div>

    <div id="navbtn" style="margin-top: -47px;position: absolute; margin-left: 168px;">
        <button class="btn " onclick="window.open('Welcome.php','_self','resizable=yes')" id="home"> Home <i class="fa fa-home"></i> </button>
        <button class="btn " onclick="window.open('Watchlist.php','_self','resizable=yes')" id="watchlist"> Watchlist <i class="fa fa-star"></i></button>
        <button class="btn " onclick="window.open('Message.php','_self','resizable=yes')" id="message"> Message <i class="fa fa-envelope"></i></button>
        <button class="btn " onclick="window.open('Seller.php','_self','resizable=yes')" id="seller"> Seller <i class="fa fa-briefcase"></i></button>
    </div>
</div>


<script>
    var header = document.getElementById("navbtn");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }


    function dropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.welcome .downarrow')) {

            var dropdowns = document.getElementsByClassName("dropdown-profile");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<footer style="font-family:Aerial,sans-serif;background-color: #131a22; margin-left: 0px; width: 100%;height: 140px;margin-bottom: 0px;margin-top: 520px;">

    <div style="margin-left: 30px;position: absolute;margin-top: 20px">
        <h3 style="margin-bottom: 3px;color: white;line-height: 220%;margin-left: 10px;"><u><b>Connect with us:</b></u></h3>
        <a href="#" style="color: white"><i class="fa fa-instagram"></i></a>
        <a href="#" style="color: white"><i class="fa fa-twitter"></i></a>
        <a href="#" style="color: white"><i class="fa fa-linkedin"></i></a>
        <a href="#" style="color: white"><i class="fa fa-facebook"></i></a>
    </div>

    <div id="copyright" style=" ">
        <p style="position:absolute;text-align: center;margin-left: 590px;color: white;margin-top: 110px;">&copy BookFinder Pvt.Ltd</p>
    </div>

    <div id="box5" class="division" style="float: right;margin-top:-10px;margin-right: 40px; ">

        <h3 style="margin-bottom: 3px;color: white;line-height: 220%"><u><b>Contact us:</b></u></h3>
        <address style="font-family: sans-serif;margin-top: 3px; color: white;line-height: 150%">
            Email :BookfinderOfficial@gmail.com<br>
            Phone No: +9779803889708<br>
            Address: Kathmandu,Nepal
        </address>
    </div>
</footer>

</body>
</html>
