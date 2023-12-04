<?php

namespace App\Tests\Unit;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BasicTest extends KernelTestCase
{
    public function testEnvironnementIsOK(): void
    {
        $this-> assertTrue(true);
    }
}