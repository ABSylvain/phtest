<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <?php 
        if($folder = opendir('./compte')){
            while(false !== ($fichier = readdir($folder))){
                if($fichier != '.' && $fichier != '..'&& $fichier != '.DS_Store' && $fichier  != 'index.php'){
                        echo '<p><a href="./compte/' . $fichier . '">' . $fichier . '</a></p>';  
                                                                                    } 
                                                            } 
                                            closedir($folder);
                                            }else
                                                echo 'Le dossier n\' a pas pu être ouvert';
     ?>
</body>
</html>