<div class="home-container page-id" id="page-birthday-manager">
    <div class="home-content">
        <h1 class="main-title">Espace de gestion des anniversaires</h1>
        <div class="bdayManagement">
            <div class="bdayAdd">
                <div id="add-birthday" class="manager-item-title">
                    <button class="">Ajout d'anniversaire</button>
                </div>
                <div id="add-birthday-body" class="manager-item-body manager-item-hide">
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
                            <button type="submit" name="submit_bday_creation" value="Enregistrer" class="btn-action">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bdayModify">
                <div id="modify-birthday" class="manager-item-title">
                    <button class="">Modifier un anniversaire</button>
                </div>
                <div id="modify-birthday-body" class="manager-item-body manager-item-hide">
                    <form method="POST" action="<?php echo BASE_URL;?>/userBdayModify" id="form-bday-modify" class="form-bday">
                        <select name="birthdayToModify" id="birthday-modificator">
                            <?php foreach ($_SESSION['data']['birthdays'] as $birthday): ?>
                            <?php echo '<option data-Id="' . $birthday->getId() . '" data-name="' . $birthday->getName() . '" data-surname="' . $birthday->getSurname() . '" data-birthday="' . $birthday->getBirthday() . '"">
                                            ' . $birthday->getName() . " " . $birthday->getSurname() .  " 
                                        </option> "; ?>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-group">
                            <label for="nameBdayModif" class="">Prénom :</label>
                            <input type="text" id="nameBdayModif" name="nameBdayModif" class="bdayField" required>
                        </div>
                        <div class="form-group">
                            <label for="surnameBdayModif" class="">Nom :</label>
                            <input type="text" id="surnameBdayModif" name="surnameBdayModif" class="bdayField" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdayBdayModif" class="">Date de naissance :</label>
                            <input type="date" id="birthdayBdayModif" name="birthdayBdayModif" class="bdayField" required>
                        </div>
                        <div class="hideSection">
                            <input type="hidden" id="IDBdayModif" name="IDBdayModif" class="bdayField">
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="submit_bday_modif" value="Modifier" class="btn-action">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bdayDelete">
                <div id="delete-birthday" class="manager-item-title">
                    <button class="">Supprimer un anniversaire</button>
                </div>
                <div id="delete-birthday-body" class="manager-item-body manager-item-hide">
                    <form method="POST" action="<?php echo BASE_URL;?>/userBdayCreation" id="form-bday-delete" class="form-bday">
                        <select name="" id="">
                        <?php foreach ($_SESSION['data']['birthdays'] as $birthday): ?>
                        <?php echo '<option class="birthdayID' . $birthday->getId() . '" data-id="' . $birthday->getId() . '">
                                        ' . $birthday->getName() . " " . $birthday->getSurname() .  " 
                                    </option> "; ?>
                        <?php endforeach; ?>
                        </select>
                        <div class="hideSection"></div>
                        <div class="form-actions">
                            <button type="submit" name="submit_bday_delete" value="Supprimer" class="btn-action">Supprimer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>