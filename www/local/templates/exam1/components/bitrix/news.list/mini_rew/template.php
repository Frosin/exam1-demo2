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
?>

                    <div class="item-wrap">
		                     <div class="rew-footer-carousel">
								
							<?foreach($arResult["ITEMS"] as $arItem):?>	
								<div class="item">
									<div class="side-block side-opin">
										<div class="inner-block">
											<div class="title">
												<div class="photo-block">
													<img src="
													<?if (is_array($arItem["PREVIEW_PICTURE"])):?><?=CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>30, 'height'=>30), BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"]?><?else:?><?=SITE_TEMPLATE_PATH."/img/no_photo_left_block.jpg"?><?endif;?>" alt="">
												</div>
												<div class="name-block"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
												<div class="pos-block"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></div>
											</div>
											<div class="text-block"><?=$arItem["PREVIEW_TEXT"]?></div>
										</div>
									</div>
								</div>
							<?endforeach;?>	
							</div>
					</div>
