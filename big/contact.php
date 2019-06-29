<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Crosby Allison's BIG Assignment</title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/forms.css" />
        
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <script src="js/script.js"></script>
    </head>
    
    <body>
        <div class='wrapper'>
            <header>
                <h1><i class="fa fa-fw fa-home"></i> Web Development Examples by Crosby Allison</h1>
                <nav id="cssmenu">
                    <ul>
                        <li><a href="../index.html"><i class="fa fa-fw fa-university"></i> WEB110</a></li>
                        <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
                        
                        <!-- drop down menu for research topics -->
                        <li><a href="#"><i class="fa fa-fw fa-bars"></i> Research Topics</a>
                            <ul>
                                <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                                <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-up"></i> SMO</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
                            <ul>
                                <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                                <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                                <li><a href="map.html"><i class="fa fa-fw fa-map"></i> Map</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Lightbox Gallery</a></li>
                        <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Crosby</a></li>
                    </ul>
                </nav>
            </header>

            <!-- START LEFT COLUMN -->
            <section class="fullwidth">
                <h2>Contact Crosby</h2>
                <?php include "includes/simple.php" ;?>
                <p class="clear-recaptcha"></p>
            </section>
            <!-- END LEFT COLUMN -->

            <footer>
                <p><small>&copy; 2018 by <a href="contact.php">Contact Crosby Allison</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
            </footer>
        </div>

        <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }  
        </script>

    </body>
</html>