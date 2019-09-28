<?php
function email($mail, $sujet, $message){
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)){
            $passage_ligne = "\r\n";
        }else{
            $passage_ligne = "\n";
        }
        $message = utf8_decode($message);
        $message_txt = strip_tags($message);
        $message_html = "<html>
                            <body>
                                <h2>$sujet</h2>
                                ".str_replace("\n","<br>",$message)."
                                </body>
                            </html>";
        $boundary = "-----=".md5(rand());
        $header = "From: \"Cosmos.NET\"<murlocagogo@gmail.com>".$passage_ligne;
        $header.= "Reply-to: \"Cosmos.NET\" <murlocagogo@gmail.com>".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"" . $passage_ligne;
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        mail($mail,$sujet,$message,$header);
    }
            $societe = '';
            $nom = '';
            $prenom ='';
            $email = '';
            $tel = '';
            $compte = '';
            $message = '';
            $condition = '';
            $affichage = '';

            $nomError = '';
            $prenomError = '';

            if (isset($_POST["formulaire"])){
                $societe = strip_tags($_POST['societe']);
                if (empty(strip_tags($_POST["nom"]))){
                        $nomError = "Ce champ est obligatoire";
                    } else{
                        $nom = ($_POST["nom"]);
                    }
//                $prenom = strip_tags($_POST['prenom']);
                if (empty(strip_tags($_POST["prenom"]))){
                        $prenomError = "Ce champ est obligatoire";
                    } else{
                        $prenom = ($_POST["prenom"]);
                    }
                $email = strip_tags($_POST['email']);
                $tel = strip_tags($_POST['tel']);
                $compte = strip_tags($_POST['compte']);
                $message = strip_tags($_POST['message']);
                if (isset($_POST["condition"])){
                    $condition = strip_tags($_POST['condition']);
                }else{
                    $condition = "";
                }
                
                if (($societe != "") && ($nom != "") && ($prenom != "") && ($compte != "") && ($message != "") && ($condition != "") && ($email != '') && ($tel != '')){
                    $affichage = "Merci d\'avoir remplis tous les champs. Nous vous recontacterons prochainement <br>";
                    $affichage .= 'votre Société: '.$societe.'<\br>';
                    $affichage .= 'votre nom: '.$nom.'\<br>';   
                    $affichage .= 'votre prenom: '.$prenom.'\<br>';   
                    $affichage .= 'votre téléphone: '.$tel.'\<br>';   
                    $affichage .= 'votre compte: '.$compte.'<br>';  
                    $affichage .= 'votre message est: '.$message.'<br>';
                    $sujet = "votre demande de contact sur monsite.com";
                    email($email, $sujet, $message);
                    email("murlocagogo@gmail.com", $sujet, $affichage);
                    $envoi = "1";
                    $nom = '';
                    $compte = '';
                    $message = '';
                    $condition = '';
                }else{
                    $affichage = 'tous les champs ne sont pas remplis';
                }
            }
    $titre = 'COSMOS - Contact';
    $metadescription = 'Vous êtes une très petite entreprise (TPE) ... et des collaborateurs souvent multitâches; Pas de temps à consacré à votre communication, à vos résaux sociaux ... Prener contact avec nous pour une demande de devis gratuit !';
    include "header.php"
