<?php
  include "statistic/stat.php";
?>
<!-- // <?php //header('refresh: 30'); ?> -->
<?php
	include "lib.inc.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Web</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<table >

<tr>
	<td colspan="2" align="center">
		<!-- Верхняя часть страницы -->
		<?php
			include "top.inc.php";
		?>
	</td>
</tr>

<tr> 
	<td class="include_menu">
		<!-- Меню -->
		<?php
			 include "menu.inc.php";
			//echo "sfg fdh dfgjfghfd dfhdfh j";
		?> 
	</td>
	<td>
		<!-- Область основного контента -->
		<?php
			/* проверяем на существование $_GET['id'] */
			if(!isset($_GET['id'])){
				$_GET['id'] = "index.html";
			}
				$id = trim(strip_tags($_GET['id']));
					switch($id){
					case 'prefix': include "content/ppln/prefix.html";break;
					case 'item3': include "statistic/seestats.php";break;
					default: include 'index_test.html';
					} 
		?>
	</td>
</tr>

<tr>
	<td colspan="2" align="center">
		<!-- Нижняя часть страницы -->
		<?php
			include "bottom.inc.php";
		?>
	</td>
</tr>
</table>

</body>
</html>
