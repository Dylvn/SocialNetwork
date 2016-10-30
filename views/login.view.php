<?php $title = "Connexion" ?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
    <div class="container">

        <h1 class="lead">Connectez-vous !</h1>

        <?php include('partials/_errors.php'); ?>

        <form data-parsley-validate method="post" class="well col-md-6">

            <!-- Identifiant Field -->
            <div class="form-group">
                <label class="control-label" for="identifiant">Pseudo ou Adresse E-mail :</label>
                <input data-parsley-minlength="3" type="text" value="<?= get_input('identifiant') ?>" class="form-control" id="identifiant" name="identifiant" required="required"/>
            </div>

            <!-- Password Field -->
            <div class="form-group">
                <label class="control-label" for="password">Mot de passe :</label>
                <input data-parsley-minlength="6" type="password" class="form-control" id="password" name="password" required="required"/>
            </div>

            <input type="submit" class="btn btn-primary" value="Connexion" name="login">

        </form>

    </div><!-- /.container -->
</div>

<?php include('partials/_footer.php'); ?>
