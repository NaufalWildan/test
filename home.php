<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="stylesheet/stylesheet.css?v2">
    <script src="js/setting.js"></script>
    
</head>
<body>
    

    

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="home.php" class="active">Home</a></li>
                            <li><a href="saran.php">Saran</a></li>
                            <li><a href="katalog.php">Katalog</a></li>
                            <li><a href="index.html">Logout</a></li>
                            <li><input class="toggle" type="checkbox" onclick="myFunctionn()"/></li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>  
    </header>
   
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <div>
                                    <h4 id="weare">We Are Razer<h4>
                                </div>
                                
                                <span>The Ultimate Performance For Gaming</span>
                                <div class="main-border-button">
                                    <button id="myBtn">Info...</button>

                                    <script>
                                    document.getElementById("myBtn").addEventListener("click", myFunction);

                                    function myFunction() {
                                        alert ("Razer Inc. adalah sebuah perusahaan produsen perangkat keras permainan global yang didirikan pada tahun 2005 oleh wirausahawan Singapura Min-Liang Tan dan Robert Krakoff");
                                    }
                                    </script>
                                </div>
                                
                            </div>
                            <img src="razer.jpg" alt="" width="100px" height="900px">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 Razer Inc. All rights reserved. 
                            <ul >
                                <li><a href="aboutme.php" class="active">About Us</a></li>
                                <li><a href="aboutme.php">Site Map</a></li>
                                <li><a href="aboutme.php">Contact Us</a></li>
                            </ul>
                        
                    </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
