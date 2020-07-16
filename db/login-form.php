<?php
use Phppot\model;
if (! empty($_POST["signup-btn"])) {
    require_once '/model.php';
    $member = new model();
    $registrationResponse = $member->registerMember();
}
?>