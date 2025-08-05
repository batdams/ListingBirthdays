<div class="api-container page-id" id="page-api-connected">
    <div class="api-content">
        <h1 class="main-title">Générez une clé API pour utiliser votre listing d'anniversaire !</h1>
        <p>
            <?= $_SESSION['APIKey']; ?>
            <form action="<?php echo BASE_URL;?>/generateAPI" method="POST">

            </form>
        </p>
    </div>
</div>