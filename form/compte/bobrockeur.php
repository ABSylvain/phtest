//***** On creer un lien pour le CSS
                            <link rel="stylesheet" type="text/css" href="../style.css" />
                            //***** Changer le chemin pour sortir du dossier 
                            <form action="../data.php" method="POST">
                                    <input type="text" name ="speudo" placeholder="bobrockeur" class="bar">
                                    <input type="password" name="mot_de_passe" placeholder="Password" class="bar"/>
                                    <input type="number" name="age" placeholder="34" class="bar"/>
                                    <textarea name="message" rows="5" cols="35" placeholder="djeiozdqksdmc" class="bar"></textarea>

                                    <select name="game" class="point">
                                        <option value=”” disabled selected>LeagueOfLegend</option>
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

                                    <input type="submit" name="btn" value="Submit" class="point"></input>
                                    <?php 
                                        if(isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] ==  "bob"){
                                                $monfichier = fopen('compte/' . $_POST['speudo']. '.php', 'w');
                                                
                                            fclose($monfichier);
                                            }else{
                                                echo 'LOST';
                                                };
                                    ?>
                                    