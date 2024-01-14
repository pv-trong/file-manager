<?php
require  __DIR__ . '/session.php';
require  __DIR__ . '/middleware.php';
require  __DIR__ . '/auth.php';
if (!function_exists('asset')) {
    function asset($path): string
    {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = 'https';
        }
        $domain = $_SERVER['HTTP_HOST']; // Lấy tên host (domain)
        return $protocol . "://" . $domain . '/public/' . $path;
    }
}
if (!function_exists('url')) {
    function url($uri = ''): string
    {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = 'https';
        }
        $domain = $_SERVER['HTTP_HOST']; // Lấy tên host (domain)
        return $protocol . "://" . $domain . '/' . $uri;
    }
}