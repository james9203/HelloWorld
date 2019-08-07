<?php
require  __DIR__."/vendor/autoload.php";
use jamesluo\helloworld\Lily;
use jamesluo\helloworld\Rose;
use jamesluo\helloworld\Hello\hello;
$c = new hello();
$c->hello();
$d = new  Rose();
$d->hello();
$a = new  Lily();
$a->hello();
