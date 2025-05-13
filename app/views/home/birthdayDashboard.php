<div class="home-container">
    <div class="home-content">
        <h1 class="main-title">Bienvenue sur votre espace de gestion de dates d'anniversaire</h1>
        <div class="">
            <h3>Les anniversaires du mois</h3>
            <p></p>
        </div>
        <div class="">
            <h3>Votre liste d'anniversaires</h3>
            <?php echo $_SESSION['email']; ?>
            <p>
                <ul>
                    <?php if (empty($_SESSION['birthdays'])): ?>
                    <li>Aucun anniversaire enregistré.</li>
                    <?php else: ?>
                    <li>Voici la liste de vos anniversaires :</li>
                    <?php foreach ($_SESSION['birthdays'] as $birthday): ?>
                    <li><?php echo $birthday->getName() . " " . $birthday->getSurname() . " : " . $birthday->getBirthday(); ?></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </p>
        </div>
        <div class="bdayAdd">
            <h3 class="">Ajout d'anniversaire</h3>
            <form method="POST" action="<?php echo BASE_URL;?>/userBdayCreation" class="">
                <div class="">
                    <label for="nameBday" class="">Prénom :</label>
                    <input type="text" id="nameBday" name="nameBday" class="" required>
                </div>
                <div class="">
                    <label for="surnameBday" class="">Nom :</label>
                    <input type="text" id="surnameBday" name="surnameBday" class="" required>
                </div>
                <div class="">
                    <label for="birthdayBday" class="">Date de naissance :</label>
                    <input type="date" id="birthdayBday" name="birthdayBday" class="" required>
                </div>
                <div class="">
                    <input type="submit" name="submit_form_2" value="Enregistrer" class="">
                </div>
            </form>
        </div>
    </div>
</div>