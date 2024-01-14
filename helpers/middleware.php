<?php
if (!function_exists('md_guest')) {
    function md_guest($method, $path, $url)
    {
        if (auth_check() && $path === $url) {
            header("location:javascript://history.go(-1)");
        }
    }
}
if (!function_exists('md_auth')) {
    function md_auth($method, $path, $url)
    {
        if (!auth_check() && $path === $url) {
            header("Location: /login");
        }
    }
}
