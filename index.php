 
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css"/>
        <title> Php Partie 10 - TP 1 </title>
        
    </head>
    <body>

        <?php 
        include('menu.php');
        ?>

        <h1 class="text-center m-2"> <i class="far fa-file-code"></i> - PHP Part 10 - Les TP </h1>

        <?php
            /* foreach($_POST as $truc)
            {
                echo  '<br/>' . $truc;
            } */
        ?>

        <?php
        // Ex 01

            if ((isset($_POST['lastname']) === false)
            || (isset($_POST['firstname']) === false)
            || (isset($_POST['dob']) === false)
            || (isset($_POST['countryOfBirth']) === false)
            || (isset($_POST['country']) === false)
            || (isset($_POST['address']) === false)
            || (isset($_POST['mail']) === false)
            || (isset($_POST['phone']) === false)
            || (isset($_POST['degree']) === false)
            || (isset($_POST['PENumber']) === false)
            )
            {
        ?>   
        <form method="POST" action="index.php">
            <div class="container col-md-5">
                <fieldset>
                <legend>Identité</legend>

                <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="Abitbol" required>
                </div>

                <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="Georges" required>
                </div>

                <div class="form-group">
                <label for="dob">Date de Naissance</label>
                <input type="date" class="form-control" name="dob" id="dob" value="2020-10-31" required>
                </div>

                <div class="form-group">
                <label for="countryOfBirth">Pays de Naissance</label>
                <input type="text" class="form-control" name="countryOfBirth" id="countryOfBirth" value="France" required>
                </div>

                <div class="form-group">
                <label for="country">Nationalité</label>
                <input type="text" class="form-control" name="country" id="country" value="Française" required>
                </div>

                <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address" id="address" value="4 Rue Kisenlsapin, 76000 Rouen" required>
                </div>

                <div class="form-group">
                <label for="mail">e-Mail</label>
                <input type="email" class="form-control" name="mail" id="mail" value="lovjohnny@laposte.net" required>
                </div>

                <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" class="form-control" name="phone" id="phone" value="0123456789" required>
                </div>

                <div class="form-group">
                <label for="degree">Diplôme</label>
                <select name="degree" id="degree" class="form-control">
                    <option value="aucun">Aucun</option>
                    <option value="bac">Bac</option>
                    <option value="bacPlus2" selected>Bac+2</option>
                    <option value="bacPlus3">Bac+3 ou supérieur</option>
                </select>
                
                </div>

                <div class="form-group">
                <label for="PENumber">Numéro pôle emploi</label>
                <input type="text" class="form-control" name="PENumber" id="PENumber" value="018765163A" required>
                </div>

                <div class="form-group">
                <label for="badgeNumber">Nombre de badge</label>
                <input type="number" class="form-control" name="badgeNumber" id="badgeNumber" value="16" >
                </div>

                <div class="form-group">
                <label for="codecademyLinks">Liens codecademy</label>
                <input type="url" class="form-control" name="codecademyLinks" id="codecademyLinks" value="https://www.codecademy.com/" >
                </div>
                </fieldset>
                
                <fieldset>
                <legend> Questions </legend>

                <div class="form-group">
                <label for="questionHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                <textarea class="form-control" name="questionHero" id="questionHero" rows="5" > Albator, parce que c'est un pirate de l'espace </textarea>
                </div>

                <div class="form-group">
                <label for="questionHack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <textarea class="form-control" name="questionHack" id="questionHack" rows="5" > J'ai réparé mon grille-pain ! </textarea>
                </div>
                
                <div class="form-group">
                <label for="questionExp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <textarea class="form-control" name="questionExp" id="questionExp" rows="5" > je jou à calof duti tmtc </textarea>
                </div>

                </fieldset>

                <button class="btn btn-outline-light btn-lg" type="submit" name="submit">Envoyer 
                <i class="fas fa-paper-plane"> </i>
                </button>
            </div>
        </form>
        <?php
        }
        else {
        ?>
        <div class="container col-md-5">
            <h5> Vous êtes : </h5>
            <p> <?= htmlspecialchars($_POST['firstname']) .' '. htmlspecialchars($_POST['lastname'])?> </p>
            <h5> Vous êtes né(e) le :</h5>
            <p> <?= htmlspecialchars($_POST['dob'])?> </p>
            <h5> Pays de naissance : </h5>
            <p> <?= htmlspecialchars($_POST['countryOfBirth'])?> </p>
            <h5> Nationalité : </h5>
            <p> <?= htmlspecialchars($_POST['country'])?> </p>
            <h5> Adresse : </h5>
            <p> <?= htmlspecialchars($_POST['address'])?> </p>
            <h5> e-mail : </h5>
            <p> <?= htmlspecialchars($_POST['mail'])?> </p>
            <h5> Téléphone : </h5>
            <p> <?= htmlspecialchars($_POST['phone'])?> </p>
            <h5> Diplome le plus élevé :  </h5>
            <p> <?= htmlspecialchars($_POST['degree'])?> </p>
            <h5> Numéro Pole Emploi : </h5>
            <p> <?= htmlspecialchars($_POST['PENumber'])?> </p>
            <h5> Nombre de badge : </h5>
            <p> <?= htmlspecialchars($_POST['badgeNumber'])?> </p>
            <h5> Liens Codecademy : </h5>
            <p> <?= htmlspecialchars($_POST['codecademyLinks'])?> </p>
            <br />
            <h5> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? </h5>
            <p> <?= htmlspecialchars($_POST['questionHero'])?> </p>
            <h5>  Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) </h5>
            <p> <?= htmlspecialchars($_POST['questionHack'])?> </p>
            <h5> Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </h5>
            <p> <?= htmlspecialchars($_POST['questionExp'])?> </p>
        </div>
        <?php
        }
        ?>   

        <br/>
        <br/>
        <br/>


            <!-- jQuery -->
            <script
                src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
                crossorigin="anonymous">
            </script>
            <!-- Bootstrap -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- FontAwesome -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js" integrity="sha256-xzrHBImM2jn9oDLORlHS1/0ekn1VyypEkV1ALvUx8lU=" crossorigin="anonymous"></script>
    </body>
</html>