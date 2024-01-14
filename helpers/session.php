<?php
if (!function_exists('session_set')) {
    function session_set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
}
if (!function_exists('session_get')) {
    function session_get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }
}

if (!function_exists('session_forget')) {
    function session_existed($key): bool
    {
        return isset($_SESSION[$key]);
    }
}
if (!function_exists('session_forget')) {
    function session_forget($key)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
}
if (!function_exists('session_flash_set')) {
    function session_flash_set($key, $value)
    {
        $_SESSION['flash'][$key] = $value;
    }
}
if (!function_exists('session_flash_existed')) {
    function session_flash_existed($key): bool
    {
        return isset($_SESSION['flash'][$key]);
    }
}
if (!function_exists('session_flash_get')) {
    function session_flash_get($key)
    {
        if (isset($_SESSION['flash'][$key])) {
            $message = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $message;
        }
        return null;
    }
}