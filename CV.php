<!DOCTYPE HTML>
<html>
<head>
	<title>Мое резюме</title>
</head>
<body>

<?php
function MyCode () {
	echo 'Раздел завершен. Переходим к следующему...';
}

//Common information about me
echo '<h2>Общая информация</h2>';
$name = "Екатерина";
$surname = "Влащенко";
$Ybirth = "1997";
$age = 2020 - $Ybirth;
define('gender', 'женщина', 'true');
echo "Это " . $name . " " . $surname . ", ей почти " . $age . " года. Она " . Gender . ". И последнее слово предыдущего предложения - это константа в языке PHP.<br />";

$smoking = false;
$swimming = true;

MyCode();
echo '<br />';
//Education
$education = array(
'School'=>'Гимназия №5',
'Schoolyear'=>'2015',
'University'=>'Государственный универститет управления',
'University_degree'=>'Бакалавр',
'Speciality'=>'Управление международными перевозками',
'Features' => array('был только HTML', 'В основном учили работе в Excel')
);
echo '<h2>Образование</h2>';
echo $name . " - " . $education['University_degree'] . ". Одна из особенностей обучения в " . $education['University'] . 'состояла в том, что ' . $education['Features'][0] . '.<br />';

MyCode();
//Skills

	$Lang1 = "English";
	$Lang1_level = "B2";
	$Lang2 = "German";
	$Lang2_level = "A1";
	echo '<h2> My Skills </h2>';
	echo '<p> Я знаю ' . $Lang1 . ' на уровне ' . $Lang1_level . '.</p><br />';
	echo '<p> А еще я знаю ' . $Lang2 . ' на уровне ' . $Lang2_level . '.</p><br />';

$Programming_skills = array ('PHP', 'JavaScript', 'CSS', 'HTML', 'SQL');
// Уровень знаний
echo '<h2>Навыки, знания и умения</h2>';
echo 'Я самостоятельно изучила основы ' . $Programming_skills . '.<br />';
echo 'Самым сложным для меня стал ' . $Programming_skills[1] . ', в частности - ES6.<br />';

MyCode();
// О дисциплине
$_late = 10;
$_in_time = 9;
echo 'Я приезжаю на работу в ' . $_in_time . ' часов.<br /> Мне говорят:'
if ( $i == $_in_time) {
	echo 'Вы приехали вовремя!';
} else {
	echo 'Купите себе часы!';
}
echo '<br />';

MyCode();
echo '<br />'
// возраст
echo '<h3>Возраст кандидата с циклом IF</h3>';
echo $age '<br />';
if ( $age < 22 ) {
	echo 'Кандидат младше назначенного возраста';
} 
else {
	echo 'Кандидату 22 года или же он старше';
}
echo '<h4>Мое сильное желание</h4>';
for ( $i = 1; $i <= 6; $i ++) {
	echo 'Я стану отличным программистом <br />';
}

echo '<h4>Разница между двойными и одинарными кавычками</h4>';
echo "N: $a"; // выведет 22
echo 'n: $a'; // выведет a

?>
</body>
</html>
