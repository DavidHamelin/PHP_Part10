<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css"/>
        <title> Php Partie 10 - TP 2 </title>
        
    </head>
    <body>

        <?php 
        include('menu.php');
        ?>

        <h1 class="text-center m-2"> <i class="far fa-file-code"></i> - TP 02 </h1>
   
        <form method="POST" action="tp02.php">
            <div class="container col-md-5">
                <fieldset>
                <legend>Identité</legend>

                <div class="form-group">
                <label for="gender">Civilité</label>
                <select name="gender" id="gender" class="form-control" >
                <?php
                switch($_POST['gender'])
                {
                    case 'Mme': 
                        ?>
                        <option value="Mme" selected>Mme</option>
                        <option value="M.">M.</option>
                        <?php
                    break;
                    case 'M.':
                        ?>
                        <option value="Mme">Mme</option>
                        <option value="M." selected>M.</option>
                        <?php
                    break;
                    default:
                        ?>
                        <option value="Mme">Mme</option>
                        <option value="M.">M.</option>
                        <?php
                }   
                ?>
                </select>
                </div>  

                <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $_POST['lastname'] ?>" required>
                </div>

                <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $_POST['firstname']?>" required>
                </div>


                <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age" id="age" value="<?= $_POST['age'] ?>" required>
                </div>

                <div class="form-group">
                <label for="society">Société</label>
                <input type="text" class="form-control" name="society" id="society" value="<?= $_POST['society'] ?>" required>
                </div>            

                <button class="btn btn-outline-light btn-lg" type="submit" name="action">Envoyer 
                <i class="fas fa-paper-plane"> </i>
                </button>
            </div>
        </form>
        <?php
            if ((isset($_POST['lastname']))
            || (isset($_POST['firstname']))
            || (isset($_POST['gender']))
            || (isset($_POST['age']))
            || (isset($_POST['society']))
            )
            {
        ?>
        <div class="container col-md-5">
        <br/>
            <h5> Vous êtes : </h5>
            <p> <?= htmlspecialchars($_POST['gender']) .' '. htmlspecialchars($_POST['firstname']) .' '. htmlspecialchars($_POST['lastname'])?> </p>
            <h5> Vous avez :</h5>
            <p> <?= htmlspecialchars($_POST['age'])?> ans</p>
            <h5> Votre Société est : </h5>
            <p> <?= htmlspecialchars($_POST['society'])?> </p>
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