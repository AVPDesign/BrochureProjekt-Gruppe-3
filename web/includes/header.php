<html lang="da">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bakkestien Vissenbjerg - Hjerteforeningen</title>

        <!-- material design icons -->
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">


        <!-- google maps -->
        <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1k5SC29hxlgaYFAVTeKx9yS7iPNUjUTI&callback=initMap"></script>-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>

        <!-- custom -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <!-- font awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" async defer></script>
        <script src="assets/js/script.js" defer></script>
    </head>

    <body onload="loaded()" class="preload">
        <header id="header">
            <div class="wrapper">
                <div class="logo">
                    <a href="index.php">
<!--                        <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M9.75,7.82C8.21,7.82 7,9.03 7,10.57C7,12.46 8.7,14 11.28,16.34L12,17L12.72,16.34C15.3,14 17,12.46 17,10.57C17,9.03 15.79,7.82 14.25,7.82C13.38,7.82 12.55,8.23 12,8.87C11.45,8.23 10.62,7.82 9.75,7.82Z" />
                        </svg>-->
                        <img src="assets/img/logo1.svg" alt="logo"/>
                    </a>
                </div>

                <nav>
                    <!-- desktop nav -->
                    <div id="desktopNav">
                        <a href="index.php" class="<?php if($_GET['page'] == "" || $_GET['page'] == "home"){echo 'activeDesktop';}?>">Forside</a>
                        <a href="index.php?page=routes" class="<?php if($_GET['page'] == "routes"){echo 'activeDesktop';}?>">Find hjertesti</a>
                        <a href="index.php?page=about" class="<?php if($_GET['page'] == "about"){echo 'activeDesktop';}?>">Om os</a>
                        <a href="index.php?page=contact" class="<?php if($_GET['page'] == "contact"){echo 'activeDesktop';}?>">Kontakt</a>
                    </div>
                    
                    <div class="flex" id="mobileNavContainer">
                        <!-- search -->
                        <div class="flex m-r">
                            <svg style="width:2em;" viewBox="0 0 24 24" onclick="toggleSearch()">
                            <path id="mobileSearchPath" fill="#C8102E" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                            </svg>

                            <div id="mobileSearch">
                                <input type="text" placeholder="Søg" id="mobileSearchInput">
                                <button type="submit" id="mobileSearchSubmit">
                                    <svg style="width:2em;" viewBox="0 0 24 24">
                                    <path fill="#C8102E" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- mobile nav -->
                        <svg id="mobileNav" style="width:2.2em;" viewBox="0 0 24 24" onclick="toggleMobileNav()">
                        <path fill="#C8102E" id="mobileNavMenuPath" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"/>
                        </svg>
                    </div>
                </nav>
            </div><!-- wrapper -->
        </header>

        <!-- mobile nav -->
        <div id="mobileNavOverlay">
            <ul id="mobileNavLinks">
                <li><a href="index.php">Forside</a></li>
                <li><a href="index.php?page=routes">Find hjertesti</a></li>
                <li><a href="index.php?page=about">Om os</a></li>
                <li><a href="index.php?page=contact">Kontakt</a></li>
            </ul>
            
            <div id="mobileNavFooter">
                <img src="assets/img/hjerteforeningenLogo1.svg" alt="logo"/>
            </div>
        </div>