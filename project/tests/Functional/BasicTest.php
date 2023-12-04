<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request; // N'oubliez pas d'ajouter cette ligne

class BasicTest extends WebTestCase
{
    public function testEnvironnementIsOK(): void
    {
        $client = static::createClient();

        $client->request(Request::METHOD_GET, '/');

        $this->assertResponseIsSuccessful();
    }
}
