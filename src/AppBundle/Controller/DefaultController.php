<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }
    public function callAction()
    {
        return $this->render('AppBundle:Default:call.html.twig');
    }
    public function instruccionesAction()
    {
        return $this->render('AppBundle:Default:instrucciones.html.twig');
    }
    public function programaAction()
    {
        return $this->render('AppBundle:Default:programa.html.twig');
    }
    public function comiteAction()
    {
        return $this->render('AppBundle:Default:comite.html.twig');
    }
}
