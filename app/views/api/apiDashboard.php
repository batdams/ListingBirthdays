<div class="api-container page-id" id="page-api-connected">
    <div class="api-content">
        <h1 class="main-title">Générez une clé API pour utiliser votre listing d'anniversaire !</h1>
        <p>
            <?php if (empty($_SESSION['api-key'])): ?>
                <h3> Vous n'avez pas encore généré de clé </h3>
                <form action="<?php echo BASE_URL;?>/generateAPI" method="POST">
                    <button>Générer une clé</button>
                </form>
            <?php elseif($_SESSION['api-key']): ?>
                Votre clé API :
                <?php echo $_SESSION['api-key']['api_key_number']; ?>
            <?php endif;?>
            <a href= "<?php echo BASE_URL; ?>/getAPIRequest?api_key=bday_58e4fe1eb30d73c977a639b457a438ed">test API OK</a> <br>
            <a href= "<?php echo BASE_URL; ?>/getAPIRequest?api_key=bday_1_yo">test API PRESENTE mais Fausse</a> <br>
            <a href= "<?php echo BASE_URL; ?>/getAPIRequest">test API Absente</a> <br>
        </p>
    </div>
</div>