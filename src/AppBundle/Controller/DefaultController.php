<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller{
    /**
    *@Route("/")
    */
  public function showAction(){
    
    $templating = $this->container->get('templating');
    $html = $templating->render('index/index.html.twig', []);

    return new Response($html);
  }
}