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
					case 'telephon': include "content/ppln/telephon.html";break;
					case 'cmd': include 'content/information/comand/index_cmd.html';break;
					case 'instr': include 'content/information/comand/index.html';break;
					case 'innosetup': include 'content/information/innosetup/index.html';break;
					case 'vim': include 'content/information/vim/vim.html';break;
					case 'scanner': include 'content/ppln/afis_adis_scanner.html';break;
					case 'marketing': include 'content/ppln/marketing.html';break;
					case 'inet': include 'internet.php';break;
					case 'photo': include 'content/ppln/phexpert_supported_photo.html';break;
					case 'poinst': include 'content/ppln/adispo_howto.html';break;
					case 'adis': include 'content/ppln/adis_howto.html';break;
					case 'print': include 'content/ppln/adis_test_print.html';break;
					case 'sys1': include 'content/os/index_sys1.html';break;
					case 'keywin': include 'content/os/win/index_key.html';break;
        				case 'sys4': include 'content/os/index.html';break;
        				case 'sys5': include 'content/os/imagemagick.html';break;
					case 'video1': include 'video/index1.html';break;
					case 'video2': include 'video/index2.html';break;
					case 'video3': include 'video/index3.html';break;
					case 'video4': include 'video/index4.html';break;
					case 'video5': include 'video/index5.html';break;
					case 'video6': include 'video/index6.html';break;
					case 'surv': include 'surv/index.html';break;
					/* Turkish project */
					case 'cdm': include 'content/turkish/cdm/cdm_howto.html';break;
					case 'egm': include 'content/turkish/egm/egm_howto.html';break;
					case 'jandarma': include 'content/turkish/jandarma/jandarma_howto.php';break;
					case 'bhutan': include 'content/turkish/bhutan/bhutan_howto.html';break;
					case 'updatelst': include 'content/turkish/index.php';break;
					case 'printbng': include 'content/bangladesh/print.html';break;
			//		case 'changestur': include 'web2/index.php';break;
					/* --------------- */
					default: include 'index.html';
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
