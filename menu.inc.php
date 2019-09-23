<!-- Представление всех меню главной страницы -->
<?php
	$menu1 = array(
		"Items1:"=>"index.php?id=item1", 
		"Items2:"=>"index.php?id=item2",
		"Items3:"=>"index.php?id=item3");
?>	

	<h4>Главная:</>
	<?php
		getMenu($menu1);
	?>	
	