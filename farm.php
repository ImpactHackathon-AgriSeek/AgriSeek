<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/left-sidebar.css" />
    <link rel="stylesheet" type="text/css" href="css/right-sidebar.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <title>Farm</title>
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <img src="img/AgriSeek_Logo.png" id="imglogo" />
        <a href="login.php">Login</a>
        <a class="active" href="farm.php">Farm</a>
        <a href="home.php">Home</a>
    </div>

    <!--LEFT SIDEBAR -->
    <div class="left-sidebar">
        <label><a href="profile.php"><h4>My Profile</h4></a></label>
        <hr>
        <label><a href="myfarm.php"><h4>My Farm</h4></a></label>
        <hr>
        <label><a href="investment.php"><h4>Investments</h4></a></label>
        <hr>
        <label><a href="myaccount.php"><h4>My Account</h4></a></label>
        <hr>
    </div>

    <!-- CONTENT -->
    <form>
        <div class="content">

            <h2>Farms</h2>
            <hr>
            <input type="search" name="search" placeholder="Search"/>
            <select style="width:40%">
                <option value="volvo">All</option>
                <option value="volvo">Rice Farms</option>
                <option value="saab">Fish Farms</option>
                <option value="mercedes">Poultry</option>
                <option value="audi">Piggery</option>
            </select>
            <input type="submit" value="Search" />

            <br><br>

            <!-- <div class="thumbnails" style="width:30%; height:auto; border: solid grey 1px; padding: 10px; border-radius: 7px; text-align: center; font-size: 12px; overflow:hidden; float:left; margin-right: 20px; margin-bottom: 150px;">
            <a href="#"><img src="img/slide3.jpg" alt="Poultry" style="width:100%; height:100%; border-radius: 7px;" /></a>
            <b>Ben's Poultry</b>
            <hr>
            <p>Type: Poultry</p>
            <p>Location: Digos City, Davao del Sur</p>
            <p>Fund needed: PHP 30,000.00</p>
            <p>Funds collected: 100%</p>
            <button style="background-color:grey" disabled>More Info</button>
        </div>

        <div class="thumbnails" style="width:30%; height:auto; border: solid grey 1px; padding: 10px; border-radius: 7px; text-align: center; font-size: 12px; overflow:hidden; float:left; margin-right: 20px;">
            <a href="#"><img src="img/slide2.jpg" alt="Poultry" style="width:100%; height:100%; border-radius: 7px;" /></a>
            <b>Ben's Fishfarm</b>
            <hr>
            <p>Type: Fishfarm</p>
            <p>Location: Digos City, Davao del Sur</p>
            <p>Fund needed: PHP 20,000.00</p>
            <p>Funds collected: 50%</p>
            <button style="background-color:grey" disabled>More Info</button>
        </div>

        <div class="thumbnails" style="width:30%; height:auto; border: solid grey 1px; padding: 10px; border-radius: 7px; text-align: center; font-size: 12px; overflow:hidden; float:left; margin-right: 20px;">
            <a href="#"><img src="img/slide1.jpg" alt="Poultry" style="width:100%; height:100%; border-radius: 7px;" /></a>
            <b>Ben's Ricefield</b>
            <hr>
            <p>Type: Ricefarm</p>
            <p>Location: Digos City, Davao del Sur</p>
            <p>Fund needed: PHP 50,000.00</p>
            <p>Funds collected: 50%</p>
            <button style="background-color:grey" disabled>More Info</button>
        </div> -->
    </form>
    

    <!-- RIGHT SIDEBAR -->

    <div class="right-sidebar">
        <label><h4>Top Performing Farms</h4></label>
        <hr>
        <p><a href="#">Ronaldo's Pigsty - Digos City, Davao del Sur</a></p>
        <p><a href="#">Luzviminda Ricefield Plantation - Municipality of Carmen , Davao del Norte</a></p>
        <p><a href="#">Hearbco Banana Plantation - Tagum City , Davao del Norte</a></p>
        <p><a href="#">Arya Fishpond - Municaplity of Pantukan , Compostela Valley</a></p>
        <p style="float:right;"><a href="#" style="color:black">See More</a></p>
        <br>

        <label><h4>See Upcoming Events</h4></label>
        <p><a href="#">Agri Trade Expo 2019 - December 1, 2019 at SMX Lanang Convention, Davao City</a></p>
        <p><a href="#">Seminar on Agri-business - December 5, 2019 at DAR Region XI</a></p>
        <p style="float:right;"><a href="#" style="color:black">See More</a></p>
    </div>

    <!-- FOOTER -->

    <div class="footer">
        <div style="float: left; margin-left:20px;">Copyright 2019</div>
        <a href="#">Contact Us</a>
    </div>
</body>
</html>