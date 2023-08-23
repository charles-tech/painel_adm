<?php
require "vendor/autoload.php";
use CoffeeCode\Router\Router;
$route = new Router("http://localhost/painel_adm");
$route->namespace("Source\Router");
$route->get("/", "Web:index");
$route->dispatch();



