<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="shortcut icon" href="<?= asset('img/favicon.ico') ?>">
    <title>HTML Tailwind Admin Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="<?= asset('css/style.css') ?>">
</head>
<body>
<div id="notification-toast" class="toast-wrapper top-center"></div>
<div id="root">
    <!-- App Layout-->
    <div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
        <main class="h-full">
            <div class="page-container relative h-full flex flex-auto flex-col">
                <div class="h-full">
                    <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                        <?php include $content; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="<?= asset('js/vendors.min.js') ?>"></script>
<script src="<?= asset('js/app.min.js') ?>"></script>
<script src="<?= asset('js/toast-html.js') ?>"></script>
<script src="<?= asset('vendors/jquery-validation/jquery.validate.min.js') ?>"></script>
<script src="<?= asset('js/pages/register.js') ?>"></script>

<?php if (session_flash_existed('message')) { ?>
<?php $message = session_flash_get('message') ?>
    <script>
        window.addEventListener('load',function () {
            $('#notification-toast').append(toastHtml['<?= $message['type'] ?>'])
                .find('.notification-description').text('<?= $message['message'] ?>')
            $('#notification-toast .toast:last-child').toast('show');
            setTimeout(function () {
                $('#notification-toast .toast:first-child').remove();
            }, 5000);
        })
    </script>
<?php } ?>
</body>
</html>