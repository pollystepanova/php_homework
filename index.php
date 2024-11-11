<?php
//1 ЗАДАНИЕ
//написать скрипт который показывает сколько часов осталось между текущим временем и твоим днем рождения
// Устанавливаю свою дату рождения 1 октября
$mybirthdayDay = 1; 
$mybirthdayMonth = 10; 
// Получаю текущую дату и время
$currentDate = new DateTime();
// Определяю, когда будет следующий день рождения
$year = $currentDate->format('Y');
$birthdayDate = new DateTime("$year-$mybirthdayMonth-$mybirthdayDay");
// Если день рождения уже прошел в этом году, устанавливаем следующий год
if ($birthdayDate < $currentDate) {
    $birthdayDate->modify('+1 year');
}
// Рассчитываю разницу между текущей датой и следующим днем рождения
$interval = $currentDate->diff($birthdayDate);
// Перевожу разницу в часы
$hoursRemaining = ($interval->days * 24) + $interval->h;
// Выводим результат
echo "До моего дня рождения осталось $hoursRemaining часов.", PHP_EOL;

//2 ЗАДАНИЕ
//2013/09/01
//13.09.01
//01-09-13 написать функцию которая выводит текущую дату в таком формате
function OutputDateFormat()
{
    $settime = new DateTime("2013-09-01");
    echo $settime->format("d-m-y"), PHP_EOL;
}
OutputDateFormat();

//3 ЗАДАНИЕ
//написать функцию которая соединяет два массива и оставляет в них только уникальные элементы
//[1,2,3,4,5] merge with [1,2,3,4,5,6,7] result = [1,2,3,4,5,6,7]
function ArrayMergeAndDeleteSameElements(array $a, array $b)
{
    $arraymerge = array_merge($a, $b);
    $array_unique = array_unique($arraymerge);
    return $array_unique;
}
$array1 = [1,2,3,4,5];
$array2 = [1,2,3,4,5,6,7];
print_r(ArrayMergeAndDeleteSameElements($array1, $array2));

//4 ЗАДАНИЕ
