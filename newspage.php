<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
 <?php  require "variables.php"; ?>
</head>
<body>
<!-- header -->
<header class="header">
    <div class="conteiner">
        <div class="header-flex">
            <img src="./assets/logo1.png" alt="logo1">
        <nav class="navigation">
            <a href="index.html #first-section">Our Hotel</a>
            <a href="index.html#second-section">Rooms & Rates</a>
            <a href="index.html#third-section"> facilities</a>
            <a href="newspage.html" class="nav-link">Contac Us</a>

        </nav>
        </div>
    </div>
</header> 
<main>
    <section class="news-first-section">
<div class="container">
    <h2 class="second-title">
        Rooms & Rates 
    </h2>
   
    <div class="news-list">
    <?php
    for($i=0; $i< sizeof($card); $i++ ) {
        echo '  <div class="news-card">
        <img src="' . $card [$i]['image'] .'" alt="img">
        <div class="news-card-con">
            <h3 class="card-title-2"> ' . $card [$i]['title'] .' </h3>
            <p class="card-title">
            ' . $card [$i]['body'] .' 
            </p>
            <a href="#" class="button2">' . $card [$i]['buttons'] .' </a>
        </div>
    </div> ' ;
    }
     ?>
        <div class="news-card">
            <img src="./assets/2-1.png" alt="img">
            <div class="news-card-con">
                <h3 class="card-title-2">Standard Twin Room</h3>
                <p class="card-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros.
                </p>
                <a href="#" class="button2">Check Rates</a>
            </div>
        </div>
        <div class="news-card">
            <img src="./assets/2-2.png" alt="img">
            <div class="news-card-con">
                <h3 class="card-title-2">Standard Room</h3>
                <p class="card-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros.
                </p>
                <a href="#" class="button2">Check Rates</a>
            </div>
        </div>
        <div class="news-card">
            <img src="./assets/2-3.png" alt="img">
            <div class="news-card-con">
                <h3 class="card-title-2">Standard View Room</h3>
                <p class="card-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros.
                </p>
                <a href="#" class="button2">Check Rates</a>
            </div>
        </div>
        <div class="news-card">
            <img src="./assets/2-4 (1).png" alt="img">
            <div class="news-card-con">
                <h3 class="card-title-2">Delux Room</h3>
                <p class="card-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros.
                </p>
                <a href="#" class="button2">Check Rates</a>
            </div>
        </div>
    </div>
</div>
    </section>
    <section class="news-secon-section">
<div class="container">
    <h2 class="second-title">Gallery</h2>
    <div class="gallery-grid">
        <img src="./assets/2-4 (1).png" alt="Gallery img">
        <img src="./assets/2-2.png" alt="Gallery img">
        <img src="./assets/2-3.png" alt="Gallery img">
        <img src="./assets/2-1.png" alt="Gallery img">
    </div>

</div>
    </section>

</main>


 <!-- footer -->
 <footer>
    <div class="conteiners">
        <div class="footer-content">
            <img src="./assets/logo2.png" alt="logo2">
            <nav class="footer-nav">
            <a href="#" class="footer-nav-link"> Our Hotels</a>
            <a href="#" class="footer-nav-link"> Our Conferencing </a>
            <a href="#" class="footer-nav-link">Our Company</a>
            <a href="#" class="footer-nav-link"> Hotel Design</a>
            <a href="#" class="footer-nav-link">Careers</a>    
            </nav>
            <div class="footer-text">
              <P>  Bon Hotels Head Office
              </P>
               <a href="tel:+27 434 344 432">+27 434 344 432</a> 
               <a href=" mailto:info@bonhotels.com">info@bonhotels.com</a> 
            </div>
        </div>
    </div>
</footer>
</body>
</html>