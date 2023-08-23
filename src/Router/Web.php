<?php
namespace Source\Router;
use League\Plates\Engine;

class Web
{
    private $engine = new Engine("../../themes");
    public function __construct()
    {
//        $this->engine = new Engine("../../themes");
    }
    public function index()
    {

        echo $this->engine->render('home',["titlte"=>"Titulo"]);
    }

}