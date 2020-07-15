<?php
if (! empty($_POST["login-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>