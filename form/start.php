<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Start</title>
</head>
<body>
    <form action="data.php" method="POST">
        
        <input type="text" name ="speudo" placeholder="Speudo" class="bar">
        <input type="password" name="mdp" placeholder="Password" class="bar"/>
        <input type="number" name="age" placeholder="Age" class="bar"/>
        <textarea name="message" rows="5" cols="35" placeholder="Saisie du paragraphe" class="bar"></textarea>

        <select name="game" class="point">
            <option value=”” disabled selected>Choose a Game</option>
            <option value="OverWatch">OverWatch</option>
            <option value="LeagueOfLegend">LeagueOfLegend</option>
            <option value="Hearthstone">HearthStone</option>
            <option value="Diablo3">Diablo*RiP*</option>
        </select>
        
            <input type="checkbox" name="case" class="point"/><label for="case">Clavier/Souris</label>
            <input type="checkbox" name="case" class="point"/><label for="case">Manette</label>
            <input type="checkbox" name="case" class="point"/><label for="case">Gestuel</label>
            <input type="checkbox" name="case" class="point"/><label for="case">Tactil</label>
       
            <input type="radio" name="yesno" value="oui" id="oui" class="point"/><label for="oui">Oui</label>
            <input type="radio" name="yesno" value="non" id="non" class="point"/><label for="non">Non</label>
        <input type="password" name="mot_de_passe" placeholder="Password" class="bar"/>
        <input type="submit" name="btn" value="Submit" class="point"></input>

    </form>
    <?php ?>
</body>
</html>