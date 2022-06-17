<?php

use Quizz\Entity\Question;

class QuestionTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testLibelle()
    {
        $question = new Question();
        $question->setLibelleQuestion("test");

        $this->assertSame(
            'test',
            $question->getLibelleQuestion()
        );
    }
}