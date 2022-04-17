<?php

namespace Quizz\Service;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigService
{
    private static $twig;

    public static function getEnvironment(): Environment
    {
        if (!self::$twig) {
            $loader = new FilesystemLoader( __DIR__ . '/../../templates');

                self::$twig =  new Environment($loader, [
                //'cache' => '/path/to/compilation_cache',
            ]);
        }
        return self::$twig;
    }

}