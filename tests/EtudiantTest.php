<?php

use PHPUnit\Framework\TestCase;
use Quizz\Entity\Etudiant;

final class EtudiantTest extends TestCase
{
    /**
     * @return void
     * CODE ETUD01
     */
    public function testEtu01Nom(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonneau");

        $this->assertSame(
            'Bonneau',
            $student->getNom()
        );
    }

    /**
     * @return void
     * CODE STUD02
     */
    public function testEtu02NomAvecEspace(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonneau Paul");

        $this->assertSame(
            'Bonneau Paul',
            $student->getNom()
        );
    }

    /**
     * @return void
     * CODE STUD03
     */
    public function testEtu02NomAvecCaractereSpecial(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonneau-Paul");

        $this->assertSame(
            'Bonneau-Paul',
            $student->getNom()
        );
    }

    /**
     * @return void
     * CODE STUD04
     */
    public function testEtu02NomAvecCaractereSpecialAccent(): void
    {
        $student = new Etudiant();
        $student->setNom("Bonnéàu-Paûlï");

        $this->assertSame(
            'Bonnéàu-Paûlï',
            $student->getNom()
        );
    }

}
