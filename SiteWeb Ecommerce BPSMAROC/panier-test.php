<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
   
      if(!isset($_SESSION["email"]))
      {
         header('Location: index.php?success=1');
      }
?>
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
        <link href="css/styles - Copy.css" rel="stylesheet" />
       <!-- --> 
    </head>
    
    <body id="page-top" >
        <!-- Navigation -->
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Collection.php"> Collections</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page">Mes articles</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="sidenav" href="#" onclick="openNav()" >Compte</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="header">
            <div class="container">
                <div class="masthead-subheading" style="color:DeepPink;">Notre collections pour vous</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#page">Voir plus</a>
            </div>
        </header>
        <!-------------------------------------------------------------------------->
        <main class="page" id="page">

        
        <section class="shopping-cart dark">
            <div class="container">
                 <div class="content">
                  <div class="row">
                  <div class="col-md-12 col-lg-8">
                  <div class="items" id="itemspanier">
                  <?php include "myitems.php"; $test = recherchecart(); echo $test;  ?>
            </div>
                  </div>
                  <div class="col-md-12 col-lg-4">
                    <div class="summary">
                      <h3>Caisse</h3>
                      <div class="summary-item"><span class="text">Sous-total</span><span class="price">
                        <span id='sous-prix'><?php if(isset($_SESSION['prix'])) {echo $_SESSION['prix'];} ?></span> DH</span>
                        </div>
                      <div class="summary-item"><span class="text">Livraison</span><span class="price">0 DH</span></div><br>
                      <div class="summary-item"><span class="text">Total</span><span class="price">
                        <span id='prix'><?php if(isset($_SESSION['prix'])) {echo $_SESSION['prix'];} ?></span> DH</span>
                        </div>
                      <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#confirmmodal">Enregistrer</button>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
         </section>
        
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
                        <a onclick="copy()" id="mail" href="#"><span class="text" style="color: white;" id="" >&nbsp &nbsp bps@bpsmaroc.ma</span></a>
                    </td>
                </tr>
            </table>
            </div>
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" id="confirmmodal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                          <h3 class="modal-title"  style="color:LightPink; ">Confirmation de commande</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:mediumaquamarine;border-radius: 5px; >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p style="color:#596764; ">Veuillez confirmer votre commande.</p>
                        </div>
                        <div class="d-flex flex-column text-center">

                        <form action="myitems.php" method=POST id="validateform">

                        <input placeholder="<?php if(isset($_SESSION['tel'])) echo ''; else echo 'Entrez votre numéro de telephone';?>" 
                        
                        value="<?php if(isset($_SESSION['tel'])) {echo $_SESSION['tel'];} else echo '0999999999';?>" 
                         
                         type="number" 
                        id="tel" name="tel" required style="width: 100%;
                          input::-webkit-outer-spin-button,
                          input::-webkit-inner-spin-button {
                              -webkit-appearance: none; margin: 0; 
                          }" class="form-control"><br>

                        <input placeholder="Entrez l'adresse de livraison" 
                        id="adresse" name="adresse" required style="width: 100%;" class="form-control"><br>

                        <button type="button" class="btn btn-info btn-block btn-round" 
                        style="background-color:mediumaquamarine;   border: none;"
                         onclick="<?php $_SESSION['tel'] = '<script>document.getElementById(&#039;tel&#039;).value;</script>';
                          $_SESSION['adresse']= "<script>document.getElementById('adresse').value;</script>";?>
                         validateatlast();">Confirmer</button>

                          <button type="submit" class="btn btn-info btn-block btn-round" data-dismiss="modal" 
                          style="background-color:LightPink; border: none;">Annuler</button> 
                          <br>
                        </form>
                        </div>
                       
                      </div>
                    </div>
                  </div>
       <div class="modal fade" id="modifymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-title text-center">
                          <h2>Changer le mot de passe</h2>
                        </div>
                        <div class="d-flex flex-column text-center">
                          <form action="update.php" method="POST" id="modify" onSubmit="return Validate()">
                            <div class="form-group">
                              <input type="password" class="form-control" id="myInput2" name="oldPassword" placeholder="Votre mot de passe" required>
                            </div>

                            <div class="form-group">
                              <input type="password" class="form-control" id="myInput3" name="newPassword" placeholder="Votre nouveau mot de passe" required>
                            </div>

                            <div class="form-group">
                              <input type="password" class="form-control" id="myInput4" name="newPasswordconfirm" placeholder="Confirmer votre mot de passe" required>
                            </div>

                            <div class="form-group">
                               <input type="checkbox" id="mycheck2" onclick="myFunction2()">&nbsp &nbsp<label for="mycheck2">show Password</label>
                              </div>
                            <button type="submit" name="modify" class="btn btn-info btn-block btn-round">Modifier</button>
                          </form>
                      </div>
                    </div>  
                  </div>

                  
                  </main>
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
         <script src="js/scripts-collec.js"></script>
         <!-- <script src="js/scripts-panier.js"></script> -->
         <script src="js/test.js"></script>
         <script src="js/test3.js"></script>
         <script src="js/test4.js"></script>
         <script src="js/scripts.js"></script>
         <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         <script>
          function Validate() {
        var password = document.getElementById("myInput3").value;
        var confirmPassword = document.getElementById("myInput4").value;
        if (password != confirmPassword) {
            alert("La confirmation ne correspond pas au nouveau mot de passe");
            return false;
        }
        return true;
    }
         </script>
        
     </body>
     <footer><div id="mySidenav" class="sidenav" style='background-image: url("css/pink wall.jpg");'>
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <center><h3 style="color: MediumPurple;" id="emailh3" ><?php echo $_SESSION["email"] ?></h3></center>
      
      <center> <br><br>
      <a type="button" style="color: white;" data-toggle="modal" data-target="#modifymodal">Changer <br> le mot de passe </a>
      <br><br>
      <form action="Script.php" method=POST>
      <button type="submit" id="fbtn" class="btn btn-info btn-lg" name = "logout" onclick="logout()">Se déconnecter</button></center>
       </form>
    </div></footer>
 </html5>