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
//$obj->umn(2,3);
echo "<br/>";
//echo $obj->showres();
call_user_func_array(array(&$obj,"umn"),$arr);

echo "<br/>";
echo call_user_func(array(&$obj,"showres"));





/* вычитание*/
//$obj->minus(2,3);
echo "<br/>";
//echo $obj->showres();

call_user_func_array(array(&$obj,"minus"),$arr);

echo "<br/>";
echo call_user_func(array(&$obj,"showres"));

/* деление*/
//$obj->delenie(6,3);
echo "<br/>";
//echo $obj->showres();
$arr1 = array(6,3);
call_user_func_array(array(&$obj,"delenie"),$arr1);

echo "<br/>";
echo call_user_func(array(&$obj,"showres"));
?>