<?php
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

    function ReadPortrait($portrait)
    {
        ?>
        <tr>
        <td> <?= $portrait['name']?> </td>
        <td> <?= $portrait['firstname'] ?> </td>
        <td> <img src="<?= $portrait['portrait'] ?>" alt="" width="100"/> </td>
        </tr>
        <?php
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css"/>
        <title> Php Partie 10 - TP 3 </title>
        
    </head>
    <body>

        <?php 
        include('menu.php');
        ?>

        <h1 class="text-center m-2"> <i class="far fa-file-code"></i> - TP 03 </h1>

        <div class="container">
            <table class="table table-dark table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Portrait</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    ReadPortrait($portrait1);
                    ReadPortrait($portrait2);
                    ReadPortrait($portrait3);
                    ReadPortrait($portrait4);
                    ?>
                </tbody>
            </table>
        </div>
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