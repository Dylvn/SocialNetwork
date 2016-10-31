<?php $title = "Page de profil" ?>
<?php include('partials/_header.php'); ?>

<div id="main-content">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Profil de <?= e($_SESSION['pseudo']) ?></h3>
                    </div>
                    <div class="panel-body">
                        Image <br />
                        Pseudo <br />
                        Adresse E-mail
                    </div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Profil de <?= e($_SESSION['pseudo']) ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php include('partials/_errors.php') ?>
                            <form method="post">

                                <div class="row">
                                    <!-- *** Name fields *** -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nom<span class="text-danger">*</span></label>
                                            <input type="text" name="name" value="" id="name" class="form-control"
                                             required="required">
                                        </div>
                                    </div>
                                    <!-- *** City fields *** -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">Ville<span class="text-danger">*</span></label>
                                            <input type="text" name="city" value="" id="city" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- *** Country fields *** -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country<span class="text-danger">*</span></label>
                                            <input type="text" name="country" value="" id="country" class="form-control" required="required">
                                        </div>
                                    </div>

                                    <!-- *** Sexe fields *** -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sex">Sexe<span class="text-danger">*</span></label>
                                            <select name="sex" id="sex" class="form-control">
                                                <option value="H">Homme</option>
                                                <option value="F">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- *** Twitter fields *** -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="twitter">Twitter<span class="text-danger">*</span></label>
                                            <input type="text" name="twitter" value="" id="twitter" class="form-control">
                                        </div>
                                    </div>

                                    <!-- *** Division fields *** -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rank">Divison<span class="text-danger">*</span></label>
                                            <select name="rank" id="rank" class="form-control">
                                                <option value="bronze">Bronze</option>
                                                <option value="silver">Argent</option>
                                                <option value="gold">Or</option>
                                                <option value="platinium">Platine</option>
                                                <option value="diamond">Diamand</option>
                                                <option value="master">Maître</option>
                                                <option value="challenger">Challenger</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- *** Biographie fields *** -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="bio">Biographie<span class="text-danger">*</span></label>
                                            <textarea type="text" name="bio" value="" id="bio" class="form-control" rows="10" col="30"></textarea>
                                        </div>
                                    </div>
                                </div> 

                                <input type="submit" class="btn btn-primary" name="update" value="Valider">
                           


                            </form>

                        </div>
                    </div>
                </div>
        </div>
    </div><!-- /.container -->
</div>

<?php include('partials/_footer.php'); ?>
