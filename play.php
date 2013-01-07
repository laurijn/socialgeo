<?php

use Symfony\Component\HttpFoundation\Request;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#configuration-and-setup for more information
umask(0000);


$loader = require_once __DIR__.'/app/bootstrap.php.cache';
require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);

//end setup
use Socialgeo\EventBundle\Entity\Event;

$event = new Event();
$event->setName('Larijn');
$event->setLocation('Ghent');
$event->setTime(new DateTime());
$event->setDetails('awesome');
$event->setImagename('foo.jpg');

$em = $container->get('doctrine')->getManager();
$em->persist($event);
$em->flush();