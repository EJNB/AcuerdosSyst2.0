<?php

namespace Acuerdos\ReportesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReportControllerTest extends WebTestCase
{
    public function testSeleccionprocedencias()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/seleccionProcedencias');
    }

    public function testReunionprocedencia()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/reunionProcedencia');
    }

    public function testAcuerdosreunion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acuerdosReunion');
    }

    public function testAcuerdosmessage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acuerdosMessage');
    }

    public function testAcuerdospdf()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acuerdosPdf');
    }

    public function testAcuerdospersona()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acuerdosPersona');
    }

}
