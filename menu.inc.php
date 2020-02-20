<!-- Представление всех меню главной страницы -->
<?php
	$menu1 = array(
		"Пункт меню1:"=>"index.php?id=item1", 
		"Пункт меню2:"=>"index.php?id=item2");
		//"Пункт меню3:"=>"index.php?id=item3");
?>	

<div>
			<h4>Главная:</h4>
			<?php
				getMenu($menu1);
			?>
</div>
