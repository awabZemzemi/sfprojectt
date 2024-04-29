<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Attribute\Route as AttributeRoute;

class FirstController extends AbstractController
{
#[Route('/first',name:'first')]
    public function first(): Response
    {
      
            return $this->forward('App\Controller\FirstController::param',['fi'=>'awab']);
    } 
    #[Route('/first/{fi}', name: 'app.param')]
    public function param($fi): Response
    {
        return new Response("<p>hello $fi</p>");
    }
}
