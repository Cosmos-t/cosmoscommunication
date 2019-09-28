<?php
    $titre = 'COSMOS - Création';
    $metadescription = 'Vous êtes une très petite entreprise (TPE) ... et des collaborateurs souvent multitâches; Pas de temps à consacré à votre communication, à vos résaux sociaux ... Découvrer un panel de nos créations';
    include "header.php";
?>
<?php include "lightbox.php" ?>
<div id="creatitre">
    <h1 class="titre">CREATIONS</h1>
</div>
<div id="textgal">
    <p>
        <span class="orange">Lorem ipsum</span> dolor sit amet, <span class="orange">consectetur</span> adipiscing elit. Etiam at posuere dui, eu aliquam justo. Nam gravida metus tristique imperdiet vestibulum. Lorem ipsum dolor sit amet, <span class="orange">consectetur</span> adipiscing elit. Etiam at posuere dui, eu aliquam justo. Nam gravida metus tristique imperdiet vestibulum. Curabitur eu ullamcorper odio. Etiam finibus feugiat pharetra. In pulvinar blandit ligula, vel pellentesque odio facilisis sed. Praesent at accumsan nibh.         Lorem ipsum dolor sit amet, <span class="orange">consectetur</span> adipiscing elit. Etiam at posuere dui, eu aliquam justo. Nam gravida metus tristique imperdiet vestibulum. Curabitur eu ullamcorper odio. Etiam finibus feugiat pharetra. In pulvinar blandit ligula, vel pellentesque odio facilisis sed. Praesent at accumsan nibh.         Lorem ipsum dolor sit amet, <span class="orange">consectetur</span> adipiscing elit.
    </p>
</div>
<?php
        include "galerie.php"
?>
<div class="galerie">
    <div class="hoverContainer">
        <div class="sizecontener">
            <img src="img/galerie/cinedemillethumb.jpg" alt="Magazine ciné2000">
        </div>
        <div class="hoverTxt">
            <h2>CINE2000</h2>
            <span>Magazine CINE2000</span>
            <div class="lightbouton myLightbox" imghd="img/galerie/cinedemillehd.jpg" lighttxt="Numéro 1 du magazine CINE2000"><i class="far fa-plus-square"></i></div>
        </div>
    </div>
        <div class="hoverContainer">
        <div class="sizecontener">
            <img src="img/galerie/tacolocothumb.jpg" alt="Logo taco locaux">
        </div>
        <div class="hoverTxt">
            <h2>Taco Locaux</h2>
            <span>Logo réaliser pour Taco locaux</span>
            <div class="lightbouton myLightbox" imghd="img/galerie/tacolocohd.jpg" lighttxt="Logo réaliser pour Taco locaux"><i class="far fa-plus-square"></i></div>
        </div>
    </div>
        <div class="hoverContainer">
        <div class="sizecontener">
            <img src="img/galerie/burgerthumb.jpg" alt="Site restaurant burger">
        </div>
        <div class="hoverTxt">
            <h2>Site de Burger</h2>
            <span>Site réaliser pour le réstaurant Burger</span>
            <div class="lightbouton myLightbox" imghd="img/galerie/burgerhd.jpg" lighttxt="Site réaliser pour le réstaurant Burger"><i class="far fa-plus-square"></i></div>
        </div>
    </div>
        <div class="hoverContainer">
        <div class="sizecontener">
            <img src="img/galerie/maconnozethumb.jpg">
        </div>
        <div class="hoverTxt">
            <h2>Mascotte Gilles</h2>
            <span>Une de nos mascotte Gilles maçon 45ans</span>
            <div class="lightbouton myLightbox" imghd="img/galerie/maconnozehd.jpg" lighttxt="Dans le cadre de notre campagne de mascotte je vous présente Gilles 45 ans maçon et # lui aussi il communique" alt="Masscote gilles"><i class="far fa-plus-square"></i></div>
        </div>
    </div>
</div>
<div id="creaend"></div>
<?php
    include "footer.php"
?>