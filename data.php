<?php 
    //***** Pour le password
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] ==  "bob") {
        //***** 
        $monfichier = fopen('compte/' . $_POST['speudo']. '.txt', 'w');
        //***** Colle les elements du formulaire
        fputs($monfichier, $_POST['speudo']);
        fputs($monfichier, $_POST['message']);
        fputs($monfichier, $_POST['game']);
        fputs($monfichier, $_POST['case']);
        fputs($monfichier, $_POST['yesno']);
        fclose($monfichier);
        //***** Sinon message 'lost'
    }else{
        echo 'LOST';
    };
?>