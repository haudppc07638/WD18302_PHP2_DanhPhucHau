<?php
include '../Model/Model.php';

if (isset($_POST["email"])) {
    $email = $_POST['email'];
    $user = get_user($email);
}

include '../Views/view.php'
?>