<?php if (!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED) die(); ?>

<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>

<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">

    Id ученика:<br> <input type="text" name="student" value="<?= $_REQUEST["student"]; ?>"></br>
    Задание:<br> <input type="text" name="task" value="<?= $_REQUEST["task"]; ?>"></br>
    Id предмета:<br><input type="text" name="subject" value="<?= $_REQUEST["subject"]; ?>"></br>

    <br><input type="submit" name="saveHOMEWORK" value="Сохранить">
    <input type="reset" value="Очистить"></br>

</form>

