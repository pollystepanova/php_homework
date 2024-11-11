<?php
// Устанавливаю свою дату рождения 1 октября
$mybirthdayDay = 1; 
$mybirthdayMonth = 10; 
// устанавливаю текущую дату и время
$currentDate = new DateTime();
// Определяю, когда будет следующий день рождения
$year = $currentDate->format('Y');
$birthdayDate = new DateTime("$year-$birthdayMonth-$birthdayDay");

// Если день рождения уже прошел в этом году, устанавливаем следующий год
if ($birthdayDate < $currentDate) {
    $birthdayDate->modify('+1 year');
}

// Рассчитываем разницу между текущей датой и следующим днем рождения
$interval = $currentDate->diff($birthdayDate);

// Переводим разницу в часы
$hoursRemaining = ($interval->days * 24) + $interval->h;

// Выводим результат
echo "До моего дня рождения осталось $hoursRemaining часов.";