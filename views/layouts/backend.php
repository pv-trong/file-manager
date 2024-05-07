<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="shortcut icon" href="<?= asset('img/favicon.ico') ?>">
    <title>HTML Tailwind Admin Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/style.css') ?>">
    <?php if (isset($styles)) { ?>
        <?php foreach ($styles as $style) { ?>
            <link rel="stylesheet" type="text/css" href="<?= asset($style) ?>">
    <?php }
    } ?>
    <link rel="stylesheet" type="text/css" href="<?= asset('admin/css/custom.css') ?>">
</head>

<body>
    <div id="notification-toast" class="toast-wrapper top-center"></div>
    <div id="root">
        <!-- App Layout-->
        <div class="app-layout-classic flex flex-auto flex-col">
            <div class="flex flex-auto min-w-0">
                <!-- Side Nav start-->
                <div class="side-nav side-nav-light side-nav-expand">
                    <div class="side-nav-header">
                        <div class="logo px-6">
                            <img src="<?= asset('admin/img/logo/logo-light-full.png') ?>" alt="logo">
                        </div>
                    </div>
                    <div class="side-nav-content relative side-nav-scroll">
                        <nav class="menu menu-transparent px-4 pb-4">
                            <div class="menu-group">
                                <div class="menu-title">Apps</div>
                                <ul>
                                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 <?= url() === url('backend/dashboard') ? 'menu-item-active' : '' ?>">
                                        <a class="menu-item-link" href="<?= url('backend/dashboard') ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                            </svg>
                                            <span class="menu-item-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 <?= url() === url('backend/file-manager') ? 'menu-item-active' : '' ?>">
                                        <a class="menu-item-link" href="<?= url('backend/file-manager') ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                                            </svg>
                                            <span class="menu-item-text">File Manager</span>
                                        </a>
                                    </li>
                                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 <?= url() === url('backend/slider-manager') ? 'menu-item-active' : '' ?>">
                                        <a class="menu-item-link" href="<?= url('backend/slider-manager') ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                                            </svg>
                                            <span class="menu-item-text">Slider Manager</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Side Nav end-->

                <!-- Header Nav start-->
                <div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full">
                    <header class="header border-b border-gray-200 dark:border-gray-700">
                        <div class="header-wrapper h-16">
                            <!-- Header Nav Start start-->
                            <div class="header-action header-action-start">
                                <div id="side-nav-toggle" class="side-nav-toggle header-action-item header-action-item-hoverable">
                                    <div class="text-2xl">
                                        <svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                        </svg>
                                        <svg class="side-nav-toggle-icon-collapsed hidden" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
                                    <div class="text-2xl">
                                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="header-search header-action-item header-action-item-hoverable text-2xl" data-bs-toggle="modal" data-bs-target="#dialog-search">
                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- Header Nav Start end-->
                            <!-- Header Nav End start-->
                            <div class="header-action header-action-end">
                                <!-- Language Selector-->
                                <div class="dropdown">
                                    <div class="dropdown-toggle" id="nav-lang-dropdown" data-bs-toggle="dropdown">
                                        <div class="header-action-item header-action-item-hoverable flex items-center">
                                            <span class="avatar avatar-circle" data-avatar-size="24">
                                                <img class="avatar-img avatar-circle" src="<?= asset('admin/img/countries/us.png') ?>" loading="lazy" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="dropdown-menu bottom-end">
                                        <li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
                                            <span class="flex items-center">
                                                <span class="avatar avatar-circle" data-avatar-size="18">
                                                    <img class="avatar-img avatar-circle" src="<?= asset('admin/img/countries/us.png') ?>" loading="lazy" alt="">
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">English</span>
                                            </span>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-emerald-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </li>
                                        <li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
                                            <span class="flex items-center">
                                                <span class="avatar avatar-circle" data-avatar-size="18">
                                                    <img class="avatar-img avatar-circle" src="<?= asset('admin/img/countries/cn.png') ?>" loading="lazy" alt="">
                                                </span>
                                                <span class="ltr:ml-2 rtl:mr-2">
                                                    Chinese
                                                </span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Config-->
                                <div class="text-2xl header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#nav-config">
                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <!-- User Dropdown-->
                                <div class="dropdown">
                                    <div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
                                        <div class="header-action-item flex items-center gap-2">
                                            <span class="avatar avatar-circle" data-avatar-size="32" style="width: 32px">
                                                <img class="avatar-img avatar-circle" src="<?= asset('admin/img/avatars/thumb-1.jpg') ?>" loading="lazy" alt=""></span>
                                            <div class="hidden md:block">
                                                <div class="text-xs capitalize"><?= auth()['username'] ?></div>
                                                <div class="font-bold"><?= auth()['email'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="dropdown-menu bottom-end min-w-[240px]">
                                        <li class="menu-item-header">
                                            <div class="py-2 px-3 flex items-center gap-2">
                                                <span class="avatar avatar-circle avatar-md">
                                                    <img class="avatar-img avatar-circle" src="<?= asset('admin/img/avatars/thumb-1.jpg') ?>" loading="lazy" alt="">
                                                </span>
                                                <div>
                                                    <div class="font-bold text-gray-900 dark:text-gray-100"><?= auth()['username'] ?></div>
                                                    <div class="text-xs"><?= auth()['email'] ?></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item-divider"></li>
                                        <li class="menu-item menu-item-hoverable mb-1 h-[35px]">
                                            <a class="flex gap-2 items-center" href="#">
                                                <span class="text-xl opacity-50">
                                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                    </svg>
                                                </span>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-hoverable mb-1 h-[35px]">
                                            <a class="flex gap-2 items-center" href="#">
                                                <span class="text-xl opacity-50">
                                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </span>
                                                <span>Account Setting</span>
                                            </a>
                                        </li>
                                        <li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
                                        <li class="menu-item menu-item-hoverable gap-2 h-[35px]">
                                            <a class="flex gap-2 items-center" href="<?= url('logout') ?>">
                                                <span class="text-xl opacity-50">
                                                    <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                    </svg>
                                                </span>
                                                <span>Sign Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Nav End end -->
                        </div>
                    </header>
                    <!-- Popup start-->
                    <div class="modal fade" id="nav-config" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog drawer drawer-end">
                            <div class="drawer-content">
                                <div class="drawer-header">
                                    <h4>Theme Config</h4>
                                    <span class="close-btn close-btn-default" role="button" data-bs-dismiss="modal">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="drawer-body">
                                    <div class="flex flex-col h-full justify-between">
                                        <div class="flex flex-col gap-y-10 mb-6">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <h6>Dark Mode</h6>
                                                    <span>Switch theme to dark mode</span>
                                                </div>
                                                <div>
                                                    <label class="switcher">
                                                        <input name="dark-mode-toggle" type="checkbox" value="">
                                                        <span class="switcher-toggle"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <h6>Direction</h6>
                                                    <span>Select a direction</span>
                                                </div>
                                                <div class="input-group">
                                                    <button id="dir-ltr-button" class="btn bg-gray-100 dark:bg-gray-500 border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-round h-9 px-3 py-2 text-sm">
                                                        LTR
                                                    </button>
                                                    <button id="dir-rtl-button" class="btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-round h-9 px-3 py-2 text-sm">
                                                        RTL
                                                    </button>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-3">Nav Mode</h6>
                                                <div class="inline-flex">
                                                    <label class="radio-label inline-flex mr-3" for="nav-mode-radio-default">
                                                        <input id="nav-mode-radio-default" type="radio" value="default" name="nav-mode-radio-group" class="radio text-primary-600" checked>
                                                        <span>Default</span>
                                                    </label>
                                                    <label class="radio-label inline-flex mr-3" for="nav-mode-radio-themed">
                                                        <input id="nav-mode-radio-themed" type="radio" value="themed" name="nav-mode-radio-group" class="radio text-primary-600">
                                                        <span>Themed</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-3">Nav Mode</h6>
                                                <select id="theme-select" class="input input-sm focus:ring-primary-600 focus-within:ring-primary-600 focus-within:border-primary-600 focus:border-primary-600">
                                                    <option value="primary" selected>Indigo</option>
                                                    <option value="red">Red</option>
                                                    <option value="orange">Orange</option>
                                                    <option value="amber">Amber</option>
                                                    <option value="yellow">Yellow</option>
                                                    <option value="lime">Lime</option>
                                                    <option value="green">Green</option>
                                                    <option value="emerald">Emerald</option>
                                                    <option value="teal">Teal</option>
                                                    <option value="cyan">Cyan</option>
                                                    <option value="sky">Sky</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="violet">Violet</option>
                                                    <option value="purple">Purple</option>
                                                    <option value="fuchsia">Fuchsia</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="rose">Rose</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="dialog-search" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog dialog">
                            <div class="dialog-content p-0">
                                <div>
                                    <div class="px-4 flex items-center justify-between border-b border-gray-200 dark:border-gray-600">
                                        <div class="flex items-center">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                            <input class="ring-0 outline-none block w-full p-4 text-base bg-transparent text-gray-900 dark:text-gray-100" placeholder="Search...">
                                        </div>
                                        <button class="button bg-white border border-gray-300 dark:bg-gray-700 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 rounded font-semibold h-7 px-3 py-1 text-xs" data-bs-dismiss="modal">Esc
                                        </button>
                                    </div>
                                    <div class="py-6 px-5 max-h-[550px] overflow-y-auto">
                                        <div class="mb-6">
                                            <h6 class="mb-3">Recommended</h6>
                                            <a href="#">
                                                <div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
                                                    <div class="flex items-center">
                                                        <div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-900 dark:text-gray-300">
                                                            <span>
                                                                <span>Documentation</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
                                                    <div class="flex items-center">
                                                        <div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-900 dark:text-gray-300">
                                                            <span>
                                                                <span>Changelog</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
                                                    <div class="flex items-center">
                                                        <div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-gray-900 dark:text-gray-300">
                                                            <span>
                                                                <span>Button</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="mobile-nav-drawer" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog drawer drawer-start !w-[330px]">
                            <div class="drawer-content">
                                <div class="drawer-header">
                                    <h4>Navigation</h4>
                                    <span class="close-btn" role="button" data-bs-dismiss="modal">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="drawer-body p-0">
                                    <div class="side-nav-mobile">
                                        <div class="side-nav-content relative side-nav-scroll">
                                            <nav class="menu menu-transparent px-4 pb-4">
                                                <div class="menu-group">
                                                    <div class="menu-title">Apps</div>
                                                    <ul>
                                                        <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 <?= url() === url('backend/dashboard') ? 'menu-item-active' : '' ?>">
                                                            <a class="menu-item-link" href="<?= url('backend/dashboard') ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                                                </svg>
                                                                <span class="menu-item-text">Dashboard</span>
                                                            </a>
                                                        </li>
                                                        <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 <?= url() === url('backend/file-manager') ? 'menu-item-active' : '' ?>">
                                                            <a class="menu-item-link" href="<?= url('backend/file-manager') ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                                                                </svg>
                                                                <span class="menu-item-text">File Manager</span>
                                                            </a>
                                                        </li>
                                                        <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 <?= url() === url('backend/slider-manager') ? 'menu-item-active' : '' ?>">
                                                            <a class="menu-item-link" href="<?= url('backend/slider-manager') ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                                                                </svg>
                                                                <span class="menu-item-text">Slider Manager</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popup end-->
                    <div class="h-full flex flex-auto flex-col justify-between">
                        <!-- Content start -->
                        <main class="h-full">
                            <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                <div class="flex flex-col gap-4 h-full">
                                    <?php include $content; ?>
                                </div>
                        </main>
                        <!-- Content end -->
                        <footer class="footer flex flex-auto items-center h-16 px-4 sm:px-6 md:px-8">
                            <div class="flex items-center justify-between flex-auto w-full">
                                <span>Copyright © 2023 <span class="font-semibold">Trogn</span> All rights reserved.</span>
                                <div>
                                    <a class="text-gray" href="#">Term &amp; Conditions</a>
                                    <span class="mx-2 text-muted"> | </span>
                                    <a class="text-gray" href="#">Privacy &amp; Policy</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= asset('admin/js/vendors.min.js') ?>"></script>
    <script src="<?= asset('admin/js/app.min.js') ?>"></script>
    <script src="<?= asset('admin/js/toast-html.js') ?>"></script>
    <?php if (isset($scripts)) { ?>
        <?php foreach ($scripts as $script) { ?>
            <script src="<?= asset($script) ?>"></script>
    <?php }
    } ?>
    <?php if (session_flash_existed('message')) { ?>
        <?php $message = session_flash_get('message') ?>
        <script>
            window.addEventListener('load', function() {
                $('#notification-toast').append(toastHtml['<?= $message['type'] ?>'])
                    .find('.notification-description').text('<?= $message['message'] ?>')
                $('#notification-toast .toast:last-child').toast('show');
                setTimeout(function() {
                    $('#notification-toast .toast:first-child').remove();
                }, 5000);
            })
        </script>
    <?php } ?>
</body>

</html>