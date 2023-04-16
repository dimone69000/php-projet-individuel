<?php require_once __DIR__ . '/layout/header.php'?>

<div class="container">
        <div class="row align-items-start">
            <div class="col-lg-3 col-md-3">
            <h1>Bienvenue</h1>
                <?php require_once __DIR__ . '/layout/menu-cours.php'?>
            </div>

            <div class="col-lg-7 col-md-7">
            
            </div>

            <div class="col-lg-2 col-md-2">
                <?php require_once __DIR__ . '/login.php'?>
                <?php require_once __DIR__ . '/classes/connexion-message.php'?>
                <?php if (array_key_exists('msg', $_GET)) { ?>
            <div class="alert alert-success">
                <?php echo ConnexionMessages::getConnexionMessage(intval($_GET['msg'])); ?>
            </div>
<?php } ?>
            </div>
        </div>
</div>
<?php require_once __DIR__. '/layout/footer.php'?>