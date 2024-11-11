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
if ($birthdayDate < $currentDate) 
{
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
    //функция объединения массивов
    $arraymerge = array_merge($a, $b);
    //функция, которая оставледяет уникальные элементы
    $array_unique = array_unique($arraymerge);
    return $array_unique;
}
$array1 = [1,2,3,4,5];
$array2 = [1,2,3,4,5,6,7];
print_r(ArrayMergeAndDeleteSameElements($array1, $array2));
echo PHP_EOL;

//4 ЗАДАНИЕ
//написать функцию которая проверяет ялвяется ли слово палиндромом

function CheckPalindrome(string $word)
{
    // Приводим строку к нижнему регистру и убираем пробелы
    $invertedword = strrev($word);
    return $invertedword === $word;
}
var_dump(CheckPalindrome("word"));
echo PHP_EOL;
var_dump(CheckPalindrome("level"));
echo PHP_EOL;

//5 ЗАДАНИЕ
//посчитать ряд фиббоначи
function FibonacciSeries(int $i) 
{ 
    if ($i == 0 ) 
    {
        return 0;
    } 
    if ($i == 1 || $i == 2) 
    { 
        return 1; 
    } 
    else 
    { 
        return FibonacciSeries($i - 1) + FibonacciSeries($i -2); 
    } 
} 
   // в функцию нужно ввести индекс числа Фибоначчи
   echo FibonacciSeries(10), PHP_EOL;

   //6 ЗАДАНИЕ
   //сортировку пузырьком)
   function BubbleSort(array $array): array 
   {
        $length = count($array);
        // Проходим по массиву столько раз, сколько элементов в массиве
        for ($i = 0; $i < $length - 1; $i++) {
            // Для каждого элемента проходим массив от начала до "последнего неотсортированного" элемента
            for ($j = 0; $j < $length - $i - 1; $j++) 
            {
                // Если текущий элемент больше следующего, меняем их местами
                if ($array[$j] > $array[$j + 1]) 
                {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }
    
    $array = [64, 34, 25, 12, 22, 11, 90];
    $sortedArray = bubbleSort($array);
    print_r($sortedArray);
