<?php

function hazArray($elementos, $campo1, $campo2)
{
    $todos = [];
    foreach ($elementos as $elemento)
        $todos[$elemento->$campo1] = $elemento->$campo2;
    return $todos;
}
