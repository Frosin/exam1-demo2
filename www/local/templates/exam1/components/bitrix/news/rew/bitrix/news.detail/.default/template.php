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
<hr>
<div class="review-block">
<div class="review-text">
<div class="review-text-cont"><?=$arResult["DETAIL_TEXT"]?></div>
<div class="review-autor">
<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>
</div>
</div>
<div style="clear: both;" class="review-img-wrap"><img src="<?if (is_array($arResult["PREVIEW_PICTURE"])):?><?=$arResult["PREVIEW_PICTURE"]["SRC"]?><?else:?><?=SITE_TEMPLATE_PATH."/img/no_photo.jpg"?><?endif;?>" alt="img"></div>
</div>
<div class="exam-review-doc">
<?
$docCount = 0;
if (is_array($arResult["PROPERTIES"]["DOC"]["VALUE"]))
$docCount = count($arResult["PROPERTIES"]["DOC"]["VALUE"]);
?>
<?if ($docCount > 0):?>
<p>Документы:</p>
<?for ($i = 0; $i < $docCount; $i++){?>
<div class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a href="<?=CFile::GetPath($arResult["PROPERTIES"]["DOC"]["VALUE"][$i])?>">Файл <?=$i+1?></a></div>
<?}?>
<?endif;?>
</div>
<hr>
