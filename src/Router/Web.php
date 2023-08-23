<?php
namespace Source\Router;
use League\Plates\Engine;

class Web
{
    protected $engine;
    public function __construct()
    {
        $this->engine = new Engine(__DIR__ . "/../../themes/");
    }
    public function index()
    {
        echo $this->engine->render('home',["title"=>"Painel - Home"]);
    }

}