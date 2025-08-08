<?php include "head.php" ?>
<?php include "nav.php" ?>
<html>
<style>
        .navbar{
            justify-content: space-around;
        }
        .section-bars{
            display: none;
        }
        .navbar{
            transform: translateY(-100%);
            animation: slideDown 0.5s ease-out forwards;
        }
    </style>
<link
        rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
<section>
    <div class="slider1-container">
        <div class="slider1-wrapper swiper-wrapper">
            <div class="slider1-item swiper-slide">
                <div class="slide1-content">
                    <h3 class="slide1-subtitle">01</h3>
                    <h2 class="slide1-title">L'Obsidienne Minimaliste</h2>
                    <p class="slide1-description">Une maison cubique noire mate, aux lignes épurées, où de larges baies vitrées contrastent avec la façade sombre. L'intérieur est baigné de lumière, jouant avec les textures du béton et du bois sombre.<p>
                        <a href="#" class="slide1-button"><span>Voir Plus</span></a>
            </div>
        </div>
        <div class="slider1-item swiper-slide">
                <div class="slide1-content">
                    <h3 class="slide1-subtitle">02</h3>
                    <h2 class="slide1-title">Nocturne Élégante</h2>
                    <p class="slide1-description">Un pavillon aux formes géométriques audacieuses, mêlant métal noir et verre fumé. L'éclairage indirect et les espaces ouverts créent une atmosphère raffinée et intimiste.<p>
                        <a href="#" class="slide1-button"><span>Voir Plus</span></a>
            </div>
        </div>
        <div class="slider1-item swiper-slide">
                <div class="slide1-content">
                    <h3 class="slide1-subtitle">03</h3>
                    <h2 class="slide1-title">Ghost</h2>
                    <p class="slide1-description">Une maison suspendue sur pilotis, aux façades de verre encadrées d'acier noir. Son architecture semble flotter entre opacité et transparence, offrant une connexion subtile avec la nature environnante.<p>
                        <a href="#" class="slide1-button"><span>Voir Plus</span></a>
            </div>
        </div>
        <div class="slider1-item swiper-slide">
                <div class="slide1-content">
                    <h3 class="slide1-subtitle">04</h3>
                    <h2 class="slide1-title">Bounty</h2>
                    <p class="slide1-description">Un volume monolithique en bois brûlé, percé de fenêtres verticales qui filtrent la lumière comme des rayons lunaires. À l'intérieur, un décor minimaliste en béton ciré et mobilier sur-mesure.<p>
                        <a href="#" class="slide1-button"><span>Voir Plus</span></a>
            </div>
        </div>
        <div class="slider1-item swiper-slide">
                <div class="slide1-content">
                    <h3 class="slide1-subtitle">05</h3>
                    <h2 class="slide1-title">Julien</h2>
                    <p class="slide1-description">Un loft ultra-moderne tout en nuances de gris foncé, avec une toiture en pente asymétrique. L'intérieur sobre et feutré est ponctué de touches de métal brossé et de larges ouvertures vers un jardin zen.<p>
                        <a href="#" class="slide1-button"><span>Voir Plus</span></a>
            </div>
        </div>
    </div>

    <div class="slider1-controls">
        <ul class="slider1-pagination">
            <div class="slider1-indicator"></div>
            <li class="slider1-tab">Maison Moderne 1
                
                
            </li>
            <li class="slider1-tab">Maison moderne 2
                
            </li>
            <li class="slider1-tab">Maison moderne 3
                
            </li>
            <li class="slider1-tab">Maison moderne 4
                
            </li>
            <li class="slider1-tab">Maison moderne 5
                
            </li>
        </ul>
    </div>
    <div class="slider1-navigation">
    <button id="slide1-prev" class="material-symbols-outlined">
        arrow_left_alt
    </button>
    <button id="slide1-next" class="material-symbols-outlined">
        arrow_right_alt
    </button>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>
</section>
</html>



<?php include "footer.php" ?>