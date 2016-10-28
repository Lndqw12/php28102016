<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2016
 * Time: 16:00
 */

interface A
{
    public function summa($one, $two);// сумма двух чисел
    public function umn($one, $two);// умножение двух чисел
    public function minus($one, $two);// вычитание двух чисел
    public function delenie($one, $two);// деление двух чисел

    public function showres();// вывод результата
}