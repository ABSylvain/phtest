<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <?php 
        //***** On ouvre le dossier dans une variable pour le rappeler
        if($folder = opendir('./compte')){
            //***** On parcours les fichier du dossier, chaque iteration iras dans $fichier
            while(false !== ($fichier = readdir($folder))){
                //***** A chaque fichier on verifi que sa ne soi pas un fichier indesirable 
                if($fichier != '.' && $fichier != '..'&& $fichier != '.DS_Store' && $fichier  != 'index.php'){
                        //***** On place le nom du ficier dans un lien qui menne au fichier en question
                        echo '<p><a href="./compte/' . $fichier . '">' . $fichier . '</a></p>';  
                                                                                    } 
                                                            }
                            //***** On ferme le dossier
                            closedir($folder);
            //***** si opendir n'as pas marcher
            }else
                echo 'Le dossier n\' a pas pu être ouvert';
                
     ?>
</body>
</html>