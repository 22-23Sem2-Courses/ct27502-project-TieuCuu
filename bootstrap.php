<?php

define('BASE_URL_PATH', 'http://ct275.test/');

// Chuyển hướng đến một trang khác
function redirect($location)
{
    header('Location: ' . BASE_URL_PATH . $location);
    exit();
}

function adminLogin()
{
    if (isset($_SESSION['admin_id'])) {
        return true;
    }
    return false;
}

function userLogin()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}
