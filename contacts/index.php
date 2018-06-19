<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetPageProperty("keywords", "где находится smile clinic, контакты smile clinic");
$APPLICATION->SetPageProperty("description", "Контакты филиалов клиники Smile Clinic");
$APPLICATION->SetTitle("Контакты");
?>

<div class="b-contacts clearfix">
	<div class="b-contacts-left b-text">
		<h3>Клиника на Ленина:</h3>
		<ul>
			<li><b>Адрес:</b> г. Томск, пр. Ленина, 186</li>
			<li><b>Телефон:</b> <a href="tel:+73822403020">+7 (3822) 40‒30‒20</a></li>
			<li><b>E-mail:</b> <a href="mailto:office@smileclinics.ru">office@smileclinics.ru</a></li>
			<li><b>График работы:</b> Пн&nbsp;–&nbsp;Вс 09:00&nbsp;–&nbsp;20:00</li>
		</ul>
		<h3>Клиника на Елизаровых:</h3>
		<ul>
			<li><b>Адрес:</b> г. Томск, ул. Елизаровых, 51</li>
			<li><b>Телефон:</b> <a href="tel:+73822403020">+7 (3822) 40‒30‒20</a></li>
			<li><b>E-mail:</b> <a href="mailto:office@smileclinics.ru">office@smileclinics.ru</a></li>
			<li><b>График работы:</b> Пн&nbsp;–&nbsp;Вс 09:00&nbsp;–&nbsp;20:00</li>
		</ul>
		<p><b>Улыбка</b> – самый простой способ осчастливить себя и других. Мы хотим, чтобы Вы улыбались как можно больше, и именно поэтому рады пригласить в Smile Clinic Professional.
			<br><br>Здесь Вас ждут только лучшие специалисты и самое современное оборудование, а доброжелательная атмосфера и приятный интерьер навсегда позволят преобразить Ваше представление о посещении стоматолога.
			<br><b>Мы ждем Вас!</b>
		</p>
	</div>
	<div class="b-contacts-right b-text">
		<div class="b-map" id="b-map"></div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>