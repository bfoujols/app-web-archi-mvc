<?php

namespace Quizz;

class DebugHandler
{
    public static function dump($input): bool|string
    {
        ob_start();
        echo "<pre>";
        var_dump($input);
        echo "</pre>";
        return ob_get_clean();
    }
}