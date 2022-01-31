<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>

    <?php wp_head(); ?>


</head>

<body>
    <div class="box">
        <div class="header" id="header">
            <div class="header-conteiner">
                <div class="header-menu">
                    <div class="header-logo">
                        <p>Logo</p>
                    </div>
                    <div class="menu-nav">
                        <ul>
                            <li class=" menu-li white-active">
                                <a href="#start" class=" menu-a active"> Start</a>
                            </li>
                            <li class="menu-li">
                                <a href="#about" class=" menu-a">About me</a>
                            </li>
                            <li class="menu-li">
                                <a href="#work" class=" menu-a ">Work</a>
                            </li>
                            <li class="menu-li">
                                <a href="#contact" class=" menu-a ">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <span class="burger-menu" onclick="openNav()">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" alt="burger">
                    </span>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="close">
                        </a>
                        <ul>
                            <li>
                                <a href="#Start"> Start</a>
                            </li>
                            <li>
                                <a href="#about">About me</a>
                            </li>
                            <li>
                                <a href="#work">Work</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-title">
                    <h1>May I introduce myself?</h1>
                    <div class="header-line"></div>
                    <div class="header-subtitle">
                        Frontend Design | UI/UX Design
                    </div>
                </div>
                <button class="header-btn">
                    GO AHEAD
                </button>
            </div>
        </div>