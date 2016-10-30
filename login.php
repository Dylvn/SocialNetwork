<?php
session_start();
require('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');

    //Sile formulaire à été soumis
    if(isset($_POST['login'])) {

        //Si tous les champs on été remplis
        if(not_empty(['identifiant','password'])) {
            extract($_POST);

            $q = $db->prepare(" SELECT id FROM users 
                                WHERE (pseudo = :identifiant OR email = :identifiant)
                                AND password = :password AND active = '1'");

            $q->execute([
                'identifiant'   => $identifiant,
                'password'      => sha1($password)
            ]);

            $userHasBeenFound = $q->rowCount();

            if($userHasBeenFound){
                
                $user = $q->fetch(PDO::FETCH_OBJ);
                
                $_SESSION['user_id'] = $user->id;

                redirect('profile.php');
            } else {
                set_flash('Combinaison Identifiant/Password incorrect!', 'danger');
                save_input_data();
            }
        }

    } else {
        clear_input_data();
    }





?>

<?php require('views/login.view.php'); ?>