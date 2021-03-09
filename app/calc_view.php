<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator 2</title>
</head>
<body>
<?php if (!isset($oprocentowanie)) $oprocentowanie = "5%" ?>
<form action="<?php print(_APP_URL);?>/app/calc_kr.php" method="get">
	<label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>"/>
	<br />
	<label for="id_y">Czas : </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>"/>
	<br />
	<label for="id_op">Oprocentowanie: </label>
	<select name="op">
		<option value="5%" <?php if ($oprocentowanie == '5%')  print('selected'); ?>>5%</option>
		<option value="10%" <?php if ($oprocentowanie == '10%')  print('selected'); ?>>10%</option>
		<option value="20%" <?php if ($oprocentowanie == '20%')  print('selected'); ?>>20%</option>
		<option value="50%" <?php if ($oprocentowanie == '50%')  print('selected'); ?>>50%</option>
	</select>
	<br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #af0; width:300px;">
<?php echo 'Rata: '.round($result); ?>
</div>
<?php } ?>

</body>
</html>