<?php
    $message="";
    if(isset($_POST["valider"])){
        $message="Nom du fichier: <b>".$_FILES["monfichier"]["name"]."</b><br>";
        $message="Nom temporaire du fichier: <b>".$_FILES["monfichier"]["tmp_name"]."</b><br>";
        $message="Type du fichier: <b>".$_FILES["monfichier"]["name"]."</b><br>";
        $message="Taille du fichier: <b>".$_FILES["monfichier"]["size"]." octets</b><br>";
        if(move_uploaded_file($_FILES["monfichier"]["tmp_name"],"uploads/".$_FILES["monfichier"]["name"])){
            $message.="<li>Fichier chargé avec succès</li>";
        }
        else{
            $message.="<li>Erreur de chargement</li>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tel.css">
    <title>telechargement</title>
</head>
<body>
    <h1>HEART RESCUE</h1>
    <p>The solution deployed here is to enable the rapid detection of 8 majors groups of heart failure :</p>
    <ul >
        <div>
            <li>Rythms</li>
            <li>Electric axis of the heart</li>
            <li>Conduction abnormalitie</li>
            <li>Extrasystolie</li>
            <li>Hypertrophie</li>
            <li>Cardiac pacing</li>
            <li>Ischemia</li>
            <li>Non-specific repolarisation abnormalies</li>
        </div> 
    </ul>
    <form name="fo" method="post" action="" enctype="multipart/form-data">
        <div class="gauche">
            <div class="text">
                <h1>Loaging...</h1>
            </div>
            <div class="loading">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="droite ">
            <label for="sex">Gender</label>
            <select name="Gender" id="sex">
            <option name="male">male</option>
            <option name="Feminin">Femelle</option>

            </select>
        </div>
        <div class="messagePhp">
            <?php echo $message ?>
        </div>
        <div class="bas">
            <p>click here  <input type="file" name="monfichier" > <input type="submit" name="valider" value="Charger"> for reseach your clip </p>
        </div>
    </form>
</body>
</html>