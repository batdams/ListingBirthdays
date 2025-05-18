<div class="home-container">
    <div class="home-content">
        <h1 class="main-title">Espace de gestion des anniversaires</h1>
        <div class="bdayAdd">
            <h3 class="">Ajout d'anniversaire</h3>
            <form method="POST" action="<?php echo BASE_URL;?>/userBdayCreation" id="form-bday-creation" class="form-bday">
                <div class="form-group">
                    <label for="nameBday" class="">Prénom :</label>
                    <input type="text" id="nameBday" name="nameBday" class="bdayField" required>
                </div>
                <div class="form-group">
                    <label for="surnameBday" class="">Nom :</label>
                    <input type="text" id="surnameBday" name="surnameBday" class="bdayField" required>
                </div>
                <div class="form-group">
                    <label for="birthdayBday" class="">Date de naissance :</label>
                    <input type="date" id="birthdayBday" name="birthdayBday" class="bdayField" required>
                </div>
                <div class="hideSection"></div>
                <div class="form-actions">
                    <button type="submit" name="submit_bday_creation" value="Enregistrer" class="btn-action">
                </div>
            </form>
            <h3 class="">Modifier un anniversaire</h3>
            <form method="POST" action="<?php echo BASE_URL;?>/userBdayModify" id="form-bday-modify" class="form-bday">
                <div class="form-group">
                    <label for="nameBday" class="">Prénom :</label>
                    <input type="text" id="nameBday" name="nameBday" class="bdayField" required>
                </div>
                <div class="form-group">
                    <label for="surnameBday" class="">Nom :</label>
                    <input type="text" id="surnameBday" name="surnameBday" class="bdayField" required>
                </div>
                <div class="form-group">
                    <label for="birthdayBday" class="">Date de naissance :</label>
                    <input type="date" id="birthdayBday" name="birthdayBday" class="bdayField" required>
                </div>
                <div class="hideSection"></div>
                <div class="form-actions">
                    <button type="submit" name="submit_bday_modify" value="Modifier" class="btn-action">
                </div>
            </form>
            <h3 class="">Supprimer un anniversaire</h3>
            <form method="POST" action="<?php echo BASE_URL;?>/userBdayCreation" id="form-bday-delete" class="form-bday">
                <div class="form-group">
                    <label for="nameBday" class="">Prénom :</label>
                    <input type="text" id="nameBday" name="nameBday" class="bdayField" required>
                </div>
                <div class="form-group">
                    <label for="surnameBday" class="">Nom :</label>
                    <input type="text" id="surnameBday" name="surnameBday" class="bdayField" required>
                </div>
                <div class="form-group">
                    <label for="birthdayBday" class="">Date de naissance :</label>
                    <input type="date" id="birthdayBday" name="birthdayBday" class="bdayField" required>
                </div>
                <div class="hideSection"></div>
                <div class="form-actions">
                    <button type="submit" name="submit_bday_delete" value="Supprimer" class="btn-action">
                </div>
            </form>
        </div>
    </div>
</div>