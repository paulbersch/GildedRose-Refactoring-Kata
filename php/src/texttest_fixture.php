<?php

require_once 'gilded_rose.php';

$items = array(
    new Item('Stylish Wool Vest', 10, 20),
    new Item('Fine Wine', 2, 0),
    new Item('Tonic Water', 5, 7),
    new Item('Renaissance Painting', 0, 80),
    new Item('Renaissance Painting', -1, 80),
    new Item('Backstage Pass', 15, 20),
    new Item('Backstage Pass', 10, 49),
    new Item('Backstage Pass', 5, 49),
    // this conjured item does not work properly yet
    new Item('Fresh Spinach', 3, 6)
);

$app = new GildedRose($items);

$days = 5;
if (count($argv) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------\n");
    echo("name, sellIn, quality\n");
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->update_quality();
}
