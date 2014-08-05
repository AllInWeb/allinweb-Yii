<?php
$fields = array();
$aliases = Aliases::model()->findAll();
foreach($aliases as $alias){
    $key = $alias->column;
    $value = $alias->alias;
    $fields[$key] = $value;
}

return $fields;
