<!-- Представление всех меню главной страницы -->
<?php
	$menu1 = array(
		"Система префиксов:"=>"index.php?id=prefix", 
		"Зоны обслуживания отдела маркетинга:"=>"index.php?id=marketing",
		"Телефонный справочник:"=>"index.php?id=telephon");
	$menu2 = array(
		"Оптимизация:"=>"index.php?id=cmd",
		"Консольные команды Linux:"=>"index.php?id=instr",
		"Горячие клавиши Windows:"=>"index.php?id=keywin",
		"Полезные ссылки в интеренете:"=>"index.php?id=inet", 
		"Inno Setup HowTo:"=>"index.php?id=innosetup", 
		"VIM шпаргалка:"=>"index.php?id=vim"); 
	$menu3 = array(
		"Список сканеров с поддержкой в SANE, \n
		используемых в AFIS/АДИС:"=>"index.php?id=scanner",
		"Список фотоаппаратов поддерживаемых в ADIS"=>"index.php?id=photo",
		"Полезные команды для работы с АДИС"=>"index.php?id=adis",
		"Примеры тестовых дактилокарт *.f для печати"=>"index.php?id=print",
		"АДИС описание программ"=>"index.php?id=poinst",
		"Система отчётов"=>"index.php?id=surv");
	$menu4 = array(
		"Системные настройки"=>"index.php?id=sys1",
		"Безопасность"=>"index.php?id=sys2",
		"Недокументированное"=>"index.php?id=sys3",
		"Сертифицированные по ФСТЭК ОС"=>"index.php?id=sys4",
		"Работа с изображением"=>"index.php?id=sys5");
	$menu7 = array(
		"Printform"=>"index.php?id=printbng");
	$menu5 = array(
		"EGM"=>"index.php?id=egm",
		"Jandarma"=>"index.php?id=jandarma",
		"CDM"=>"index.php?id=cdm",
		"BHUTAN"=>"index.php?id=bhutan",
		"Update Web server"=>"index.php?id=updatelst",
		"Changes Turkish"=>"web2/index.php");
	$menu6 = array(
		"Видео - 1"=>"index.php?id=video1",
		"Видео - 2"=>"index.php?id=video2",
//		"Видео - 3"=>"index.php?id=video3",
//		"Видео - 4"=>"index.php?id=video4",
//		"Видео - 5"=>"index.php?id=video5",
		"Видео - 6"=>"index.php?id=video6");
?>	
<table >
	<tr>
		<td class="line">
			<h4>Главная:</h4>
			<?php
				getMenu($menu1);
			?>
			<h4>Информационная:</h4>
			<?php
				getMenu($menu2);
			?>
			<h4>Техническая:</h4>
			<?php
				getMenu($menu3);
			?>
			<h4>Документация :</h4>
			<?php
				getMenu($menu4);
			?>
			<h4>Bangladesh :</h4>
			<?php
				getMenu($menu7);
			?>	
			<h4>Turkish project :</h4>
			<?php
				getMenu($menu5);
			?>
			<h4>Видеорегистратор :</h4>
			<?php
				getMenu($menu6);
			?>
		</td>
	</tr>
</table>
