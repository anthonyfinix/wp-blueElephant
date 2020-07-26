<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(  )?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class( ) ?>>
<header id="main-header">
        <div class="top-bar my-primary p-2 text-white">
            <div class="d-flex justify-content-between container">
                <div class="d-flex align-items-center">
                    <span class="material-icons mr-2 md-18">mail</span>
                    dummy@gmail.com
                </div>
                <div>
                    <img class="mr-4" src="<?php echo get_template_directory_uri().'./img/facebook.svg'?>" width="8px" alt="">
                    <img src="<?php echo get_template_directory_uri().'/img/youtube.svg'?>" width="16px" alt="">
                </div>
            </div>

        </div>
        <nav id="main-navigation-bar" class="navbar navbar-expand-lg navbar-light bg-light shadow py-3">
            <div class="container">
                <a class="navbar-brand font-weight-bolder" href="#">BLUE ELEPHANT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./about-us">About Us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="./contact-us">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>