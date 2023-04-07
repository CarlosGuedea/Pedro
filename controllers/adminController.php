<?php
class adminController{

    public static function login(){
        include 'database/database.php';
        include 'middleware/login-admin.php';
        include 'views/layouts/header.php';
        include 'views/admin/login.php';
    }

    public static function panel(){
        include 'database/database.php';
        include 'middleware/autenticacion-admin.php';
        include 'middleware/panel-admin.php';
        include 'views/layouts/header.php';
        include 'views/admin/ordenes.php';
    }
}