?>
<?php if(isset($envoi)){ ?>
<script>document.getElementById("bod").classList.toggle("show");</script>
<div id="containercontactpage">
                <div id="mailenvoyer">
                    <div id="closeContact">
                        <div></div>
                        <div></div>
                    </div>
                    <div id="mailenvtxt">
                        <h2 class="titre">Votre mail à été envoyé</h2>
                        <div>
                            <p>Vous allez reçevoir une réponse<br>dans les plus brefs délais</p>
                            <i class="far fa-smile-wink"></i>
                        </div>
                    </div>
                </div>
    </div>
<?php } ?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.7461554320757!2d0.4640511157516921!3d44.84710268242676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aadaa11d36ffe7%3A0x7c4f63bb57ec988b!2s1+Rue+Maurice+Ravel%2C+24100+Bergerac!5e0!3m2!1sfr!2sfr!4v1556269532880!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen id="google"></iframe>
    <div id="contactcontenue">
        <div id="contactleft">
            <h1 class="titre">CONTACT</h1>
            <div id="contactinfo">
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <i class="fas fa-envelope"></i>
                    <i class="fas fa-phone"></i>
                </div>
                <div>
                    <p> 1 rue Maurice Ravel <br>24100 BERGERAC</p>
                    <a href="mailto:teomercier@yahoo.fr">teomercier@yahoo.fr</a>  
                    <p>+33 06 03 83 96 74</p>
                </div>
            </div>
        </div>
        <div id="formulair">
            <h2 class="titre">DEMANDE</h2>
            <form action="" method="POST">
                <input type="hidden" name="formulaire" value="1">
                <div>
                    <label for="Idcompte">Objet:<span class="obligatoire">*</span></label>
                    <select name="compte" id="compte">
                        <option></option>
                        <option value="site"
                            <?php
                                if ($compte == "site"){
                                    echo "selected";
                                }
                            ?>
                        >Site internet</option>
                        <option value="community"
                            <?php
                                if ($compte == "community"){
                                    echo "selected";
                                }
                            ?>
                        >Community management</option>
                        <option value="graphisme"
                            <?php
                                if ($compte == "graphisme"){
                                    echo "selected";
                                }
                            ?>
                        >Graphisme</option>
                        <option value="seo"
                            <?php
                                if ($compte == "seo"){
                                    echo "selected";
                                }
                            ?>
                        >Référencement</option>
                    </select>
                </div>
                <div>
                    <label for="societe">Société:<span class="obligatoire">*</span></label>
                    <input type="text" name="societe" id="societe" class="active" value="<?php echo $societe; ?>">
                </div>
                <div>
                    <label for="nom">Nom:<span class="obligatoire">*</span></label>
                    <span class="errormess"><?php echo $nomError ?></span>
                    <input type="text" name="nom" id="nom" class="active" value="<?php echo $nom; ?>">
                </div>
                <div>
                    <label for="prenom">Prénom:<span class="obligatoire">*</span></label>
                    <span class="errormess"><?php echo $prenomError ?></span>
                    <input type="text" name="prenom" id="prenom" class="active" value="<?php echo $prenom; ?>">
                </div>
                <div>
                    <label for="email">Mail:<span class="obligatoire">*</span></label>
                    <input type="email" name="email" id="email" class="active" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label for="tel">Téléphone:<span class="obligatoire">*</span></label>
                    <input type="text" name="tel" id="tel" class="active" value="<?php echo $tel; ?>">
                </div>
                <div id="mess">
                    <label for="message" id="mes">Votre projet: <span class="obligatoire">*</span></label>
                    <textarea name="message" id="message" rows="5" cols="50" class="active"><?php echo $message; ?></textarea>
                </div>
                <div id="conditionaccept">
                    <input type="checkbox" name="condition" id="condition" 
                    <?php 
                           if ($condition != ''){
                               echo 'checked';
                           }
                    ?>>
                    <label>J'accepte les condition générale</label>
                </div>
                <p id="politiqup">
                    Les données collectées par ce formulaire ne seront utilisées que pour traiter votre demande. En savoir plus sur notre  <a href="Politique.php">politique de confidentialité.</a>
                </p>
                <div id="validation"><input type="submit" value="valider"><i class="fas fa-chevron-right"></i></div>
            </form>
        </div>
    </div>
    <div>
        <p id="textcontactref">
            N'hésitez pas à nous <span class="orange">contactez</span> pour toutes demandes, nous prendrons plaisir à y répondre dans les plus brefs délais. Nous vous remercions d'avoir choisis notre agence pour votre projet.<span class="orange">Lorem ipsum</span> dolor sit amet, <span class="orange">consectetur</span> adipiscing elit. Etiam at posuere dui, eu aliquam justo. Nam gravida metus tristique imperdiet vestibulum. Lorem ipsum dolor sit amet, <span class="orange">consectetur</span> adipiscing elit. Etiam at posuere dui, eu aliquam justo. Nam gravida metus tristique imperdiet vestibulum. Curabitur eu ullamcorper odio. Etiam finibus feugiat pharetra. In pulvinar blandit ligula, vel pellentesque odio facilisis sed. Praesent at accumsan nibh.
        </p>
    </div>

<?php
    include "footer.php"
?>