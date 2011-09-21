<?php
$archive = new Phar('doctrine-2.1.1.phar', 0, 'doctrine-2.1.1.phar');
$archive->buildFromDirectory('doctrine-orm', '/Doctrine\/(Common|DBAL|ORM)/');
$archive->buildFromDirectory('doctrine-orm/Doctrine', '/Symfony/');
$archive->setStub(file_get_contents('phar-bootstrap.php'));
