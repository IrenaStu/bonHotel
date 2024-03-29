<!DOCTYPE html>
<html lang="en">


    <?php 

    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- header -->
<header class="header">
    <div class="conteiner">
        <div class="header-flex">
            <img src="./assets/logo1.png" alt="logo1">
        <nav class="navigation">
            <a href="#first-section" class="nav-link">Our Hotel</a>
            <a href="#second-section" class="nav-link">Rooms & Rates</a>
            <a href="#third-section"class="nav-link" > facilities</a>
            <a href="newspage.html" class="nav-link">Contac Us</a>

        </nav>
        </div>
    </div>
</header> 
<!--  sections  -->
<main>
    <section class="firstsection">
        <div class="first-section-con">
        <h1 class="main-title">
           <?php  echo "WELCOME TO BON HOTEL"; ?>
        </h1>
        <p class="description">
            Good people. Good thinking. Good feeling.
        </p> 
        <div class="button1">
        <a href="#" class="button">EXPLORE
             </a>
        </div>
        </div>
    </section>
<!-- secon section -->
    <section class="second-section">
               <div class="conteiner">
                   <h2 class="second-title">
                    Rooms & Rates
                   </h2>
                </div>
             <div class="rooms-gallery">   
                <div class="rooms-cards">
                    <img src="./assets/card1.png" alt="card1">
                    <div class="absolute-ellement first-ellement">
                       <h3 class="card-title">
                        Standard Twin 
                         </h3> 
                    </div>
                    <div class="absolute-ellement second-ellement">
                    <a href="#" class="buttons"> Check Rates </a>
                    </div>
                </div>
                <div class="rooms-cards">
                    <img src="./assets/card2.png" alt="card2">
                    <div class="absolute-ellement first-ellement2">
                       <h3 class="card-title2">
                        Standard  
                         </h3> 
                    </div>
                 <div class="absolute-ellement second-ellement">
                    <a href="#" class="buttons"> Check Rates </a>
                 </div>
                </div>
             </div>
             <div class="rooms-gallery-2">
                <div class="rooms-cards">
                    <img src="./assets/card3.png" alt="card3">
                    <div class="absolute-ellement first-ellement3">
                       <h3 class="card-title3">
                        Standard View 
                         </h3> 
                    </div>
                    <div class="absolute-ellement second-ellement">
                    <a href="#" class="buttons"> Check Rates </a>
                    </div>
                </div>
                <div class="rooms-cards">
                    <img src="./assets/card4.png" alt="card4">
                    <div class="absolute-ellement first-ellement4">
                       <h3 class="card-title4"> Delux
                         </h3> 
                    </div>
                 <div class="absolute-ellement second-ellement">
                    <a href="#" class="buttons"> Check Rates </a>
                 </div>
                </div>
             </div>
             <div class="rooms-gallery-2">
                <div class="rooms-cards">
                    <img src="./assets/card3.png" alt="card3">
                    <div class="absolute-ellement first-ellement3">
                       <h3 class="card-title3">
                        Bonus 1+1 Room
                         </h3> 
                    </div>
                    <div class="absolute-ellement second-ellement">
                    <a href="#" class="buttons"> Check Rates </a>
                    </div>
                </div>
                <div class="rooms-cards">
                    <img src="./assets/card4.png" alt="card4">
                    <div class="absolute-ellement first-ellement4">
                       <h3 class="card-title4">
                     Sweet B Room
                         </h3> 
                    </div>
                 <div class="absolute-ellement second-ellement">
                    <a href="#" class="buttons"> Check Rates </a>
                 </div>
                </div>
             </div>
    </section>
    <!-- last section -->
    <section class="LAST">
        <div class="lastsection">
            <h2 class="third-title">
                Get a room already!
            </h2> 
            <div class="booking">
                <a href="#" class="booking-button">book now</a>
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