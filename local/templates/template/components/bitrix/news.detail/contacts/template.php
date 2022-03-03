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
<ul class="contact-list">
	<li>
        <?if ($arResult['PROPERTIES']['PHONES']['VALUE']) {?>
		<span class="subtitle"><span class="ico-phone"></span>Телефон</span>
	        <?foreach ($arResult['PROPERTIES']['PHONES']['VALUE'] as $phone) {?>
				<a href="tel:+<?= preg_replace('~\D~', '', $phone)?>"><?= $phone;?></a> <br>
		    <?}?>
		<?}?>
		<a href="#callback" data-toggle="modal" class="main-btn contact-callback_btn">Заказать звонок</a>
	</li>
	<?if ($arResult['PROPERTIES']['ADDRESS']['~VALUE']['TEXT']) {?>
		<li>
			<span class="subtitle"><span class="ico-adress"></span>Адрес</span>
			<p>
				<?= $arResult['PROPERTIES']['ADDRESS']['~VALUE']['TEXT'];?>
			</p>
		</li>
	<?}?>
    <?if ($arResult['PROPERTIES']['WORK_TIME']['VALUE']) {?>
	<li>
		<span class="subtitle">
			<span class="ico-clock"></span>Режим работы
		</span>
		<?foreach ($arResult['PROPERTIES']['WORK_TIME']['VALUE'] as $key => $wTime) {
			if ($key%2 == 0) {
				?>
				<span class="min"><?= $wTime;?></span>
				<?
			} else {
				?>
				<?= $wTime;?>
				<?
			}
			?>
		<?}?>
	</li>
	<?}?>
	<?if ($arResult['PROPERTIES']['EMAIL']['VALUE']) {?>
		<li>
			<span class="subtitle"><span class="ico-email"></span>Написать нам</span>
			<a href="mailto:aghimeb@inbox.ru" class="contact-email"><?= $arResult['PROPERTIES']['EMAIL']['VALUE'];?></a>
		</li>
	<?}?>
</ul>
<?

if ($arResult['PROPERTIES']['COORDINATES']['VALUE']) {
	$coordinates = explode(',', $arResult['PROPERTIES']['COORDINATES']['VALUE']);
	?>
<div id="map"></div>
	<script>
        if ($('#map').length) {
            YaMapsShown = false;
            $(window).on("scroll load resize", function() {
                if (!YaMapsShown) {
                    if ($(window).scrollTop() + $(window).height() > $('#map').offset().top - 500) {
                        showYaMaps();
                        YaMapsShown = true;
                    }
                }
            });

            function showYaMaps() {
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
                document.getElementById("map").appendChild(script);
                script.onload = function() {
                    ymaps.ready(init);
                    var myMap;

                    function init() {
                        myMap = new ymaps.Map("map", {
                            center: [parseFloat(<?= $coordinates[0]?>),parseFloat(<?= $coordinates[1]?>)],
                            zoom: 16,
                            behaviors: ['default', 'scrollZoom'],
                        });
                        myMap.behaviors.disable('scrollZoom');
                        myMap.geoObjects.add(new ymaps.Placemark([parseFloat(<?= $coordinates[0]?>),parseFloat(<?= $coordinates[1]?>)], {
                            iconCaption: '<?= strip_tags($arResult['PROPERTIES']['ADDRESS']['~VALUE']['TEXT'])?>',
                        }, {
                            preset: 'islands#redCircleDotIcon',
                        }));
                    }
                }
            }
        }
	</script>
<?}?>