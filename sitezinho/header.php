<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link type="text/css" rel="stylesheet" href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>css/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>css/animate.css" />
    <!--Materialize-->
    <link rel="stylesheet" href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Materialize-->

    <!--Slick Carousel-->
    <link rel="stylesheet" type="text/css" href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>slick/slick.css" />
    <!--Slick Carousel-->

    <!--Fonte Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!--Fonte Awesome-->

    <title>
        <?php echo $title; ?>
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <link rel="shortcut icon" href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>imagens/favicon.ico" type="image/x-icon">
    <meta content="<?php echo $content; ?>" property="og:description">
    <meta content="<?php echo $title; ?>" property="og:title">
    <meta content="<?php echo $content; ?>" property="og:image">
    <meta content="337" property="og:image:width">
    <meta content="111" property="og:image:height">
    <meta content="website" property="og:type">
    <meta content="" property="og:url">
    <meta content="<?php echo $title; ?>" name="twitter:title">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="" name="twitter:site">
    <meta content="<?php echo $content; ?>" name="twitter:description">
    <meta content="" name="twitter:image">
</head>

<body>
    <div id="tudo" class="animated fadeIn">
        <div class="tudo-topo">
            <div class="navbar-fixed">
                <nav class="white z-depth-0">
                    <div class="nav-wrapper">
                        <div class="container">
                            <h1 class="brand-logo">
                                <a href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>index.php">

                                    <img src="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>imagens/seu-logo-aqui.png" alt="Imagem do logo tipo da JSR sistemas" />
                                </a>
                            </h1>
                            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                                <i class="material-icons">menu</i>
                            </a>
                            <ul class="right hide-on-med-and-down">
                                <li <?php if ($active == 'home') {
                                                        echo 'class="active"';
                                                    } ?>>
                                    <h2>
                                        <a href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>index.php">
                                            Home
                                        </a>
                                    </h2>
                                </li>
                                <li <?php if ($active == 'empresa') {
                                                        echo 'class="active"';
                                                    } ?>>
                            
                                <li <?php if ($active == 'portfolio') {
                                                        echo 'class="active"';
                                                    } ?>>
                                    <h2>
                                        <a href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>portfolio.php">
                                            Portfólio
                                        </a>
                                    </h2>
                                </li>
                                <li <?php if ($active == 'contato') {
                                                        echo 'class="active"';
                                                    } ?>>
                                    <h2>
                                        <a href="<?php if ($alternativeUrl) {
                                                        echo '../';
                                                    } ?>contato.php">
                                            Contato
                                        </a>
                                    </h2>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end header -->