<?php


namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReproducerControllerTest extends WebTestCase
{
    public function testReproduce()
    {
        $client = static::createClient();

        $client->request('GET', '/reproduce', ['headers' => ['Content-Type' => 'application/json']]);

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
        $responseContent = json_decode($client->getResponse()->getContent(), true);
        $this->assertEquals(404, $responseContent['code']);
    }
}
