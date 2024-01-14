<?php

require_once "vendor/autoload.php";
use App\Core\Field;
use App\Core\Form;

$form = new Form;
$firstnameField = new Field('firstname');
$lastnameField = new Field('lastname');
$emailField = new Field('email');
$passwordField = new Field('password');
$confirmPasswordField = new Field('confirmPassword');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haudppc07638</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-primary mb-4">Create an Account</h1>
        <?php Form::begin('', 'post'); ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <?php echo $form->field('firstname'); ?>
            </div>
            <div class="col-md-6">
                <?php echo $form->field('lastname'); ?>
            </div>
            <div class="col-12">
                <?php echo $form->field('email'); ?>
            </div>
            <div class="col-md-6">
                <?php echo $form->field('password')->passwordField(); ?>
            </div>
            <div class="col-md-6">
                <?php echo $form->field('confirmPassword')->passwordField(); ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php Form::end(); ?>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>