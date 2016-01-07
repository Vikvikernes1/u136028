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
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/styles.css", true); ?>

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
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/logo.php"
                    )
                ); ?>
            </h1>
        </div>
        <div id="templatemo_menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li class="last"><a href="#contactus">Contact</a></li>
            </ul>
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->

    <div id="templatemo_main">