<?php

namespace gbprojet\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgrammationController extends Controller
{
    public function programmationAction($grade,$niveau)
    {
        return $this->render('FrontBundle:Programmation:programmation.html.twig',
                array(
                    'grade'=>$grade,
                    'niveau'=>$niveau
                )
            );
        
        
    }
}