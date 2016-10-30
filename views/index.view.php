<?php $title = "Accueil" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/_header.php'); ?>

    <div id="main-content">
        <div class="container">

            <div class="jumbotron">
                <h1><?= WEBSITE_NAME ?></h1>
                <p>Voici un project qui consiste a créer un réseau social pur les joueurs
                    de League of Legends (pour le moment).<br />
                    Rejoignez-nous dés maintenant : <a href="register.php">Inscrivez-vous</a>.</p>
                <a href="register.php"><button class="btn btn-primary btn-lg">Je m'inscris dés maintenant</button></a>
            </div>

        </div><!-- /.container -->
    </div>

<?php include('partials/_footer.php'); ?>