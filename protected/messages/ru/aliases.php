<?php
$array = array();

$aliases = Aliases::model()->findAll();

foreach($aliases as $alias){

    $key = $alias->column;
    $value = $alias->alias;

    $array[$key] = $value;


}
//echo "<pre>".var_dump($array)."</pre>";
//
//
// $array2 = array(
//  'alias'=>'dsada',
//  'test'=>'ff',
//  'hello'=>'fsdf'
//
//);
//echo "<pre>".var_dump($array2)."</pre>";

return $array;
