<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-09
 * Time: 19:52
 */

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CapsControllerTest extends WebTestCase
{
    public function testCapsDetails()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/kapsel/test');

        $this->assertCount(1, $crawler->filter('h2:contains("test")'));
    }

    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $form = $crawler->selectButton('search-button')->form();

        $form['search'] = 'test';

        $crawler = $client->submit($form);

        $this->assertCount(1, $crawler->filter("h3:contains('Wyniki wyszukiwania dla frazy: \"test\"')"));

        $this->assertCount(1, $crawler->filter("h3:contains('test')"));
    }
}