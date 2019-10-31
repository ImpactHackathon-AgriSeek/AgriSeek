<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="registration_css.css" />
    <link rel="stylesheet" href="stylesheet/header.css" />
</head>
<body>

    <div style="background-color:#447741;height:60px;">
        <img src="./images/AgriSeek_Logo.png" width="100" height="60">
    </div>

    <form action="signup_action.php" method="post">
        <div class="container">

            <h1>Land Information</h1>
            <p>Please fill in this form to upload details of your land or farm.</p>
            <hr>

            <label for="firstname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="firstname" required><br>

            <label for="middlename"><b>Middle Name</b></label>
            <input type="text" placeholder="Enter Middle Name" name="middlename" required><br>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="surname" required><br>
                
            <label for="email"><b>Contact Number</b></label>
            <input type="text" name="" required><br><br>

            <label for="sex"><b>Location/Address:</b></label><br>
            <input type="text" name="owner"><br><br>

            <label for="address"><b> Land Area (in sq.m):</b></label>
            <input type="text" placeholder="Enter Land Area" name="land area" required><br>
        
            <label for="psw"><b>Amount</b></label>
            <input type="text" placeholder="Enter Amount" name="amount" required>
        
            <label> Please attach certificate of land ownership: </label>
            <input type = "file" name = "certificate"> <br><br>
            <label> Attach here image of your land area: </label>
            <input type = "file" name = "certificate"> 
        
            <button type="submit" class="registerbtn" name="submit-register">Create</button>
        </div>
      
      </form>
</body>
</html>