<?php
if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die();

global $USER;

\Bitrix\Main\Loader::includeModule('homework.control');

use  HOMEWORK\HOMEWORKCONTROL;

if(!$USER->IsAdmin())
{
    exit;
}

if ($_REQUEST['saveHOMEWORK'])
{
    if (HOMEWORKCONTROL\HomeworkManager::AddHomework($_REQUEST["student"], $_REQUEST["task"], $_REQUEST["subject"]))
    {
        $arResult['OK'] = 'Изменения успешно сохранены';
    }
    else
    {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}

$this->IncludeComponentTemplate();
?>