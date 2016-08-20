<?php

function validateDay($day){
	if ($day < 0 || $day == ''){
		return false;
	}
	return true;
}

function validateMonth($month){
	if ($month < 0 || $month == ''){
		return false;
	}
	return true;
}

function validateYear($year){
	if ($year < 0 || $year == ''){
		return false;
	}
	return true;
}

function validateHour($hour){
	if ($hour < 0 || $hour == ''){
		return false;
	}
	return true;
}

function validateMinutes($minutes){
	if ($minutes < 0 || $minutes == ''){
		return false;
	}
	return true;
}

function validateSeconds($seconds){
	if ($seconds < 0 || $seconds == ''){
		return false;
	}
	return true;
}

function validateFormat($format) {
	if (empty($format)) {
		return false;
	}
	return true;
}

$errors = [];
$errorFormat = [];

$day = empty($_POST['day']) ? '' : $_POST['day'];
$month = empty($_POST['month']) ? '' : $_POST['month'];
$year = empty($_POST['year']) ? '' : $_POST['year'];
$hour = empty($_POST['hour']) ? '' : $_POST['hour'];
$minutes = empty($_POST['minutes']) ? '' : $_POST['minutes'];
$seconds = empty($_POST['seconds']) ? '' : $_POST['seconds'];

$dayN = empty($_POST['dayN']) ? '' : $_POST['dayN'];
$monthN = empty($_POST['monthN']) ? '' : $_POST['monthN'];
$yearN = empty($_POST['yearN']) ? '' : $_POST['yearN'];
$hourN = empty($_POST['hourN']) ? '' : $_POST['hourN'];
$minutesN = empty($_POST['minutesN']) ? '' : $_POST['minutesN'];
$secondsN = empty($_POST['secondsN']) ? '' : $_POST['secondsN'];

$format = empty($_POST['format']) ? '' : $_POST['format'];

if ($_POST) {

	if (!validateDay($day) || !validateDay($dayN)) {
		$errors[] = 'Invalid day';
	}
	if (!validateMonth($month) || !validateMonth($monthN)) {
		$errors[] = 'Invalid month';
	}
	if (!validateYear($year) || !validateYear($yearN)) {
		$errors[] = 'Invalid year';
	}
	if (!validateHour($hour) || !validateHour($yearN)) {
		$errors[] = 'Invalid hour';
	}
	if (!validateMinutes($minutes) || !validateMinutes($minutesN)) {
		$errors[] = 'Invalid minutes';
	}
	if (!validateSeconds($seconds) || !validateSeconds($secondsN)) {
		$errors[] = 'Invalid seconds';
	}
	if (!validateFormat($format)){
		$errorFormat[] = 'Empty format';
	}
 
	if(empty($errors) && empty($errorFormat)){
		//creating timestamp form user`s input
		$ts = mktime($hour + $hourN, $minutes + $minutesN, $seconds + $secondsN, $month + $monthN, $day + $dayN, $year + $yearN);
				
		$result = date($format, $ts);	
		//var_dump(date($format, $ts));
	}
}

