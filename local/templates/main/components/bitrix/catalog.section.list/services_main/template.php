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
<div class="p_services_mobile_menu" id="accordion">
							<h3  class="icon-diagnostika"><span>Диагностика</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>
							<h3  class="icon-ortopedia"><span>ортопедия</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
							<h3  class="icon-ortodontia"><span>Ортодонтия</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
							<h3  class="icon-gigiena"><span>Профгигиена и отбеливание</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
							<h3  class="icon-terapevt"><span>Терапевтическая стоматология</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
							<h3  class="icon-estet"><span>Эстетическая стоматология</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
							<h3  class="icon-implant"><span>хирургия и имплантация</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
							<h3  class="icon-child"><span>детская стоматология</span></h3>
							<div>
								<a href="#">Лечение кариеса</a>
								<a href="#">Лечение зубов без бормашины</a>
								<a href="#">Лечение корневых каналов зубов</a>
								<a href="#">Лечение зубов под микроскопом</a>
								<a href="#">Лечение пульпита</a>
								<a href="#">Лечение десен</a>
								<a href="#">Лечение кариеса методом ICON</a>							
							</div>						
						</div>							
					</div>	

<div class="services-texts not-mobile">
	<? foreach ($arResult['SECTIONS'] as $key => $arItem): ?>
		<div data-id="<?=$arItem["ID"]?>" class="services-text-container<? if( $arItem["ID"] == 2 ): ?> show<? endif; ?>">
			<div class="services-text">
				<h3><?=$arItem["NAME"]?></h3>
				<p><?=$arItem["DESCRIPTION"]?></p>
				<a href="/services/#<?=$arItem["UF_CLASS"]?>">Список услуг</a>
			</div>
		</div>
	<? endforeach; ?>
</div>
<div class="services-images not-mobile">
	<? foreach ($arResult['SECTIONS'] as $key => $arItem): ?>
		<div data-id="<?=$arItem["ID"]?>" class="services-image img_<?=$arItem["UF_CLASS"]?><? if( $arItem["ID"] == 2 ): ?> show<? endif; ?>"></div>
	<? endforeach; ?>
</div>
<div id="services_menu" class="services-menu not-mobile">
	<ul >
		<? foreach ($arResult['SECTIONS'] as $key => $arItem): ?>
			<li><button data-id="<?=$arItem["ID"]?>"<? if( $arItem["ID"] == 2 ): ?> class="active"<? endif; ?>><?=$arItem["NAME"]?></button></li>
		<? endforeach; ?>
	</ul>
</div>

