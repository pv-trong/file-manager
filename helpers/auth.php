<?php
if (!function_exists('auth_check')) {
    function auth_check(): bool
    {
        return isset($_SESSION['auth']);
    }
}
if (!function_exists('auth')) {
    function auth()
    {
        return $_SESSION['auth'];
    }
}