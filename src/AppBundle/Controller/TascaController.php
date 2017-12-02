<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tasca;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class TascaController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $request)
    {
        $tasca = new Tasca();
        $tasca->setTitol("");
        $tasca->setData(new \DateTime('now'));

        $form = $this->createFormBuilder($tasca)
            ->add('titol', TextType::class)
            ->add('data', DateTimeType::class)
            ->add('save', SubmitType::class, array('label' => 'Crear tasca'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $tasca = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($tasca);
            $em->flush();
        }
        return $this->render('AppBundle:Tasca:create.html.twig', array(
            'form' => $form->createView(),
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
