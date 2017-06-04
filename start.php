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
        
        <input type="text" name ="speudo" placeholder="Speudo">
        <input type="password" name="mot_de_passe" placeholder="Password" />
        <input type="number" name="age" placeholder="Age" />
        <textarea name="message" rows="5" cols="35" placeholder="Saisie du paragraphe"></textarea>

        <select name="game">
            <option value=”” disabled selected>Choose a Game</option>
            <option value="OverWatch">OverWatch</option>
            <option value="LeagueOfLegend">LeagueOfLegend</option>
            <option value="Hearthstone">HearthStone</option>
            <option value="Diablo3">Diablo*RiP*</option>
        </select>
        
            <input type="checkbox" name="case" /><label for="case">Clavier/Souris</label>
            <input type="checkbox" name="case" /><label for="case">Manette</label>
            <input type="checkbox" name="case" /><label for="case">Gestuel</label>
            <input type="checkbox" name="case" /><label for="case">Tactil</label>
       
            <input type="radio" name="yesno" value="oui" id="oui" checked="checked" /><label for="oui">Oui</label>
            <input type="radio" name="yesno" value="non" id="non" /><label for="non">Non</label>

        <input type="submit" name="btn" value="Submit"></input>

    </form>
    <?php ?>
</body>
</html>