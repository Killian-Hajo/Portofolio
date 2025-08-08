<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach S
    </title>
    <link rel="stylesheet" href="stylesheet/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

  
</head>
<body>
    <script src="app.js"></script>
    <script src="show.js"></script>
    <div class="section-bars">
      <a style="font-family:'Sofia Pro Regular'" href="" download="";>Télécharge mon flyer</a>
      <ul>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </ul>
  </div>
  <nav class="navbar">
    <img src="assets/logo-w.png" alt="" class="logo1">
    
    <ul class="nav-links-index" id="menuList">
        <li><a id="first-a" href="index.php">Accueil</a></li>
        <li><a href="php/about.php">À Propos</a></li>
        <li><a href="php/service.php">Service</a></li>
        <li><a href="php/contact.php">Contact</a></li>
        <li><a href="php/evolution.php">Évolution</a></li>
        <li class="active"><a href="php/login.php">Se Connecter</a></li>    
        <div class="social-icons-index">
    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a>
    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a>
    <a href="https://tiktok.com" target="_blank"><i class='bx bxl-tiktok'></i></a>
</div>
    </ul>

    <!-- Icône menu burger -->
    <div class="menu-toggle" onclick="toggleMenu()">
        ☰
    </div>
    <script src="burger.js"></script>
</nav>

    <div class="bars-animation">
        <div class="bars" style="--i:1;"></div>
        <div class="bars" style="--i:2;"></div>
        <div class="bars" style="--i:1;"></div>
        <div class="bars" style="--i:2;"></div>
        <div class="bars" style="--i:1;"></div>
        <div class="bars" style="--i:2;"></div>
    </div>

    <section class="home" id="encer">
        <div class="home-info">
            <h1>Samuel Wehbe</h1>
            <h2>Je suis
                <span style="--i:4;" data-text="Coach Sportif">Coach Sportif</span>
                <span style="--i:3;" data-text="Compétent">Compétent</span>
                <span style="--i:2;" data-text="Bienveillant">Bienveillant</span>
                <span style="--i:1;" data-text="Motivant">Motivant</span>
            </h2>
            <p>Coach motivant, toujours prêt à challenger et à inspirer, je transforme le potentiel en performances durables,
                alliant expertise et dynamisme pour repousser les limites de chacun. 💪🔥</p>
                 <div class="btn-sci">
                    <a href="Curriculum-Vitae.pdf" download="Killian Hajo Curriculum Vitae.pdf"><div class="btn">Contacter Moi</div></a>
                 <div class="sci">
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://www.instagram.com/samuelwehbe?igsh=MXZuc3Fza3l6Z3lweg%3D%3D&utm_source=qr" target="_blank"><i class='bx bxl-instagram' ></i></a>
                 </div>
            </div>
        </div>

        <div class="home-img">
            <div class="img-box">
                <div class="img-item">
                    <img src="assets/sam-liver.jpeg" alt="photo de la personne qui présente son Portfolio, God Killian HAJO">
                </div>
            </div>
        </div>
        <!--<h2  style="font-family:'Sofia Pro Regular'" class="wrap-title">Mes Partenaires</h2>-->
    </section>
    



    <section class="wrap-metier">
    <div class="logos">
      <div class="logos-slide">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>

      <div class="logos-slide">
        <img src="./logos/3m.svg" />
        <img src="./logos/barstool-store.svg" />
        <img src="./logos/budweiser.svg" />
        <img src="./logos/buzzfeed.svg" />
        <img src="./logos/forbes.svg" />
        <img src="./logos/macys.svg" />
        <img src="./logos/menshealth.svg" />
        <img src="./logos/mrbeast.svg" />
      </div>
    </div>
    </section>




    <section class="slider-container">
      <div class="slider-images hidden">
        <div class="slider-img">
          <img src="assets/IMG_3552.jpeg" alt="1" />
          <h2>Mike</h2>
          <div class="details">
            <h3>Mike</h3>
            <p>Elève</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="assets/Simon.jpg" alt="2" />
          <h2>Simon</h2>
          <div class="details">
            <h3>Simon</h3>
            <p>J'ai que le dos</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="assets/arnold.webp" alt="3" />
          <h2>Arnold.S</h2>
          <div class="details">
            <h3>Arnold.S</h3>
            <p>Acteur, Bodybuilder</p>
          </div>
        </div>
        <div class="slider-img active">
          <img src="assets/sam.JPG" alt="4" />
          <h2>Samuel Wehbe</h2>
          <div class="details">
            <h3>Samuel Wehbe</h3>
            <p>Coach de ces machines</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="assets/anatoly.jpg" alt="5" />
          <h2>Anatoly</h2>
          <div class="details">
            <h3>Anatoly</h3>
            <p>Youtubeur, Influenceur</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="assets/cbum.jpg" alt="6" />
          <h2>Cbum</h2>
          <div class="details">
            <h3>Chris Bumsteadd</h3>
            <p>Bodybuilder</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="assets/ronnie.jpg" alt="7" />
          <h2>Ronnie</h2>
          <div class="details">
            <h3>Ronnie Coleman</h3>
            <p>Bodybuilder</p>
          </div>
        </div>
      </div>
    </section>
    <script src="jQuery.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        $(".slider-img").on("click", function () {
          $(".slider-img").removeClass("active");
          $(this).addClass("active");
        });
      });
    </script>


<script src="slider.js"></script>

      <section class="slider-about">

        <h2 class="hidden">Soyez la meilleure version <br> de vous</h2>
        <p>"Découvrez mon processus de transformation unique et éprouvé, qui a façonné certains des plus grands leaders et équipes au monde."</p>
        <div class="btn-sci">
                    <a href="php/contact.php"><div class="btn hidden">Me contacter</div></a>
</section>
 <section>  
    <footer>
        <div class="container-footer">
            <div class="row">
                  <div class="col" id="company">
                      <img src="assets/logo-w.png" alt="" class="logo1">
                      <p class="hidden">
                        Je ne suis pas là pour vous vendre du rêve mais pour les rendre réalisables. "Sale Pute" de Beaudelaire.
                      </p>
                      <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                  </div>

                  <div class="col" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="php/service.php">Coaching Personnel</a>
                        <a href="php/service.php">Nutritions et Conseils</a>
                        <a href="php/service.php">Préparation Physique</a>
                        <a href="php/service.php">Suivi et Bilané</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="php/about.php">À Propos</a>
                        <a href="php/service.php">Services</a>
                        <a href="#">Notre Politique</a>
                        <a href="php/contact.php">Notre Aide</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-location"></i>
                         <p>Orange, 0 Rue d'Espagne <br> FR, EU</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>+1-8755856858</p>
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="form-index">
                    <form action="">
                        <input type="text" placeholder="Email here...">
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                  </div>
            </div>

        </div>
     </footer>
</section> 






</body>
</html>