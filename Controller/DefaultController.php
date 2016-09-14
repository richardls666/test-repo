<?php

namespace Test\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestFirstBundle:Default:index.html.twig');
    }
}
