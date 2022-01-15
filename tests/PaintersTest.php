<?php

namespace App\Tests;

use App\Entity\Painters;
use PHPUnit\Framework\TestCase;

class PaintersTest extends TestCase
{
    public function testSomething(): void
    {
 $painter = new Painters();

$painter->setNom("boufenzi");
        $this->assertTrue($painter->getNom()== "boufenzi");
    }
}
