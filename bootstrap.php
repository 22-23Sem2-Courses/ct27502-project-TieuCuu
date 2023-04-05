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
    if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
        return true;
    }
    return false;
}

function userLogin()
{
    if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
        return true;
    }
    return false;
}

function testPhrase($userInput)
{
    if (isset($_SESSION['phrase']) && $_SESSION['phrase'] === $userInput) {
        return true;
    } else {
        return false;
    }
}
