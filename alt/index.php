<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


$books =
    [
        [
            'title' => 'The french Connection',
            'author' => 'ariel zablozki',
            'year' => '2012'
        ],
        [
            'title' => 'Slippery When Wet',
            'author' => 'carlos bettencourt',
            'year' => '1987'
        ],
        [
            'title' => 'OLD yeller',
            'author' => 'sly miller',
            'year' => '2022'
        ]
    ];


$filter = function ($list, $fn) {
  
  $array = [];
  
  foreach ($list as $item) {

    if ($fn ( $item )) $array [] = $item;

  }
  
  return $array;
  
};

$filtered = $filter($books, function ($book) {
  return ($book['year'] > 1950 && $book['year'] < 2020);
});

require "index.view.php";











