<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<?php require_once(__DIR__ . '/../../partials/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    ЛОГО
                </a>
            </div>
            <div class="col-auto">
                <nav class="header-nav">
                    <ul class="header-nav-list d-none d-xl-flex">
                        <li>
                            <a href="/">
                                Главная
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-laboratory.php">
                                лаборатория
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-products.php">
                                продукты
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-about.php">
                                о нас
                            </a>
                        </li>
                        <li>
                            <a href="../../page/page-contacts.php">
                                контакты
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-secondary d-none d-xl-inline-flex open-feedback">
                        связаться, чтобы заказать
                    </a>
                    <div class="burger-menu">
                        <div class="line line--top"></div>
                        <div class="line line--bottom"></div>
                    </div>
                    <ul class="languages-menu">
                        <li class="active">
                            <span>
                                ru
                            </span>
                        </li>
                        <li>
                            <a href="#">
                                ua
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="menu-list">
            <li>
                <a href="/">
                    Главная
                </a>
            </li>
            <li>
                <a href="../../page/page-laboratory.php">
                    лаборатория
                </a>
            </li>
            <li>
                <a href="../../page/page-products.php">
                    продукты
                </a>
            </li>
            <li>
                <a href="../../page/page-about.php">
                    о нас
                </a>
            </li>
            <li>
                <a href="../../page/page-contacts.php">
                    контакты
                </a>
            </li>
        </ul>
        <div class="mt-4">
            <a href="#" class="btn btn-secondary open-feedback">
                связаться, чтобы заказать
            </a>
        </div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main id="app">