<?php 
    //***** Pour le password
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] ==  "bob") {
        //***** On chope les elments du formulaire
        $speudo = $_POST['speudo'];
        $message = $_POST['message'];
        $game = $_POST['game'];
        $case = $_POST['case'];
        $yesno = $_POST['yesno'];
        //***** Creer un fichier 'txt' avec speudo comme nom et dans une variable
        $monfichier = fopen('compte/' . $_POST['speudo']. '.txt', 'w');
        //***** Colle les elements du formulaire
        fputs($monfichier, $speudo);
        fputs($monfichier, $message);
        fputs($monfichier, $game);
        fputs($monfichier, $case);
        fputs($monfichier, $yesno);
        //***** on tente de creer un objet
        //***** On referme le ficheier apres son utilisation
        fclose($monfichier);
        //***** Sinon message 'lost'
    }else{
        echo 'LOST';
    };
?>