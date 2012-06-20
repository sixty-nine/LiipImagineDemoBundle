<?php

namespace Liip\ImagineDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LiipImagineDemoBundle:Default:index.html.twig', array());
    }
}
