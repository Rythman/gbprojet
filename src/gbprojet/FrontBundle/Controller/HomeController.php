<?php

namespace gbprojet\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Home:index.html.twig');
    }
}

