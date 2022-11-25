<h1>Option du formulaire de contact</h1>


<?php
// Formulaire qui définis l'email de réception des messages
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    update_option('email', $email);
}
?>

<form method="post" action="">
    <label for="email">Email de réception</label>
    <input type="email" name="email" id="email" value="<?php echo get_option('email'); ?>">
    <input type="submit" name="submit" value="Enregistrer">
</form>


<?php
// Afficher un bouton pour copier le shortcode

// Récupération du shortcode
$shortcode = get_option('pingouincontact_shortcode');
// Si le shortcode n'existe pas, on le crée
if (empty($shortcode)) {
    $shortcode = '[pingouincontact]';
    update_option('pingouincontact_shortcode', $shortcode);
}
?>

<p>Utilisez ce shortcode pour afficher le formulaire de contact : <?php echo $shortcode; ?></p>

<?php
// Bouton pour tester l'envoi de mail
if (isset($_POST['test'])) {
    $to = get_option('email');
    $subject = 'Test';
    $body = 'Ceci est un test';
    $headers = array('From: ' . get_option('admin_email'));
    wp_mail($to, $subject, $body, $headers);
    echo 'Test envoyé';
}
?>

<form method="post" action="">
    <input type="submit" name="test" value="Envoyer un test">
</form>
