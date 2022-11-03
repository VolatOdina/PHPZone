<?php

require __DIR__.'/../src/myProject/Models/Users/Users.php';
require __DIR__.'/../src/myProject/Models/Articles/Articles.php';

$author = new \myProject\Models\Articles\User('Bob');
$art = new myProject\Models\Articles\Article('zagotovka', 'text', $author);

echo '<pre>';
  var_dump($art);
  echo '</pre>';

