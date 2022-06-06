<?php
// 
    if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
    $script ='alert("vous devez vous connecter");
    $("#loginModal").modal("show");';
}
else if ( isset($_GET['success']) && $_GET['success'] == 2 )
{
    $script = 'alert("Informations invalide");
    $("#loginModal").modal("show");';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BPSMAROC</title>
        <link rel="icon" type="image/x-icon" href="bps.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Collections</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#About">À propos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" id="panierlink" href="panier-test.php">Panier</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" id="loginbutton" href="#loginModal">Se connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenu chez BPSMAROC</div>
                <div class="masthead-heading text-uppercase"></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Voir plus</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2><br/>
                </div>

                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <br>
                        <p class="text-muted">Des offres avec un bon prix et livraison gratuite.Vous êtes besoin d'équipements techniques, visitez notre collection pour un bon moment de shopping</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Installation et paramétrage</h4></br>
                        <p class="text-muted">L’installation et le paramétrage assurent l’intégration du système dans votre structure informatique et lui permettent de répondre précisément aux exigences liées à votre organisation et votre activité.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Assistance Technique Logiciels</h4>
                        <p class="text-muted">Les incidents techniques et fonctionnels liés à l’utilisation des solutions logicielles ainsi que la mise à jour des logiciels sont pris en charge par l’équipe support et sont résolus par téléphone, internet ou en déplacement sur site</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Collections</h2><br><br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><br><br></div>
                                </div>
                                <img class="img-fluid" src="assets\img\portfolio\pc1.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">PC</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><br><br>
                                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets\img\portfolio\cam1.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <br> <br>Caméra</div>
                                <!--<div class="portfolio-caption-subheading text-muted">Capturer le moment</div>-->
                            </div>
                        </div>
                    </div><br>
                    <div class="col-lg-4 col-sm-6 mb-4" >
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><br><br>
                                    <!-- <i class="fas fa-plus fa-3x" ></i> -->
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/souris.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><br> <br>Souris</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div><center> <a href="Collection.php" id="seemore"> Voir tout</a></center>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="About">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: mediumaquamarine;">À propos</h2>
                </br></br>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="download.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">BPSMAROC</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">BPSMAROC est présente sur le marché pour vous apporter des solutions de qualité, parce que nous faisons de votre réussite notre priorité. Grace à notre expérience et savoir faire vous pouvez gérer votre business en toute sérénité.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Soyez une
                                <br />
                                Partie de notre
                                <br />
                                histoire!
                            </h4>
                        </div>
                    </li>
                </ul>
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
                        <a onclick="copy()" id="mail" href=""><span class="text" style="color: white;" id="" >&nbsp &nbsp bps@bpsmaroc.ma</span></a>
                    </td>
                </tr>
            </table>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase" style="color: darkcyan;">PC</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="css/computer2.jpg" alt="" />
                                    <h6>Besoin d'un PC portable.</h6><p>Consultez notre Stock pour plus d'offres!</p>

                                    <button class="btn btn-primary"  type="button" >
                                        <a style="color: white;" onclick='<?php $_SESSION["cat"]= "PC"; ?>
                                        window.location.href = "Collection.php";'
                                           value="PC">Consulter</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"style="color: darkcyan;">Caméra</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="css/randomstuff.jpg" alt="" />
                                    <h6>Besoin d'une caméra.</h6><p>Consultez notre Stock pour plus d'offres!</p>

                                    <button class="btn btn-primary"  type="button">
                                        <a style="color: white;" onclick='<?php $_SESSION["cat"]="Camera"; ?>
                                        window.location.href = "Collection.php";'  
                                         value="Camera">Consulter</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"style="color: darkcyan;">Souris</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="css/mouse4.jpg" alt="" />
                                    <h6>Besoin d'une souris.</h6><p>Consultez notre Stock pour plus d'offres!</p>

                                    <button class="btn btn-primary" type="button">
                                        <a style="color: white;" 
                                         onclick='<?php $_SESSION["cat"]="Souris"; ?>
                                         window.location.href = "Collection.php";'
                                         value="Souris">Consulter</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                </div>
                <div class="modal-body">
                  <div class="form-title text-center">
                    <h2>Connectez vous!</h2>
                  </div>
                  <div class="d-flex flex-column text-center">
          
                    <form action="Script.php" name="loginform" id="login" method="POST">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Votre addresse email" id="myemailinput">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" id="myInput">
                      </div>
                      <div class="form-group">
                        <input type="checkbox" id="mycheck" onclick="myFunction()">&nbsp &nbsp<label for="mycheck">show Password</label>
                       </div>
                      <button type="submit" name="login" id="loginbtn" class="btn btn-info btn-block btn-round">Se connecter</button>
                      
                    </form>
                    
                    <div class="text-center text-muted delimiter">Ou utiliser un réseaux social</div>
                    <div class="d-flex justify-content-center social-buttons">
                      <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <i class="fab fa-linkedin"></i>
                      </button>
                    
                  </div>
                </div>
               </div>
                <div class="modal-footer d-flex justify-content-center">
                  <div class="signup-section">Vous n'avez pas un compte? <a href="#" class="text-info"  id="creation"> Créez le!</a>
                  </div>
                </div>
            </div>
           </div>
                 </div>
                <!-------------------------------------------------------------------------->
                <div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-title text-center">
                          <h2>Créer un compte</h2>
                        </div>
                        <div class="d-flex flex-column text-center">
                          <form action="Script.php" method="POST" id="create">
                            <div class="form-group">
                              <input type="email" class="form-control" name="newEmail" placeholder="Votre addresse email">
                            </div>

                            <div class="form-group">
                              <input type="password" class="form-control" id="myInput2" name="newPassword" placeholder="Votre mot de passe">
                            </div>

                            <div class="form-group">
                               <input type="checkbox" id="mycheck2" onclick="myFunction2()">&nbsp &nbsp<label for="mycheck2">show Password</label>
                              </div>
                            <button type="submit" name="create" class="btn btn-info btn-block btn-round">Créer</button>
                          </form>
                      </div>
                    </div>  
                  </div>
              
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
        <script>
           <?php echo $script;?>
        </script>
    </body>
</html>