//var_dump($_POST);
?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Date/Time</title>
	
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/task2.css" />
	</head>
	
	<body>
		<div id="wrapper">
			<div id="form">
				<form action="" method="post">			
				
					<?php if (!empty($errors)): ?>
						<div class="errors">
							<?php foreach ($errors as $e): ?>
							<p><?= htmlspecialchars($e); ?></p>
							<?php endforeach;?>
						</div>
						<?php endif;?>
						
					<div>
						<label for="year">Year: </label>
						<input id="year" name="year" type="text"
						value="<?= htmlentities($year, ENT_QUOTES, 'UTF-8'); ?>"/>
						
						<input id="yearN" name="yearN" type="text" 
						value="<?= htmlentities($yearN, ENT_QUOTES, 'UTF-8'); ?>"/>
					</div>	
					
					<div>
						<label for="month">Month: </label>
						<input id="month" name="month" type="text"
						value="<?= htmlentities($month, ENT_QUOTES, 'UTF-8'); ?>" />
						
						<input id="monthN" name="monthN" type="text"
						value="<?= htmlentities($monthN, ENT_QUOTES, 'UTF-8'); ?>" />
					</div>	
					
					<div>
						<label for="day">Day: </label>
						<input id="day" name="day" type="text" 
						value="<?= htmlentities($day, ENT_QUOTES, 'UTF-8'); ?>"/>
						
						<input id="dayN" name="dayN" type="text"  
						value="<?= htmlentities($dayN, ENT_QUOTES, 'UTF-8'); ?>"/>
					</div>	
					
					<div>
						<label for="hour">Hour: </label>
						<input id="hour" name="hour" type="text" 
						value="<?= htmlentities($hour, ENT_QUOTES, 'UTF-8'); ?>"/>
						
						<input id="hourN" name="hourN" type="text"
						value="<?= htmlentities($hourN, ENT_QUOTES, 'UTF-8'); ?>"/>
					</div>	
					
					<div>
						<label for="minutes: ">Minutes: </label>
						<input id="minutes" name="minutes" type="text" 
						value="<?= htmlentities($minutes, ENT_QUOTES, 'UTF-8'); ?>"/>
						
						<input id="minutesN" name="minutesN" type="text" 
						value="<?= htmlentities($minutesN, ENT_QUOTES, 'UTF-8'); ?>"/>
					</div>	
					
					<div>
						<label for="seconds">Seconds: </label>
						<input id="seconds" name="seconds" type="text"
						value="<?= htmlentities($seconds, ENT_QUOTES, 'UTF-8'); ?>"/>
						
						<input id="secondsN" name="secondsN" type="text" 
						value="<?= htmlentities($secondsN, ENT_QUOTES, 'UTF-8'); ?>"/>
					</div>	
					
					<?php if (!empty($errorFormat)): ?>
						<div class="errors">
							<?php foreach ($errorFormat as $e): ?>
							<p><?= htmlspecialchars($e); ?></p>
							<?php endforeach;?>
						</div>
						<?php endif;?>
					<div>
						<label for="format">Format: </label>
						<input id="format" name="format" type="text" placeholder="format example - d.m.Y H:i:s"
						value="<?= htmlentities($format, ENT_QUOTES, 'UTF-8'); ?>"/>
						<input id="formatN" name="formatN" type="text" 
						<?php  if (!empty($result)) {?>
							value="<?= htmlentities($result, ENT_QUOTES, 'UTF-8'); ?>" />
						<?php }?>
						
					</div>	
					
					<button id="btn" type="submit">Calculate</button>
				</form>			
			</div>
			
			<div id="legend">  
				<table>
					<thead>
						<tr>
							<th>FORMAT</th>
							<th>DESCRIPTION</th>
							<th>EXAMPLE</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>D</td>
							<td>A textual representation of a day, three letters</td>
							<td>Mon - Sun</td>
						</tr>
						
						<tr>
							<td>d</td>
							<td>2 digit date, with leading zeros</td>
							<td>01-31</td>
						</tr>
						
						<tr>
							<td>N</td>
							<td>numeric representation of the day of the week</td>
							<td>1(monday)</td>
						</tr>
						
						<tr>
							<td>j</td>
							<td>Day of the month without leading zeros</td>
							<td>1-31</td>
						</tr>
						
						<tr>
							<td>m</td>
							<td>Numeric representation of a month, with leading zeros</td>
							<td>01-12</td>
						</tr>
						
						<tr>
							<td>n</td>
							<td>Numeric representation of a month, without leading zeroes</td>
							<td>1-12</td>
						</tr>
						
						<tr>
							<td>t</td>
							<td>Number of days in the given month 28-31</td>
							<td>28-31</td>
						</tr>
						
						<tr>
							<td>Y</td>
							<td>Year, 4 digits</td>
							<td>1999, 2000, 2015</td>
						</tr>
						
						<tr>
							<td>y</td>
							<td>Year , 2 digits</td>
							<td>99, 00, 15</td>
						</tr>
						
						<tr>
							<td>H</td>
							<td>Hours , 2 digits</td>
							<td>00, 15</td>
						</tr>
						
						<tr>
							<td>i</td>
							<td>Minutes , 2 digits</td>
							<td>00, 59</td>
						</tr>
						
						<tr>
							<td>s</td>
							<td>Seconds , 2 digits</td>
							<td>00, 59</td>
						</tr>
					</tbody>				
				</table>

			</div>
		</div>
	</body>
</html>