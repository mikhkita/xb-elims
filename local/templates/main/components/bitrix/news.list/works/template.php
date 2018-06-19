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
<div class="p_practice_menu clearfix">
	<? $index = 0; ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
			$index++;
			$afterImage = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], Array("width" => 365*1.5, "height" => 200*1.5), BX_RESIZE_IMAGE_EXACT );
		?>
		<div class="p_practice_menu_item pract-<?=$index?>" id="practice-<?=$index?>" style="background-image: url('<?=$afterImage["src"]?>');"  data-mdbtn="<?=$index?>">
			<div class="p_practice_menu_vcard">
				<h5><?=$arItem["NAME"]?></h5>
			</div>
		</div>
	<?endforeach;?>
</div>	
<div class="hidden">
	<? $index = 0; ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
			$index++;
			$afterImage = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], Array("width" => 565*1.5, "height" => 300*1.5), BX_RESIZE_IMAGE_EXACT );
			$beforeImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 565*1.5, "height" => 300*1.5), BX_RESIZE_IMAGE_EXACT );
		?>
		<div class="p_practice_slider" id="pract-<?=$index?>">
			<div data-slide-id="<?=$index?>" >
				<div class="p_practice_menu_info_triangle">
					<div class="p_practice_menu_info_triangle_im"></div>
				</div>				
				<div class="p_practice_slide">
					<div class="b-block">
						<div class="map-cont-close"></div>
						<h2><?=$arItem["NAME"]?></h2>
						<div class="p_practice_slide_top clearfix">
							<div class="p_practice_slide_img left">
								<h4>До</h4>	
								<div class="p_practice_slide_img_before" style="background-image: url('<?=$beforeImage["src"]?>');"></div>
							</div>
							<div class="p_practice_slide_img right">
								<h4>После</h4>	
								<div class="p_practice_slide_img_after" style="background-image: url('<?=$afterImage["src"]?>');"></div>
							</div>
						</div>
						<? if( $arItem["PREVIEW_TEXT"] && 0 && $arItem["PREVIEW_TEXT"] != "" ): ?>
							<div class="p_practice_slide_bot clearfix">
								<div class="p_practice_slide_details left">
									<?=$arItem["PREVIEW_TEXT"]?>
									<h4>Описание</h4>
									<h3>Проблема</h3>
									<p>В клинику «Дента-Русь» обратилась 44-х летняя пациентка с жалобами на эстетическую несостоятельность улыбки, старые композитные реставрации, поменявшие цвет.
									</p>
									<br>
									<p>Объективно было отмечено: несостоятельные композитные реставрации зубов верхней челюсти, нарушение краевого прилегания композита,
									</p>
									<br>
									<h3>Решение</h3>
									<p>После всех предложенных вариантов решения данных проблем, пациент предпочел остановиться на керамических винирах, изготовленных с помощью цифровых технологий на зубах верхней и нижней челюсти.
									</p>
								</div>
								<div class="p_practice_slide_executor right">
									<h4>Работу проводил</h4>
									<div class="p_practice_slide_img_executor" style="background-image: url('./i/doctor-1.jpg');"></div>
									<h3>Иоанн Ионнов Иоаннович</h3>
									<p>Стоматолог-терапевт</p>
								</div>
							</div>
						<? endif; ?>
					</div>						
				</div>					
			</div>																			
		</div>	
	<?endforeach;?>
</div>	