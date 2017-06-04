<?php 
    //***** Pour le password
    if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] ==  "password") {
        //***** Rappel des elements du formulaire
        echo $_POST['speudo'];
        echo $_POST['message'];
        echo $_POST['game'];
        echo $_POST['case'];
        echo $_POST['yesno'];
    }else{
        echo 'LOST';
    }
    

    
?>