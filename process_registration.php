<?php 

require 'config/bootstrap.php';


$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password);

    if ($user->validate()) {
        // On successful validation, display the confirmation page
        $smarty->assign('username', $user->username);
        $smarty->assign('email', $user->email);
        $smarty->display('confirmation.tpl');
    } else {
        // On failure, return to the form with errors
        $smarty->assign('errors', $user->errors);
        $smarty->assign('username', $user->username);
        $smarty->assign('email', $user->email);
        $smarty->display('register.tpl');
    }
} else {
    // Redirect back to the registration form if accessed directly
    header('Location: index.php');
}
