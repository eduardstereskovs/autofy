		<?php
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "autofy";

		$conn =  mysqli_connect($servername, $username, $password, $dbName);
		?>
 <!DOCTYPE html>
<html>
    <head>
        <title>Autofy</title>
        <meta charset="UTF-8">
        <meta name="description" content="Car comparison tool">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="autofy_styles.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600&display=swap" rel="stylesheet">
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/4b81e03c47.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="nav_bar" id="topNav">
            <div class="container">
            <img src="images/autofylogo.png" class="logo" />
            <a class ="firstElement" href="autofy.html">Home</a>
            <a href="find.php">Find</a>
            <a class ="active" href="compare-menu.php">Compare</a>
            <a href="history.php">History</a>
            <a href="about-us.html">About Us</a>
            <a href="signin.html" class="rightSide"><i class="fas fa-user-circle"></i> Account</a>
            <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
        </div>






        <div class="container" id="container">
                <div class="contentAddCar">
                    <div class="hero">
                        <img src="images/hero3.png" class="heroFind"/> 
                    </div> 
                    <table class="compareBlock">
                        <tr>
                            <td>
                    <div class="addCarClass">
                    <h2>Fill out your car form</h2>
                      <div class="addCarCriteria">
                          <form method="post" action="add.php">
                              <p>Brand:</p>
                              <input type="text" name="brand"><br />
                              <p>Year:</p>
                              <input type="text" name="year"><br />
                              <p>Body Style:</p>
                              <select class="selectBoxCompare" name="style">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Cabriolet">Cabriolet</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="EstateCar">Estate Car</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Saloon">Saloon</option>
                                    <option value="Van">Van</option>
                                    <option value="SmallCar">Small Car</option>
                            </select><br />
                            <p>Fuel type:</p>
                            <select class="selectBoxCompare" name = "type">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="LPG">LPG</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="Electric">Electric</option>
                            </select><br />
                            <p>Transmission:</p>
                            <select class="selectBoxCompare" name = "transmission">
                                    <option disabled selected value="">Choose your option</option>
                                    <option value="Manual">Manual gearbox</option>
                                    <option value="Automatic">Automatic transmission</option>
                            </select><br />
                            <p>Model:</p>
                              <input type="text" name="model"><br />
                            
                            <p>Add car picture:</p>
                            <input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Submit">
                          </form>
                    </div>  
                    <div class="buttonBlockCompare">
                        <button type="button" class="saveCriteria" onclick="window.location.href='compare.php'">Compare</button>
                    </div>
    </td>
                    <tr>
    </table>

                </div>
                </div>
        </div> 











    <div class="footer">
        <div class="insideContainer">
            <div class="contentContainer">
            <div class="textboxes">
                <div class="textbox">
                    <p class="box"><b>Our Project</b></p>
                    <p class="box"><a href="find.php">Find a car that suits you best</a><br />
                    <a href="compare-menu.php">Car comparison tool</a><br />
                    <a href="about-us.html">Information</a></p>
                </div>
                <div class="textbox">
                        <p class="box"><b>Our Partners</b></p>
                    <p class="box"><a href="https://www.audi.com/en.html">Audi.com</a><br />
                    <a href="https://www.volkswagen.lv/lv.html">Volkswagen.com</a><br />
                    <a href="https://www.mercedes-benz.com/en/">Mercedes-benz.com</a></p>
                        </div>
                <div class="textbox">
                            <p class="box"><b>Leasing Companies</b></p>
                    <p class="box">We cooperate with the largest insurance companies to find the best offer. Find it out:<br />
                    <a href="https://www.mogo.lv/">Mogo.lv</a></p>
                            </div>
            </div>
            <div class="advertisingContainer">
            <div class="advertisingboxes">
                <div class="advertisingbox">
                    <img src="images/adv_banner1.png" width="100%" />
                </div>
                <div class="advertisingbox">
                    <img src="images/adv_banner2.png" width="100%"/>
                </div>             
            </div>
        </div>
            <div class="footerlinks">
                    <a class="disabled">© 2019 Autofy</a>
                    <a href="#terms-of-use">Terms of use</a>
                    <a href="#privacy-and-cookies">Privacy & Cookie Policy</a>
                    <a href="#advertise">Advertise With Us</a>
            </div>
            <div class="copyright"><p>© 2019 Autofy</p>
        </div>
            </div>
    </div>
    </div>
    <script src="autofyFunctions.js"></script>
    </body>
    
</html>


           
