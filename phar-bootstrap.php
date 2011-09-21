<?php
Phar::mapPhar();

$basePath = 'phar://' . __FILE__ . '/';
require $basePath . 'Doctrine/Common/ClassLoader.php';
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', $basePath);
$classLoader->register();
$classLoader = new \Doctrine\Common\ClassLoader('Symfony', $basePath);
$classLoader->register();

__HALT_COMPILER();
