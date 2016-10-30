<?php
session_start();
require('config/database.php');
require('includes/functions.php');
require('includes/constants.php');

    //Sile formulaire à été soumis
    if(isset($_POST['register'])) {

        //Si tous les champs on été remplis
        if(not_empty(['name','pseudo','email','password','password_confirm'])) {

            $errors = [];
            extract($_POST);

            if(mb_strlen($pseudo) < 3) {
                $errors[] = "Pseudo trop court, minimum trois caractéres.";
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Adresse Email Invalide.";
            }

            if(mb_strlen($password) < 6){
                $errors[] = "Mot de passe trop court, minimum six caractéres.";
            }else{
                if($password != $password_confirm){
                    $errors[] = "Les deux mots de passes ne sont pas identiques.";
                }
            }

            if(is_already_in_use('pseudo', $pseudo, 'users')) {
                $errors[] = "Pseudonyme déjà utilisé";
            }

            if(is_already_in_use('email', $email, 'users')) {
                $errors[] = "Adresse email déjà utilisé";
            }
            if(count($errors) == 0){
                //Envoi d'un mail d'activation
                $to = $email;
                $subject = WEBSITE_NAME. " - ACTIVATION DE COMPTE";
                $password = sha1($password);
                $token = sha1($pseudo.$email.$password);

                ob_start();
                require('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();

                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                mail($to, $subject, $content, $headers);
                //Informer l'utilisateur pour qu'il verifie sa boite de reception
                set_flash('Mail d\'activation envoyé!', 'success');

                $q = $db->prepare('INSERT INTO users(name, pseudo, email, password)
                                    VALUES(:name, :pseudo, :email, :password)');
                $q->execute([
                    'name' => $name,
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'password' => $password
                ]);

                redirect('index.php');
            } else {
                save_input_data();
            }

        } else {
            $errors[] = "Veuillez s'il vous plaît remplir tous les champs.";
            save_input_data();
        }

    } else {
        clear_input_data();
    }





?>

<?php require('views/register.view.php'); ?>