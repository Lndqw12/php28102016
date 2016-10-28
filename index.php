<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2016
 * Time: 14:45
 */
require_once "Basainter.php";

$obj = new Tools();  /*создаем объект на базе класса*/

/* сложение*/
//$obj->summa(2,3);
echo "<br/>";
//echo $obj->showres();
$arr = array(2,3);
call_user_func_array(array(&$obj,"summa"),$arr);

echo "<br/>";
echo call_user_func(array(&$obj,"showres"));

/* умножение*/
$obj->umn(2,3);
echo "<br/>";
echo $obj->showres();

/* вычитание*/
$obj->minus(2,3);
echo "<br/>";
echo $obj->showres();

/* деление*/
$obj->delenie(6,3);
echo "<br/>";
echo $obj->showres();
?>