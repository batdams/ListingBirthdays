<div class="connection-container">
    <div class="connection-content">
        <h1 class="main-title">Connexion à <b>BdayList</b></h1>
        <p>Connectez-vous pour accéder à vos anniversaires enregistrés !</p> <br>
        <form action="<?php echo BASE_URL; ?>/login" method="POST" class="form-connexion">
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" required placeholder="votre@email.com">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="••••••••">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-action">Se connecter</button>
            </div>
        </form>
        <p class="not-registered">
            Pas encore inscrit ? <a href="/register" class="btn-link">Créer un compte</a>
        </p>
    </div>
</div>
