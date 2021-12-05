<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <style>
        * {
            padding: 0;
            border: 0;
            margin: 0;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        :active,
        :hover,
        :focus {
            outline: none;
        }

        a {
            text-decoration: none;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            -webkit-tap-highlight-color: transparent;
        }

        button {
            outline: none;
            cursor: pointer;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            -webkit-tap-highlight-color: transparent;
        }

        html {
            scroll-behavior: smooth;
            background-color: black;
        }

        body {
            max-width: 430px;
            margin: 0 auto;

        }


        .block {
            width: 100%;
        }

        .block img {
            width: 100%;
            display: block;
            pointer-events: none;
        }

        .hlink {
            position: relative;
            display: block;
            height: 74px;
            width: 82%;
            margin: -37px auto -37px auto;
            z-index: 1;
        }

        .container {
            position: absolute;
            top: 0;
            left: 5.5%;
            font-family: 'Roboto Condensed';
            padding: 6px 14px;
            background-color: white;
            border-radius: 0 0 10px 10px;
            width: 40%;
            font-size: 15px;
            font-weight: 400;
        }

        @media  screen and (min-width: 430px) {
            .container {
                left: calc(50% - 190px);
                width: 168px;
            }
        }
    </style>
</head>
<body>
<?php echo $__env->yieldContent("content"); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\image\resources\views/layouts/landing.blade.php ENDPATH**/ ?>