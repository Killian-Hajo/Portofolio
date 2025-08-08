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
            background-color: #1d1d1d;
        }
        .navbar a{
            color: white;
        }
        
    </style>

<section class="contact-c">
<div class="container-c">
    <div class="form-box-c login">
        <form action="">
            <h1>Se connecter</h1>
            <div class="input-box">
                <input type="text" placeholder="Nom d'utilisateur"
                required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe"
                required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="forget-link">
                <a href="#">Tu as oublié ton mot de passe ?</a>
            </div>
            <button type="submit" class="btn-c">Se connecter</button>
            <p>ou connecte toi avec ces plateformes</p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-google' ></i></a>
                <a href="#"><i class='bx bxl-meta' ></i></a>
                <a href="#"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a>
            </div>
        </form>
    </div>

    
    <div class="form-box-c register">
        <form action="">
            <h1>Créer un compte</h1>
            <div class="input-box">
                <input type="text" placeholder="Nom d'utilisateur"
                required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Adresse mail"
                required>
                <i class='bx bxs-envelope' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe"
                required>
                <i class='bx bxs-lock-alt' ></i>
            </div>  
            <button type="submit" class="btn-c">S'enregistrer</button>
            <p>se connecter avec ces plateformes</p>
            <div class="social-icons">
                <a href="#"><i class='bx bxl-google' ></i></a>
                <a href="#"><i class='bx bxl-meta' ></i></a>
                <a href="#"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a>
            </div>
        </form>
    </div>
    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1>Hello, Sportif</h1>
            <p>Tu n'as pas de compte ?</p>
            <button class="btn-c register-btn">S'enregistrer</button>
        </div>
        <div class="toggle-panel toggle-right">
            <h1>De retour parmis nous !</h1>
            <p>Tu as déjà un compte ?</p>
            <button class="btn-c login-btn">Se connecter</button>
        </div>
    </div>
</div>
<script src="login.js"></script>

</section>

<?php include "footer.php" ?>