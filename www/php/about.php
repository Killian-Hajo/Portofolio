<?php include "head.php" ?>
<?php include "nav.php" ?>
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

<section class="about-us">
            <div class = "image-us">
                <!-- image here -->
            </div>

            <div class = "content-us">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p>Quand le coaching rencontre le code : une alliance gagnante

                    D'un côté, un coach passionné, expert en transformation et en performance.
                    De l'autre, un athlète déterminé, aussi à l'aise sur le terrain qu'avec le code. Ensemble,
                    ils ont uni leurs forces pour concevoir leur premier site web, alliant expertise humaine et maîtrise technologique.
                    Un projet né d'une vision commune : repousser les limites, en ligne comme dans la vie.</p>

                <ul class = "links-us">
                    <li><a href = "#">Parcours</a></li>

                    <div class = "vertical-line"></div>

                    <li><a href = "#">Objectifs</a></li>

                    <div class = "vertical-line"></div>
                    
                    <li><a href = "#">Contact</a></li>
                </ul>

                <ul class = "icons-us">
                    <li>
                        <i class='bx bxl-instagram'></i>
                    </li>
                    <li>
                        <i class='bx bxl-facebook' ></i>
                    </li>
                    <li>
                        <i class='bx bxl-twitter'></i>
                    </li>
                    <li>
                        <i class='bx bxl-tiktok' ></i>
                    </li>
                </ul>
            </div>
        </section>

<?php include "footer.php" ?>