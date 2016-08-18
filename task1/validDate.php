<?php

//YYYY-MM-DD
function validDay($day) {
	$day_regex = '/^(0?[1-9]|[1-2][0-9]|3[0-1])$/';
	
	if (!preg_match($day_regex, $day, $matches)) {	
		//echo "wrong day";		
		return  false;
	}	
	//echo "valid day";
	return true;
}

function validMonth($month) {
	$month_regex = '/^(0?[1-9]|1[012])$/';

	if (!preg_match($month_regex, $month, $matches)) {
		return  false;
	}
	return true;
}

function validYear($year) {
	$year_regex = '/^\d{4}$/';

	if (!preg_match($year_regex, $year, $matches)) {
		return  false;
	}
	return true;
}

$errors = [];

$day = empty($_POST['day']) ? '' : $_POST['day'];
$month = empty($_POST['month']) ? '' : $_POST['month'];
$year = empty($_POST['year']) ? '' : $_POST['year'];

if ($_POST) {
		
		if (!validDay($day)) {
			$errors[] = 'Invalid day';
		}
		
		if (!validMonth($month)){
			$errors[] = 'Invalid month';
		}
		if (!validYear($year)){
			$errors[] = 'Invalid year';
		}
		
	//return empty($errors);	
}	
//var_dump($errors);

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Date</title>
	
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/task1.css" />
		
	</head>
	
	<body>
	
	<div class="container">
	
		<div>
			<form action="" method="post">	
				
				<?php if (!empty($errors)): ?>
					<div class="errors">
						<?php foreach ($errors as $e): ?>
						<p><?= htmlspecialchars($e); ?></p>
						<?php endforeach;?>
					</div>
					<?php endif;?>
					
				<div>
					<label for="day">Day: </label>
					<input id="day" name="day" type="text" placeholder="dd" value="<?= htmlentities($day, ENT_QUOTES, 'UTF-8'); ?>" />
				</div>	
				
				<div>
					<label for="month">Month: </label>
					<input id="month" name="month" type="text" placeholder="mm" value="<?= htmlentities($month, ENT_QUOTES, 'UTF-8'); ?>" />
				</div>				
					
				<div>
					<label for="year">Year: </label>
					<input id="year" name="year" type="text" placeholder="yyyy" value="<?= htmlentities($year, ENT_QUOTES, 'UTF-8'); ?>" />
				</div>
				
				<button type="submit">Check</button>
			</form>
		</div>
		
	</div>
	</body>
</html>