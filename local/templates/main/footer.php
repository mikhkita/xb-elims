			<? switch ($GLOBALS["page"]) {
				case 'about':?>
</div>			
<div class="b-about b-gray-block b-about-page">
	<div class="b-block">
		<div class="b-about-content clearfix">
			<div class="b-about-left">
				<div class="b-about-header clearfix">
					<div class="b-about-header-item">
						<h2>Стоматология</h2>
					</div>
					<div class="b-about-header-item">
						<h2 class="blue">Smile</h2>
						<h2 class="red">Clinic</h2>
						<p>
							 Professional
						</p>
					</div>
				</div>
				<div class="p">
					 <?=includeArea("about-main-text")?>
				</div>
 <a data-fancybox="" href="https://www.youtube.com/watch?v=2R4w04xAzYg" class="b-about-video">
				<div class="b-video-back">
				</div>
				<div class="b-video-translucent">
				</div>
				<div class="b-video">
					<div class="b-video-circle">
					</div>
					<div class="b-video-play">
					</div>
				</div>
 </a>
			</div>
			<div class="b-about-right">
				<div class="b-about-list">
					<div class="b-about-item">
						<div class="b-about-img">
							<div class="icon-situation">
							</div>
						</div>
						<div class="b-about-text">
							<h3><?=includeArea("about-1-t")?></h3>
							<div class="p">
								 <?=includeArea("about-1-p")?>
							</div>
						</div>
					</div>
					<div class="b-about-item">
						<div class="b-about-img">
							<div class="icon-equipment">
							</div>
						</div>
						<div class="b-about-text">
							<h3><?=includeArea("about-2-t")?></h3>
							<div class="p">
								 <?=includeArea("about-2-p")?>
							</div>
						</div>
					</div>
					<div class="b-about-item">
						<div class="b-about-img">
							<div class="icon-spec">
							</div>
						</div>
						<div class="b-about-text">
							<h3><?=includeArea("about-3-t")?></h3>
							<div class="p">
								 <?=includeArea("about-3-p")?>
							</div>
						</div>
					</div>
					<div class="b-about-item">
						<div class="b-about-img">
							<div class="icon-price">
							</div>
						</div>
						<div class="b-about-text">
							<h3><?=includeArea("about-4-t")?></h3>
							<div class="p">
								 <?=includeArea("about-4-p")?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-center">
 <a href="/about/" class="b-btn">Подробнее о клиниках</a>
		</div>
	</div>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"photo_about",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","IBLOCK_SECTION_ID"),
		"FILTER_NAME" => "servSectionFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("SPEC",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?>
<div>

					<?break;
			} ?>
			<? if( !$GLOBALS["isMain"] ): ?>
				</div>
			<? endif; ?>
		</div>
		<div class="b-footer b-gray-block">
			<div class="b-block">
				<div class="b-footer-top clearfix">
					<div class="b-footer-left">
						<a href="/" class="b-footer-logo"></a>
						<div class="b-footer-social-cont">
							<ul class="b-footer-social">
								<li><a href="https://vk.com/smileclinic_tomsk" class="icon-vk" target="_blank">Вконтакте</a></li>
								<li><a href="https://www.instagram.com/smileclinic_tomsk/" class="icon-instagram" target="_blank">Instagram</a></li>
								<li><a href="https://tomsk.flamp.ru/firm/smajjl_klinik_stomatologicheskaya_klinika-422741746485367" class="icon-flamp" target="_blank">Flamp</a></li>
							</ul>
							<div class="b-footer-timetable-mobile">
								<h4>График работы:</h4>
								<p>Пн – Вс 09:00 – 20:00</p>
							</div>
						</div>
					</div>
					<div class="b-footer-right">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
							"COMPONENT_TEMPLATE" => ".default",
								"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
								"MENU_CACHE_TYPE" => "N",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
									0 => "",
								),
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								"CLASS" => "b-footer-menu clearfix"
							),
							false
						);?>
						<div class="b-footer-address">
							<div class="b-footer-address-item">
								<div class="icon-pin"></div>
								<div class="b-top-head"><?=includeArea("addr-1")?></div>
								<?=includeArea("phone-1")?>
								<div class="b-address-timetable"><?=includeArea("time")?></div>
							</div>
							<div class="b-footer-address-item">
								<div class="icon-pin"></div>
								<div class="b-top-head"><?=includeArea("addr-2")?></div>
								<?=includeArea("phone-2")?>
								<div class="b-address-timetable"><?=includeArea("time")?></div>
							</div>
							<div class="b-footer-address-item b-timetable">
								<div class="icon-clock"></div>
								<div class="b-top-head"><?=includeArea("schedule")?></div>
								<div><?=includeArea("time")?></div>
							</div>
							<a href="#b-popup-register" class="fancy b-btn b-btn-red">Записаться на прием</a>
						</div>
					</div>
				</div>
				<div class="b-footer-bottom clearfix">
					<div class="b-footer-bottom-left">
						<div class="b-footer-copyright">© 2018 ООО «Александр»</div>
						<a href="#" class="b-btn-dashed">Политика конфиденциальности</a>
					</div>
					<div class="b-redder">
						<span>Разработка сайта:</span>
						<a href="http://redder.pro/" class="b-redder-logo" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="b-menu-overlay" id="b-menu-overlay" style="display: none;"></div>
	</div>

	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup b-popup-register" id="b-popup-register">
			<h2>Запись на прием</h2>
			<form id="b-form-register" class="b-form-register" action="kitsend.php" method="post">
				<div class="b-input">
					<input type="text" id="name" name="name" placeholder="Ваше имя" required/>
				</div>
				<div class="b-input">
					<input type="text" id="phone" name="phone" placeholder="Ваш телефон" required/>
				</div>
				<div class="b-input b-textarea">
					<textarea id="comment" name="comment" placeholder="Ваш комментарий"></textarea>
				</div>

				<!-- <div class="clearfix">
					<div class="b-input b-input-half">
						<input type="text" id="date" name="date" placeholder="Дата" required/>
						<div class="hidden-datepicker"></div>
					</div>
					<div class="b-input b-input-half b-input-time">
						<input type="text" id="time" name="time" placeholder="Время" required/>
						<div class="b-time-list">
							<ul>
								<li>
									<input id="hour-9" type="radio" data-hour="9" name="time-select">
									<label for="hour-9">09:00</label>
								</li>
								<li>
									<input id="hour-10" type="radio" data-hour="10" name="time-select">
									<label for="hour-10">10:00</label>
								</li>
								<li>
									<input id="hour-11" type="radio" data-hour="11" name="time-select">
									<label for="hour-11">11:00</label>
								</li>
								<li>
									<input id="hour-12" type="radio" data-hour="12" name="time-select">
									<label for="hour-12">12:00</label>
								</li>
							</ul>
							<ul>
								<li>
									<input id="hour-13" type="radio" data-hour="13" name="time-select">
									<label for="hour-13">13:00</label>
								</li>
								<li>
									<input id="hour-14" type="radio" data-hour="14" name="time-select">
									<label for="hour-14">14:00</label>
								</li>
								<li>
									<input id="hour-15" type="radio" data-hour="15" name="time-select">
									<label for="hour-15">15:00</label>
								</li>
								<li>
									<input id="hour-16" type="radio" data-hour="16" name="time-select">
									<label for="hour-16">16:00</label>
								</li>
							</ul>
							<ul>
								<li>
									<input id="hour-17" type="radio" data-hour="17" name="time-select">
									<label for="hour-17">17:00</label>
								</li>
								<li>
									<input id="hour-18" type="radio" data-hour="18" name="time-select">
									<label for="hour-18">18:00</label>
								</li>
								<li>
									<input id="hour-19" type="radio" data-hour="19" name="time-select">
									<label for="hour-19">19:00</label>
								</li>
							</ul>
						</div>
					</div>
				</div> -->

				<div class="b-checkbox">
					<input id="checkbox-politics" type="checkbox" name="politics" checked required>
					<label for="checkbox-politics">
						<div class="b-checked icon-checked"></div>
						<p>Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности</p>
					</label>
				</div>
				<input type="hidden" name="subject" value="Запись на прием">
				<a href="#" class="b-btn b-btn-red ajax">Отправить заявку</a>
				<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
			</form>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<h2>Спасибо!</h2>
			<p>Ваша заявка успешно отправлена. Наш менеджер свяжется с Вами в ближайшее время.</p>
			<a href="#" class="b-btn b-btn-red" onclick="$.fancybox.close(); return false;">Закрыть</a>
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h2>Спасибо!</h2>
			<p>Ваша заявка успешно отправлена. Наш менеджер свяжется с Вами в ближайшее время.</p>
			<a href="#" class="b-btn b-btn-red" onclick="$.fancybox.close(); return false;">Закрыть</a>
		</div>
		<!-- <div class="b-thanks b-popup" id="b-popup-error">
			<h2>Ошибка отправки</h2>
			<p>Не удалось отправить заявку.<br>Попробуйте повторить попытку или позвоните по номеру 40-30-20.</p>
			<a href="#" class="b-btn b-btn-red" onclick="$.fancybox.close(); return false;">Закрыть</a>
		</div> -->
	</div>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery-ui.min.js"></script>
	<? if( isset( $GLOBALS["depends"][$GLOBALS["page"]] ) ): ?>
		<? foreach ($GLOBALS["depends"][$GLOBALS["page"]]["js"] as $scriptName): ?>
			<script type="text/javascript" src="<?=$scriptName?>"></script>
		<? endforeach; ?>
	<? endif; ?>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/KitAnimate.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/KitSend.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/slick.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/slideout.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.enllax.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/mask.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/jquery.autosize.input.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/html/js/main.js"></script>
	<? if( isset( $GLOBALS["depends"][$GLOBALS["page"]] ) ): ?>
		<? foreach ($GLOBALS["depends"][$GLOBALS["page"]]["js_last"] as $scriptName): ?>
			<script type="text/javascript" src="<?=$scriptName?>?<?=$GLOBALS["version"]?>"></script>
		<? endforeach; ?>
	<? endif; ?>

	<? if($_SERVER["HTTP_HOST"] == "smileclinics.ru" && !$USER->IsAuthorized() ): ?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		    (function (d, w, c) {
		        (w[c] = w[c] || []).push(function() {
		            try {
		                w.yaCounter48610781 = new Ya.Metrika({
		                    id:48610781,
		                    clickmap:true,
		                    trackLinks:true,
		                    accurateTrackBounce:true,
		                    webvisor:true
		                });
		            } catch(e) { }
		        });

		        var n = d.getElementsByTagName("script")[0],
		            s = d.createElement("script"),
		            f = function () { n.parentNode.insertBefore(s, n); };
		        s.type = "text/javascript";
		        s.async = true;
		        s.src = "https://mc.yandex.ru/metrika/watch.js";

		        if (w.opera == "[object Opera]") {
		            d.addEventListener("DOMContentLoaded", f, false);
		        } else { f(); }
		    })(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/48610781" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	<? endif; ?>
	<!-- Begin LeadBack code {literal} -->
	<script>
	    var _emv = _emv || [];
	    _emv['campaign'] = 'b952fb76427d6aa96a15785e';
	    
	    (function() {
	        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
	        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
	        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
	    })();
	</script>
	<!-- End LeadBack code {/literal} -->
</body>
</html>