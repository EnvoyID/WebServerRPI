<!-- Представление всех меню главной страницы -->
<?php
	$menu1 = array(
		"Items1:"=>"index.php?id=item1", 
		"Items2:"=>"index.php?id=item2",
		"Items3:"=>"index.php?id=item3");
?>	
<table >
	<tr>
		<td class="line">
			<h4>Главная:</h4>
			<?php
				getMenu($menu1);
			?>
		</td>
	</tr>
</table>
