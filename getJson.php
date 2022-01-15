<?php
$json = file_get_contents("https://www.themealdb.com/api/json/v1/1/search.php?s=");
$receitas = json_decode($json);

$total = count($receitas->meals);

foreach ($receitas->meals as $key => $value) {
    echo $value->idMeal;
    echo $value->strMeal;
}

?>