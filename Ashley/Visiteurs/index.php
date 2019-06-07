<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title> Ashley Witney KONATE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <source src="main.js" type="">
    <link rel="shortcut icon" type="image/x-icon" href="img/0.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <nav>
        <ul>
            <center>
                <li><a href="#">Acceuil</a></li>
                <li><a href="#apropos">A Propos</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#projet">Projets</a></li>
                <li><a href="#formu">Contact</a></li>
            </center>
        </ul>
    </nav>
    <div class="ash">

        <p>
            <strong><em> Ashley Witney KONATE </em></strong> <br>
            Etudiante en bachelor 1 Ynov informatique .
        </p>
        <button class="themeButton">Changer de thème</button>

    </div>

</header>


<main>
    <center>
        <!-- Pour le bloc A propos -->
        <div id="debut">
            <h2 id="apropos"> A propos </h2>


            <img src="img/Ashley.jpg" width="300"  class="imga" class="photo">


            <?php
            //creer connexion To the BD
            $dsn = 'mysql:dbname=admin;host=127.0.0.1';
            $user = 'root';
            $password = '';

            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }

            ?>
            <?php
            $stmt = $dbh->query('SELECT * FROM apropos');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>

            <p class="text1">
                <?= $row['description']; ?>
            </p>
            <?php
            endwhile;
            ?>

            <button class="slideButton">Contact</button>

            <div class="fromLeft">
                <p>
                    Ashley Witney KONATE <br/><br/><br/>
                    +33 7 68 10 76 31<br/><br/><br/>
                    witneykonate@gmail.com<br/><br/><br/>


                </p>
            </div>

        </div>





        <!-- Pour le bloc formation et compétences -->
        <div id="milieu">




            <div class="sous1">
                <h1 id="portfolio">Portfolio</h1>
                <h2 id="formation"> Formations </h2>

                <?php
                $stmt = $dbh->query('SELECT * FROM formation');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                    ?>

                    <p>
                        <?= $row['formation1']; ?>
                    </p>
                    <p>
                        <?= $row['formation2']; ?>
                    </p>
                    <p>
                        <?= $row['formation3']; ?>
                    </p>
                <?php
                endwhile;
                ?>



            </div>

            <div class="sous2">

                <h2> Expérience professionnelle</h2>
                <?php
                $stmt = $dbh->query('SELECT * FROM experience');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                    ?>

                    <p>
                        <?= $row['experience1']; ?>
                    </p>
                    <p>
                        <?= $row['experience2']; ?>
                    </p>
                    <p>
                        <?= $row['experience3']; ?>
                    </p>
                <?php
                endwhile;
                ?>
            </div>




            <div class="sous3">
                <h2> Compétences Clées </h2>

                <?php
                $stmt = $dbh->query('SELECT * FROM competenceclef');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                    ?>

                    <p>
                        <?= $row['competence1']; ?>
                    </p>
                    <p>
                        <?= $row['competence2']; ?>
                    </p>
                    <p>
                        <?= $row['competence3']; ?>
                    </p>
                <?php
                endwhile;
                ?>

            </div>




            <div class="sous4">

                <h2> Connaissance linguistique </h2>

                <?php
                $stmt = $dbh->query('SELECT * FROM langue');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                    ?>

                    <p>
                        <?= $row['langue1']; ?>
                    </p>
                    <p>
                        <?= $row['langue2']; ?>
                    </p>
                    <p>
                        <?= $row['langue3']; ?>
                    </p>
                <?php
                endwhile;
                ?>

            </div>





        </div>




        <!-- Pour le boc centre d'interet -->
        <div id="fin">




            <p id="centreinteret"> Centre d'interets </p>
            <button class="slideButtonn"> Plus d'intétets </button>

            <div class="fromLeftt">

                <?php
                $stmt = $dbh->query('SELECT * FROM loisirs');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                    ?>

                    <p>
                        <?= $row['loisir1']; ?>
                    </p>
                    <p>
                        <?= $row['loisir2']; ?>
                    </p>
                    <p>
                        <?= $row['loisir3']; ?>
                    </p>
                <?php
                endwhile;
                ?>


            </div>
            <div id="vo" >
                <strong>Voyages</strong> <br/><br/>
                <img src="img/1.JPG" id="voy" width="40%" height="45%">
            </div>

            <div id="pa">
                <strong>Pâtisserie</strong> <br/><br/>
                <img src="img/82.jpg" id="goo" width="20%" height="25%">
            </div>
        </div>

        <!-- Pour le bloc des projets -->
        <div class="projets">
            <h1 id="projet"> Projets </h1>

            <!-- Pour le bloc formation et compétences -->
            <div id="milieu">


                <div >

                    <h2> Projets</h2>
                    <?php
                    $stmt = $dbh->query('SELECT * FROM projet');
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                        ?>

                        <p>
                            <?= $row['projet1']; ?>
                        </p>
                        <p>
                            <?= $row['projet2']; ?>
                        </p>
                        <p>
                            <?= $row['projet3']; ?>
                        </p>
                    <?php
                    endwhile;
                    ?>
                </div>




            </div>


        </div>




        <!-- Pour le bloc des techno -->
        <div class="projets">
            <h1 id="projet"> Technologie utilisé. </h1>


            <div id="milieu">




                <div class="sous1">

                    <h2> Projet Y Days </h2>

                    <?php
                    $stmt = $dbh->query('SELECT * FROM techno');
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                        ?>

                        <p>
                            <?= $row['techno1']; ?>
                        </p>
                        <p>
                            <?= $row['techno2']; ?>
                        </p>
                        <p>
                            <?= $row['techno3']; ?>
                        </p>
                    <?php
                    endwhile;
                    ?>

                </div>

                <div class="sous2">

                    <h2> Projet Workshop</h2>
                    <?php
                    $stmt = $dbh->query('SELECT * FROM techno');
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                        ?>

                        <p>
                            <?= $row['techno1']; ?>
                        </p>
                        <p>
                            <?= $row['techno2']; ?>
                        </p>
                        <p>
                            <?= $row['techno3']; ?>
                        </p>
                    <?php
                    endwhile;
                    ?>
                </div>


                <div class="sous3">
                    <h2> Projet Connected flowers  </h2>
                    <?php
                    $stmt = $dbh->query('SELECT * FROM techno');
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                        ?>

                        <p>
                            <?= $row['techno1']; ?>
                        </p>
                        <p>
                            <?= $row['techno2']; ?>
                        </p>
                        <p>
                            <?= $row['techno3']; ?>
                        </p>
                    <?php
                    endwhile;
                    ?>
                </div>


            </div>


        </div>






        <!-- Pour le bloc du formulaire -->
        <div id="formu">
            <form method="GET" action="envoibdd.php" accept-charset="utf-8">
                <h1> Formulaire de contact </h1>


                <label for="Nom">Nom</label> <br><br>
                <div>



                    <input id="Nom" type="text" name="Nom" placeholder="Entrer votre Nom ">
                </div>

                <br><br>



                <label for="prenom">Prénom</label> <br><br>
                <div>


                    <input id="prenom" type="text" name="Prenom" placeholder="Entrer votre Prénom">
                </div><br><br>



                <label for="email"> Email  </label><br><br>
                <div>

                    <input id="email" type="email" name="email" placeholder="Entrer votre email">

                </div>
                <br><br>

                <div>
                    <input id="message" type="text" name="message" placeholder="Laisser un message">




                </div>
                <br><br>



                <div>
                    <input type="submit" value="envoyer" name="envoyer" >
                </div>
                <br><br>

                &nbsp <A id="mecontacter" HREF="mailto:witneykonate@gmail.com">Me contacter directement par mail</A>


            </form>



        </div>

</main>










<footer>

    <p>
        <strong> Ashley Witney KONATE tout droit réservé </strong> <br>

    </p>
</footer>
<script src="main.js"></script>



</body>
</html>



