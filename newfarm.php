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
    <title>New Farm</title>
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
        <label><a href="#"><h4>My Profile</h4></a></label>
        <hr>
        <label><a href="myfarm.php" ><h4>My Farm</h4></a></label>
        <hr>
        <label><a href="investment.php"><h4>Investments</h4></a></label>
        <hr>
        <label><a href="myaccount"><h4>My Account</h4></a></label>
        <hr>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <h3>Create your new Farm</h3>
        <hr>
        <form>
            <h5>Farm Details</h5>

            <div class="left-portion">
                <div id="label">Farm Name</div>
                <div id="label">Farm Type</div>
                <div id="label">Farm Description</div>
                <div id="label">Farm Image</div>
                <h5>Farm Location</h5>
                <div id="label">House/Block/Lot No.</div>
                <div id="label">Street</div>
                <div id="label">Subdivision/Village</div>
                <div id="label">Barangay</div>
                <div id="label">City/Municipality</div>
                <div id="label">Province</div>
                <h5>Evidences of Ownership</h5>
                <div id="label">Land/Farm Title (upload image file)</div>
                <div id="label">Tax receipts (upload image file)</div>
                <h5>Funding</h5>
                <div id="label">Amount (Php)</div>
                <div id="label">Breakdown of Expenses (upload MS word)</div>
            </div>

            <div class="right-portion">
                <input type="text" name="farmname" placeholder="Enter Farm's Name" /><br>
                <select>
                    <option value="ricefarm">Rice Farm</option>
                    <option value="fishfarm">Fish Farm</option>
                    <option value="poultry">Poultry</option>
                    <option value="piggery">Piggery</option>
                    <option value="coconut">Coconut Farm</option>
                    <option value="coconut">Banana Plantation</option>
                </select><br>
                <input type="text" name="farmdescription" placeholder="Enter Farm Description" />
                <input type="file" name="farmimage" />
                <br><br><br><br>
                <!-- FARM LOCATION -->
                <input type="text" name="farmhouseblocklotno" placeholder="Enter House/Block/Lot No." /><br>
                <input type="text" name="farmstreet" placeholder="Enter Street" /><br>
                <input type="text" name="farmvillage" placeholder="Enter Subdivision/Village" /><br>
                <input type="text" name="farmbarangay" placeholder="Enter Barangay" /><br>
                <input type="text" name="farmcitymunicipality" placeholder="Enter City/Municipality" /><br>
                <input type="text" name="farmprovince" placeholder="Enter Province" />
                <br><br><br><br>
                <!-- FARM EVIDENCES -->
                <input type="file" name="farmlandtitle" /><br>
                <input type="file" name="farmtax" />
                <br><br><br><br>
                <!-- FUNDING -->
                <input type="text" name="farmfunding" placeholder="Enter Exact Funding Amount"/><br>
                <input type="file" name="farmbreakdown" /><br>
            </div>
            
            <div id="agree-portion">
                <input type="checkbox" name="agreechkbx" value="agree" required /> 
                I agree to the <a href="#">Terms and conditions</a>
            </div>
            <div id="lower-portion">
                <input type="submit" value="Submit" /> 
            </div>
            
            
        </form>
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