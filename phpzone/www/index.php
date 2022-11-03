<?php

function myAutoLoader(string $className)
{
  var_dump($className);  
  require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register('myAutoLoader');


$author = new \myProject\Models\Users\Users('Bob');
$art = new \myProject\Models\Articles\Articles('zagotovka', 'text', $author);

echo '<pre>';
  var_dump($art);
  echo '</pre>';

$cont = new \myProject\Controllers\MainController();
$cont -> main();