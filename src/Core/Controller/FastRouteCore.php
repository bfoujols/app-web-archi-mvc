<?php

namespace Quizz\Core\Controller;

use FastRoute\Dispatcher;
use Quizz\Controller\Error\HttpController;

class FastRouteCore
{
    public static function getDispatcher($dispatcher) {

        // Fetch method and URI from somewhere
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                $httpController = new HttpController();
                return $httpController->outputEvent();
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                // TODO mettre les erreurs
                // ... 405 Method Not Allowed
                break;
            case Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $exeController = new $handler(); // -> Creation du controller correspondant à la demande
                $exeController->inputRequest(["GET" => $_GET, "POST" => $_POST, "VARS" => $routeInfo[2]]);
                return $exeController->outputEvent();
        }
    }
}