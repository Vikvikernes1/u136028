<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? IncludeTemplateLangFile(__FILE__); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= LANGUAGE_ID ?>">
<head>
    <title>
        <? $APPLICATION->ShowTitle(); ?>
    </title>

    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/styles.css", true); ?>

</head>
<body>
<? $APPLICATION->ShowPanel(); ?>

<span id="top"></span>
<div id="templatemo_wrapper">
    <div id="templatmeo_header">
        <div id="site_title">
            <h1>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/include_areas/" . LANGUAGE_ID . "/logo.php"
                    )
                ); ?>
            </h1>
        </div>
        <div id="templatemo_menu">
            <ul>
                <? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                ),
                    false
                ); ?>

                <!-- <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li class="last"><a href="#contactus">Contact</a></li> -->
            </ul>
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->

    <div id="templatemo_main">