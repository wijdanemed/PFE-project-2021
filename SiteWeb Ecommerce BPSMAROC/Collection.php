
<?php include "test.php";?>
                   
<!DOCTYPE html>
<html5 lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BPSMAROC</title>
        <link rel="icon" type="image/x-icon" href="bps.png" />
         <!------------------------------>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/cart.css">
        <!------------------------------>
        <link rel="icon" type="image/x-icon" href="atlaslogo.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/stock-css.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">BPSMAROC</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#header">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page">Collection</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="panier-test.php">Panier</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="header">
            <div class="container">
                <div class="masthead-subheading" style="color:white;">Notre collections pour vous</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#page">Voir plus</a>
            </div>
        </header>
        <!-------------------------------------------------------------------------->
        <main class="page" id="page">
        
        <section class="shopping-cart dark">
          
                <div class="container">
                   
                <div class="search-container" style="float: right;">
                    <br> <form action="" >
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form><br>
                
                    <!-- <form action=""> -->
                        <select id="selecttag" name="categorie" onchange="test(this.value)">
                            <option value="Tout" selected>Tout</option>
                            <option value="PC">PC</option>
                            <option value="Sourie">Sourie </option>
                            <option value="Camera">Camera</option>
                            <option value="Disque dur">Disque dur</option>
                        </select>
                    <!-- </form> -->
                </div>
            <div class="content">
            <div class="row">
            <div class="items" id="items">
            
            </div> 
            </div>
            </div>
            </div>
         </section>
       </main>
        <!-- Contact-->
        <section class="page-section" id="contact">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase" style="color: mediumaquamarine;">Contactez nous</h2>
              </div><br>
              <table>
              <tr>
                  <td>
                  <span style="font-size: 2rem;color: white;">
                      <i class="fas fa-map-marker"></i>
                  </span>
                  </td>
                  <td>
                      <h6 style="color: white;">&nbsp &nbsp 62 BD AL MOUKAOUAMA ETG 4 , CASABLANCA - MAROC</h6>
                  </td>
              </tr>
              <tr>
                  <td>
                  <span style="font-size: 2rem;color: white;">
                      <i class="fas fa-phone"></i>
                  </span>
                  </td>
                  <td>
                      <h6 style="color: white;">&nbsp &nbsp +212 675 495 630</h6>
                  </td>
              </tr>
              <tr>
                  <td>
                  <span style="font-size: 2rem;color: white;">
                      <i class="fas fa-envelope"></i>
                  </span>
                  </td>
                  <td>
                      <a onclick="copy()" id="mail" href="#"><span class="text" style="color: white;" >&nbsp &nbsp bps@bpsmaroc.ma</span></a>
                  </td>
              </tr>
          </table>
          </div>
        </section>
        <!------------------------------------------------------------------------------------->

         <!-- Bootstrap core JS-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
         <!-- Third party plugin JS-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
         <!-- Contact form JS-->
         <script src="assets/mail/jqBootstrapValidation.js"></script>
         <script src="assets/mail/contact_me.js"></script>
         <!-- Core theme JS-->
         <script src="js/scripts.js"></script>
         <script src="js/scripts-collec.js"></script>
         <script src="js/test3.js"></script>
         <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         <script> 
            // document.onload(loadstuff());
            test("Tout");
         </script>
     </body>
 </html5>