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
		<header>
		 <?php
			include "top.inc.php";
		 ?>
		</header>
	</td>
</tr>

<tr>
	<td>
		<!-- Меню -->
		<?php
			include "menu.inc.php";
		?> 
	</td>
	<td width=100% >
		<!-- Область основного контента -->
		<?php
			/* проверяем на существование $_GET['id'] */
			if(!isset($_GET['id'])){
				$_GET['id'] = "index.html";
			}
				$id = trim(strip_tags($_GET['id']));
					switch($id){
					case 'prefix': include "content/ppln/prefix.html";break;
					default: include 'index.html';
					} 
		?>
	</td>
</tr>

<tr>
	<td colspan="2" align="center">
		<!-- Нижняя часть страницы -->
		<footer>
		 <?php
			include "bottom.inc.php";
		 ?>
		</footer>
	</td>
</tr>
</table>

</body>
</html>
