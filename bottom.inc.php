<table width="100%" border="1" bordercolor="#000000" frame="void" bgcolor="#F3F6FB">
	<tr>
		<td align="center">&copy , <?= date_default_timezone_set('UTC'); ?>
		<?=date('Y,F,d,l')?>;
		</td> <br>
<!--		<?php print_r( DateTimeZone::listIdentifiers( ) ); ?> -->		
		</td>
	</tr>
	<tr>
		<td align="center"><?=$_SERVER['SERVER_SOFTWARE']?></td>
	</tr>
</table>