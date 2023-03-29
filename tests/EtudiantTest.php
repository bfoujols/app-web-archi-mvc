<?php

use PHPUnit\Framework\TestCase;
use Apps\Entity\Etudiant;

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

    public function testEtu03LoginValide(): void
    {
        $studen = new Etudiant();
        $studen->setLogin("bfoujols");

        $this->assertSame(
            "bfoujols",
            $studen->getLogin()
        );
    }

    public function testEtu03LoginNotValideAvecEspace(): void
    {
        $studen = new Etudiant();
        $studen->setLogin("bfoujo ls");

        $this->assertNotSame(
            "bfoujols",
            $studen->getLogin(),
            "Attention pas d'espace"
        );
    }

    /**
     * Un login ne doit pas depasser 15 caracteres
     * @return void
     */
    public function testEtu03LoginNotValideMaxVarchar(): void
    {
        $studen = new Etudiant();
        $studen->setLogin("bfoujolsAERTYUIO");

        $this->assertNotSame(
            15,
            strlen($studen->getLogin())
        );
    }
}
