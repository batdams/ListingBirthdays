<div class="home-container page-id" id="page-birthday-dashboard">
    <div class="home-content birthday-dashboard">
        <article class="manager-container">
            <h1 class="main-title">Hello <?php echo $_SESSION['pseudo']; ?> !</h1>
            <div class="bdayManager">
                <div class="form-actions">
                    <a href="<?php echo BASE_URL; ?>/birthdayManager" id="birthday-manager-link"><button type="button" name="" class="btn-action">Ajouter/Supprimer un anniversaire</button></a>
                </div>
            </div>
            <div class="">
                <h3>Les prochains anniversaires :</h3>
                <p></p>
            </div>
        </article>
        <article class="list-container">
            <div class="bdayList">
                <h3>Votre liste d'anniversaires</h3>
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
            </div>
        </article>
    </div>
</div>