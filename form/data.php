<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="op">
        <h3>Votre compte a bien été creer/modifier.</h3>
        <h5>Cliquer sur ce bouton pour retourner a la liste.</h5>
        <?php echo $value ?>
        <a href="index.php">Retour</a>
    </div>
     
    <?php 
    //***** Pour le password
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] ==  "bob") {
        //***** On chope les elments du formulaire
        $speudo = $_POST['speudo'];
        $message = $_POST['message'];
        $game = $_POST['game'];
        $case = [];
        foreach ($_POST['case'] as $value)
            {
              $value = $case;
            }
        $yesno = $_POST['yesno'];
        $age = $_POST['age'];
        //***** Creer un fichier 'txt' avec speudo comme nom et dans une variable
        $monfichier = fopen('compte/' . $_POST['speudo']. '.php', 'w');
        //***** Colle les elements du formulaire (copi/colle le formulaire d'origine 
        //***** avec les variable de recu du POST)
        fputs($monfichier, '<link rel="stylesheet" type="text/css" href="../style.css" /> 
                            <form action="../data.php" method="POST">
                                    <input type="text" name ="speudo" placeholder="'.$speudo.'" class="bar">
                                    <input type="password" name="mot_de_passe" placeholder="Password" class="bar"/>
                                    <input type="number" name="age" placeholder="'.$age.'" class="bar"/>
                                    <textarea name="message" rows="5" cols="35" placeholder="'.$message.'" class="bar"></textarea>

                                    <select name="game" class="point">
                                        <option value=”” disabled selected>'.$game.'</option>
                                        <option value="OverWatch">OverWatch</option>
                                        <option value="LeagueOfLegend">LeagueOfLegend</option>
                                        <option value="Hearthstone">HearthStone</option>
                                        <option value="Diablo3">Diablo*RiP*</option>
                                    </select>
                                    
                                    <p id="choix">L\' ancien choix : '.$case.'</p>
                                    <input type="checkbox" name="case" class="point"/><label for="case">Clavier/Souris</label>
                                    <input type="checkbox" name="case" class="point"/><label for="case">Manette</label>
                                    <input type="checkbox" name="case" class="point"/><label for="case">Gestuel</label>
                                    <input type="checkbox" name="case" class="point"/><label for="case">Tactil</label>
       
                                    <input type="radio" name="yesno" value="oui" id="oui" class="point"/><label for="oui">Oui</label>
                                    <input type="radio" name="yesno" value="non" id="non" class="point"/><label for="non">Non</label>

                                    <input type="submit" name="btn" value="Submit" class="point"></input>
                                    <?php 
                                        if(isset($_POST[\'mot_de_passe\']) && $_POST[\'mot_de_passe\'] ==  "bob"){
                                                $monfichier = fopen(\'compte/\' . $_POST[\'speudo\']. \'.php\', \'w\');
                                                
                                            fclose($monfichier);
                                            }else{
                                                echo \'LOST\';
                                                };
                                    ?>
                                    ');
        
        //***** On referme le fichier apres son utilisation
        fclose($monfichier);
    //***** Sinon password mauvais/pas rentrer message 'lost'
    }else{
    
    };
?>
<div id="op">
        <h3>Votre compte a bien été creer/modifier.</h3>
        <h5>Cliquer sur ce bouton pour retourner a la liste.</h5>
        <?php echo $case ?>
        <a href="index.php">Retour</a>
    </div>
</body>
</html>