<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventsController extends AbstractController
{
 public function events(): Response
     {
         return $this->render('events.html.twig');
     }
 public function addEvent(): Response
     {
        return $this->render('add-event.html.twig');
     }
}
