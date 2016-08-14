<?php

/**
 * @package: Library Management System
 * @author:partha
 * @link:
 * @version 1.0.0
 * @copyright: http://partha.themekoder.com
 */

class Logout_admin {
    public function logout(){
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('Location:index.php');
    }
}