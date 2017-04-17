<?php

namespace gbprojet\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DisponibiliteController extends Controller
{
    public function disponibiliteAction($app_ufr)
    {
        
        return $this->render('FrontBundle:Disponibilite:disponibilite.html.twig', array('app_ufr' => $app_ufr));
        
    }
}
