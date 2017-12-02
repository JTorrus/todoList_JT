<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TascaController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Tasca:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/list")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Tasca:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        return $this->render('AppBundle:Tasca:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/remove")
     */
    public function removeAction()
    {
        return $this->render('AppBundle:Tasca:remove.html.twig', array(
            // ...
        ));
    }

}
