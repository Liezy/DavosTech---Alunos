<?php
namespace Core;

class App
{

    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        $url = '';

        if (isset($_GET['pag'])) {
            $url = $_GET['pag'];
            $url = ($url[-1] != '/') ? $url . '/' : $url;
        }

        $parametros = [];

        if (!empty($url)) {
            $url = explode('/', $url);

            $controller = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $metodo = $url[0];
                array_shift($url);
            } else {
                $metodo = 'index';
            }

            if (count($url) > 0) {
                $parametros = $url;
            }
        } else {
            $controller = 'EstudanteController';
            $metodo = 'index';
        }

        $caminho = 'App/Controllers/' . $controller . '.php';

        if (!file_exists($caminho) || !method_exists('App\\Controllers\\' . $controller, $metodo)) {
            $controller = 'EstudanteController';
            $metodo = 'index';
            $caminho = 'App/Controllers/' . $controller . '.php';
        }

        require_once $caminho;
        $controller = 'App\\Controllers\\' . $controller;
        if (!class_exists($controller)) {
            die("Controller $controller não encontrado.");
        }

        $c = new $controller;

        if (!method_exists($c, $metodo)) {
            die("Método $metodo não encontrado no controlador $controller.");
        }

        call_user_func_array([$c, $metodo], $parametros);
    }
}
