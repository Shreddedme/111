<?php
//Составить программу, которая бы по заданному числу выводила его название по китайском календаре
//Заданное число не может быть меньше 1924.
$year=2022;

    $arr = ['Крыса','Бык','Тигр','Кролик','Дракон','Змея','Лошадь','Овца','Обезьяна','Петух','Собака','Свинья'];
    if($year >= 1924) {

        echo $arr[($year - 1924) % 12];
    }
    else
    {
        echo 'Неправильная дата';
    }