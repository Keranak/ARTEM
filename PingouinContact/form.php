<?php
//Formulaire de contact

// Vérification de l'envoi du formulaire

if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Vérification de la validité des données
    if (empty($name) || empty($email) || empty($message)) {
        echo 'Veuillez remplir tous les champs';
    } else {
        // Envoi du mail
        $to = get_option('email');
        $subject = 'Message de ' . $name;
        $body = $message;
        $headers = array('From: ' . $email);
        wp_mail($to, $subject, $body, $headers);
        echo 'Votre message a bien été envoyé';
    }
}

// Affichage du formulaire

echo '<form method="post" action="">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>
    <input type="submit" name="submit" value="Envoyer">
</form>';


?>
