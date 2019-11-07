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
    <title>My Fundings</title>
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <img src="img/AgriSeek_Logo.png" id="imglogo" />
        <a href="login.php">Login</a>
        <a href="farm.php">Farm</a>
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
    <div class="content">
        <h3>My Fundings</h3>
        <hr>
        <div>
            <p><a href="#" style="font-size: 14px; float:right;">View past transactions</a></p><br>
        </div>
        <table>
            <tr>
                <th>Farm Name</th>
                <th>Owner</th>
                <th>Location</th>
                <th>Type</th>
                <th>Fund</th>
                <th>ROI</th>
                <th>Date funded</th>
                <th>Due date</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Ben Piggery</td>
                <td>Ben Tan</td>
                <td>Davao City</td>
                <td>Piggery</td>
                <td>2000</td>
                <td>10%</td>
                <td>August 5, 2019</td>
                <td>December 13, 2019</td>
                <td><button type="button" disabled>Claim</button></td>
            </tr>
        </table>

    </div>

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