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





<section class="about">

<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Nous Contacter</h2>
				<input type="text" class="field" placeholder="Prénom">
				<input type="text" class="field" placeholder="Adresse Mail">
				<input type="text" class="field" placeholder="Téléphone">
				<textarea placeholder="Message" class="field"></textarea>
				<button class="btn-c">Envoyer</button>
			</div>
		</div>
	</div>
    
</section>

<?php include "footer.php" ?>
