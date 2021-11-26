<?php
include('connectedmysql.php');

foreach ($_SESSION['login'] as $value) {
    $id = $value['id'];
    $value['login'];
    $value['password'];

}


?>