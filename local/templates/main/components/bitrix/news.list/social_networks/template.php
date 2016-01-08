<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
	<?if (!empty($arResult)):?>
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" width="32" height="32" alt="pic"></a>
		<?endforeach;?>
	<?endif?>