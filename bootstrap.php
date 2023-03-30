<?php

define('BASE_URL_PATH', 'http://ct275.test/');

// Chuyển hướng đến một trang khác
function redirect($location)
{
    header('Location: ' . $location);
    exit();
}
