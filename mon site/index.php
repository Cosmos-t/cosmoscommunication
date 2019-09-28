<?php
    $titre = 'COSMOS - Accueil';
    $metadescription = 'Vous êtes une très petite entreprise (TPE) ... et des collaborateurs souvent multitâches; Pas de temps à consacré à votre communication, à vos résaux sociaux ... Venez découvrir notre concept et nos propositions';
    include "header.php"
?>
<?php include "lightbox.php" ?>
        <div class="screen">
            <div id="accueilImg">
                <div id="bandeaccueil">
                    <div id="bloctitre">
                        <h1>Être <span class="orange">vu</span><br>et re<span class="orange">connu</span></h1>
                        <h2><span class="orange"># Com'</span> le nez au milieu de la figure</h2>
                    </div>
                    <div id="accroche">
                        <h3>Solutions pour les TPE / PME</h3>
                        <p>Des besoins en <span class="boldorange">communication</span> ? Cosmos vous propose des solutions <span class="boldorange">clef en main</span> adaptées à <span class="boldorange">vos besoins</span>. Une <span class="boldorange">agence spécialisée</span> dans les réalisations de <span class="boldorange">site web</span>, la création <span class="boldorange">d'identitées graphiques</span> et de <span class="boldorange">supports de communications</span>, une réponse adaptée aux besoins de nos clients.</p>
                        <div id="boutonalign"><a href="missions.php" class="boutonplus">En savoir + </a></div>
                    </div>
                </div>
                <a href="#ancre1" class="accueilcross"><i class="fas fa-chevron-circle-down cross" id="firstanimcross"></i></a>
            </div>
        </div>
        <div id="animpan"><h2 id="intro">COSMOS</h2></div>
        <div class="crosspan" id="crosspan1">
            <section id="iconworking">
                <article>
                    <a href="solutions.php#sol1" class="icow">
                        <i class="fas fa-desktop iconworking"></i>
                        <h2>Site internet</h2>
                    </a>
                </article>
                <article>
                    <i class="fas fa-shopping-cart iconworking"></i>
                    <h2>Site marchand</h2>
                </article>
                <article>
                    <i class="fas fa-chart-line iconworking"></i>
                    <h2>Référencement</h2>
                </article>
                <article>
                    <i class="fas fa-project-diagram iconworking"></i>
                    <h2>Community<br>management</h2>
                </article>
                <article>
                    <i class="fas fa-user-edit iconworking"></i>
                    <h2>Identité visuelle</h2>
                </article>
                <div id="ancre1"></div>
            </section>
            <h2>Cosmos est l'agence web des TPE / PME</h2>
            <p>
                Une agence web digitale qui crée et réalise des <span class="boldorange">sites internet</span> design de grande qualité, des sites <span class="boldorange">e-commerce</span> performants, et des solutions de gestion d'entreprise efficaces. Avec une plate-forme complète de services digitaux pour accompagner les entreprises. Née du constat que les <span class="boldorange">TPE-PME</span>, artisans et entrepreneurs avaient besoin d'une proposition de valeur experte et proche de leurs besoins. Avec cette volonté d'apporter concrètement de la proximité, des outils pérennes et reconnus, et de la forte valeur ajoutée à ses clients.
            </p>
        </div>
        <div class="crosspan" id="crosspan2">
            <h2>Un accompagnement</h2>
            <p>COSMOS vous accompagne dans toutes les étapes de votre projet, de la création de la charte graphique au dévolepoment de votre site web : logo, identitée visuelle, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ipsum massa, fringilla ac metus non, congue fringilla orci.</p>
            <h2 id="nscrea">NOS CREATIONS :</h2>
        </div>
        <div id="galdiv">
            <?php
                include "galerie.php"
            ?>
             <div id="missionplusalign">
                <a href="creation.php" class="boutonplus" id="missionplus">En voir + </a>
            </div>
        </div>
        <section id="works"> 
            <article id="CV">
                <h2>BIOGRAPHIE</h2>
                <div id="bioBlock">
                    <div>
                        <img src="img/headcv.jpg" id="headpic">
                    </div>
                    <div id="bio">
                        <p>
                            Autodidacte acharné, passionné de graphisme et de culture visuelle, mon aventure dans le dessin a commencée à la fin des années 2000, dans différents fanzines papiers. Diffusés lors d'événements tels que la "Japan expo" j'ai gagné grâce à eux le lauréat de plusieurs prix d'illustration. La consécration est arrivée en 2014, avec une publication éditoriale chez PHYSALIS, pour ma bande-dessinée "waow". Souhaitant élargir mon champ de compétences dans le domaine du web, j'ai intégré cette année la WAB (l'école du numérique de Bergerac).
                        </p>
                    </div>
                </div>
            </article>
        </section>
        <section id="competences">
            <article>
                <h3>COMPETENCES</h3>
                <div id="comps">
                    <div class="compround"><img src="img/competences/photoshoplogo.png"></div>
                    <div class="compround"><img src="img/competences/ailogo.png"></div>
                    <div class="compround"><img src="img/competences/indesignlogo.png"></div>
                    <div class="compround"><img src="img/competences/html5logo.png"></div>
                    <div class="compround"><img src="img/competences/css3logo.png"></div>
                </div>
            </article>
        </section>
<?php
    include "footer.php"
?>