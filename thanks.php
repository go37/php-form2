<!-- on teste si les valeurs existent et qu'elles sont non nulles -->
<?php
if (isset($_POST['user_first_name']) && isset($_POST['user_name']) && isset($_POST['user_subject']) && isset($_POST['user_email']) && isset($_POST['user_phone']) && isset($_POST['user_message'])) {
    if (!empty($_POST['user_first_name']) && !empty($_POST['user_name']) && !empty($_POST['user_subject']) && !empty($_POST['user_email']) && !empty($_POST['user_phone']) && !empty($_POST['user_message'])) {
        if (filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            echo "Merci " . $_POST['user_first_name'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de " . $_POST['user_subject'] . ".<br>";
            echo "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : <br>";
            echo $_POST['user_message'] . "<br>";
        } else {
            echo "l'adresse e-mail n'est pas valide.";
        }
    } else {
        echo "Houston, we got a problem ! Les données sont vides ... ";
    }
} else {
    echo "Houston, we got a problem ! Les données n'existent pas ... ";
}
