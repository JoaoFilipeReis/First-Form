<?php

require("config.php");
require("template/head.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


if (empty($_POST['name']) && empty($_POST['phone']) && empty($_POST['email']) && empty($_POST['message'])) {
    require 'template/contact_form_error.php';
} else {
    require 'template/contact_form_success.php';
}


require('template/foot.php');