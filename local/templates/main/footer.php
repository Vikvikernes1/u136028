<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>

</div>

<div id="templatemo_footer">
    Copyright © <?echo date("Y") ?> <a href="https://vk.com/axeofwrath">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/copyright.php"
            )
        ); ?>
    </a> | Designed by
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => SITE_TEMPLATE_PATH."/include_areas/".LANGUAGE_ID."/designer.php"
        )
    ); ?>
    </a>
    <div class="cleaner"></div>
</div>

</div>

</body>
</html>