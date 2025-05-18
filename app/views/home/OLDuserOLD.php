<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="mt-5">
                <h1><?php echo $_SESSION['pseudo']?></h1>
                <p><b>Bienvenue</b> sur votre espace de gestion de dates d'anniversaire</p>
            </div>
            <div class="mt-5">
                <h3>Les anniversaires du mois</h3>
                <p></p>
            </div>
            <div class="mt-5">
                <h3>Votre liste d'anniversaires</h3>
                <p>
                <ul> 
                    <?php foreach ($_SESSION['birthdays'] as $birthday): ?>
                    <li><?php echo $birthday->getName() . " " . $birthday->getSurname() . " : " . $birthday->getBirthdayDate(); ?></li>
                    <?php endforeach; ?>
                </ul>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="m-3">
                <div id="timedate" class="text-center">
                    <p><b>Aujourd'hui, nous sommes le : 
                    <a id="d">1</a> 
                    <a id="mon">Janvier</a> 
                    <a id="y">0</a>. 
                    Il est : 
                    <a id="h">12</a> h
                    <a id="m">00</a></b>
                    </p>
                </div>
            </div>
            <div class="m-3">
                <div id="weather" class="text-center">
                </div>
            </div>
            <div>
            <div class="bdayAdd">
                <h3 class="text-center">Ajout d'anniversaire</h3>
                <form method="POST" action="<?php echo BASE_URL;?>/userBdayCreation" class="align-items-center">
                    <div class="p-3">
                        <label for="nameBday" class="form-label">Prénom :</label>
                        <input type="text" id="nameBday" name="nameBday" class="form-control" required>
                    </div>
                    <div class="p-3">
                        <label for="surnameBday" class="form-label">Nom :</label>
                        <input type="text" id="surnameBday" name="surnameBday" class="form-control" required>
                    </div>
                    <div class="p-3">
                        <label for="birthdayBday" class="col-form-label">Date de naissance :</label>
                        <input type="date" id="birthdayBday" name="birthdayBday" class="form-control" required>
                    </div>
                    <div class="p-3">
                        <input type="submit" name="submit_form_2" value="Enregistrer" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
            </div>
            <div>
                <img src="../../../public_html/pictures/balloons.jpg" alt="balloons" class="w-100 pctBalloons">
            </div>
        </div>
    </div>
</div>