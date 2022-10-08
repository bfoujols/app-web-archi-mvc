<?php

namespace Quizz\Core\Controller;

use Twig\Environment;

interface ControllerInterface
{
    public function execute(Request $request);
}