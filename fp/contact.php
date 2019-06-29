<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>f3llowhuman</title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/final.css" />
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r79/three.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    </head>
    
    <body>
        <div class="wrapper">
            <header>
                <h1>F3llow Human</h1>
                                
                <div class="sociallinks">
                    <ul>
                        <li><a href="https://www.instagram.com/fellow_human_sounds/"><img class="logo" src="images/glyph-logo_May2016.png" alt="Instagram Logo"></a></li>
                    </ul>
                </div>
                
                <nav class="topnav" id="cssmenu">
                    <ul>
                        <li><a href="../index.html"><i class="fa fa-fw fa-university"></i> WEB110</a></li>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="merchandise.html">Merchandise</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="icon"><a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-fw fa-bars"></i></a></li>
                    </ul>
                </nav>
            </header>
            
            <h2>Contact Us</h2>
            <?php include "includes/simple.php" ;?>
            <p class="clear-recaptcha"></p>
            
            <footer id='footer'>
                <p>
                <small>
                &copy; 2019 by <a href="contact.php">Contact Crosby Allison</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="disclaimer.html">Disclaimer</a>
                </small>
                </p>
            </footer>
        </div>
    </body>
    
    <script>
    function myFunction() {
        var x = document.getElementById("cssmenu");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</html>