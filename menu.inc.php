<!-- Представление всех меню главной страницы -->
<?php
	$menu1 = array(
		"Система префиксов:"=>"index.php?id=prefix", 
		"Зоны обслуживания отдела маркетинга:"=>"index.php?id=marketing",
		"Телефонный справочник:"=>"index.php?id=telephon");
?>	

<div>
			<h4>Главная:</h4>
			<?php
				getMenu($menu1);
			?>
</div>
