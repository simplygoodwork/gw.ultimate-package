<?php

use Silex\WebTestCase;

class ApplicationTest extends WebTestCase
{
    public function createApplication()
    {
        return require_once __DIR__.'/../../app/app.php';
    }

    public function testRequests()
    {
        $client = $this->createClient();

        $client->request('GET', '/cool-story');
        $this->assertEquals(404, $client->getResponse()->getStatusCode());

        $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());
    }

}
