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
        <a href="index.php">Retour</a>
    </div>
     
    <?php 
    //***** Pour le password
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] ==  "bob") {
        //***** On chope les elments du formulaire
        $user = new class{};
        $user->oldname = $_POST['oldname'];
        $user->speudo = $_POST['speudo'];
        $user->mdp = $_POST['mpd'];
        $user->message = $_POST['message'];
        $user->game = $_POST['game'];
        $user->case = [];
        $user->yesno = $_POST['yesno'];
        $user->age = $_POST['age'];

        //***** Supp le fichier selectionner
        if(is_file('compte/'. $user->oldname. '.php')){
            unlink('compte/' . $user->oldname. '.php');
        }
        //***** Creer un fichier 'txt' avec speudo comme nom et dans une variable
        $monfichier = fopen('compte/' . $_POST['speudo']. '.php', 'w');
        //***** Colle les elements du formulaire (copi/colle le formulaire d'origine 
        //***** avec les variable de recu du POST)
        fputs($monfichier, '');
        
        //***** On referme le fichier apres son utilisation
        fclose($monfichier);
    //***** Sinon password mauvais/pas rentrer message 'lost'
    }else{
    
    };
?>

</body>
</html>