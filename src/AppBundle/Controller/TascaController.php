<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tasca;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class TascaController extends Controller
{
    /*
     * El mètode createAction s'encarrega de inserir un nou objecte a la base de dades, el seu funcionament és el següent:
     * 1 - Creem un nou objecte de tipus Tasca amb un valor inicial de títol buït i la data d'avui.
     * 2 - Per aquest objecte, creem un formulari que contindrà un TextType per inserir el títol, un DateTimeType per la data
     * i un SubmitType per enviar la informació
     * 3 - Gràcies al request que passem per paràmetre podem processar tota la informació del formulari amb el mètode
     * handleRequest
     * 4 - A continuació comprovem que el formulari és vàlid i afegim al objecte creat anteriorment els valors agafats del
     * formulari
     * 5 - Tenim que entregar aquesta informació a la base de dades, recuperem el Manager per via del Doctrine
     * i truquem al seu mètode persist.
     * 6 - Finalment, amb el flush executem la query i retornem la vista al nostre html.twig corresponent
     */
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

    /*
     * El mètode listAction s'encarrega de llistar tots els elements de la BBDD, el seu funcionament és el següent:
     * 1 - Fem el mètode invers a inserir dades, tenim que recuperar els nostres objectes de la base de dades, així que
     * amb el getRepository ho aconseguim
     * 2 - Una vegada fet aixó, podem executar el mètode findAll per que ens retorni un Array amb tots els elements
     * 3 - A continuació nomès tindrem que passar per la vista tots els productes
     */
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository(Tasca::class);
        $products = $repository->findAll();

        return $this->render('AppBundle:Tasca:list.html.twig', array(
            'totesTasques' => $products
        ));
    }

    /*
     * El mètode updateAction s'encarrega de editar un objecte existent de la base de dades, el seu funcionament és el següent:
     * 1 - Creem un nou objecte de tipus Tasca.
     * 2 - Per aquest objecte, creem un formulari que contindrà tots els valors dels seus atributs (id: IntegerType,
     * titol: TextType i data: DateTimeType)
     * 3 - Gràcies al request que passem per paràmetre podem processar tota la informació del formulari amb el mètode
     * handleRequest
     * 4 - A continuació comprovem que el formulari és vàlid i afegim al objecte creat anteriorment els valors agafats del
     * formulari
     * 5 - Tenim que entregar aquesta informació a la base de dades, recuperem el Manager per via del Doctrine
     * 6 - En aquest cas no volem trobar tots els objectes, si no aquell que coincideixi amb l'input del id de l'usuari amb
     * el mètode find
     * 7 - Gràcies a això podrem comparar si existeix o no, en cas negatiu llançarem una excepció amb el missatge corresponent
     * 8 - En cas positiu inserirem els valors al titol i la data del objecte i executarem la query per persistir l'objecte
     * 9 - Per últim retornem els valors de la vista al html.twig corresponent
     */
    /**
     * @Route("/update")
     */
    public function updateAction(Request $request)
    {
        $tasca = new Tasca();

        $form = $this->createFormBuilder($tasca)
            ->add('id', IntegerType::class)
            ->add('titol', TextType::class)
            ->add('data', DateTimeType::class)
            ->add('save', SubmitType::class, array('label' => 'Editar tasca'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $form->get('id')->getData();
            $titol = $form->get('titol')->getData();
            $data = $form->get('data')->getData();

            $em = $this->getDoctrine()->getManager();
            $tasca = $em->getRepository(Tasca::class)->find($id);

            if (!$tasca) {
                throw $this->createNotFoundException('No hi ha cap tasca amb aquesta id');
            } else {
                $tasca->setTitol($titol);
                $tasca->setData($data);
                $em->flush();
            }
        }
        return $this->render('AppBundle:Tasca:update.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /*
     * El mètode removeAction és molt simil·lar a updateAction i
     * s'encarrega d'esborrar un objecte existent de la base de dades, el seu funcionament és el següent:
     * 1 - Creem un nou objecte de tipus Tasca.
     * 2 - Per aquest objecte, creem un formulari que contindrà un IntegerType per ficar l'id
     * 3 - Gràcies al request que passem per paràmetre podem processar tota la informació del formulari amb el mètode
     * handleRequest
     * 4 - A continuació comprovem que el formulari és vàlid i afegim al objecte creat anteriorment els valors agafats del
     * formulari
     * 5 - Tenim que entregar aquesta informació a la base de dades, recuperem el Manager per via del Doctrine
     * 6 - En aquest cas no volem trobar tots els objectes, si no aquell que coincideixi amb l'input del id de l'usuari amb
     * el mètode find
     * 7 - Gràcies a això podrem comparar si existeix o no, en cas negatiu llançarem una excepció amb el missatge corresponent
     * 8 - En cas positiu esborrarem l'objecte data que coincideix amb el que hi ha a la base de dades i
     * executarem la query per persistir l'objecte
     * 9 - Per últim retornem els valors de la vista al html.twig corresponent
     */
    /**
     * @Route("/remove")
     */
    public function removeAction(Request $request)
    {
        $tasca = new Tasca();

        $form = $this->createFormBuilder($tasca)
            ->add('id', IntegerType::class)
            ->add('save', SubmitType::class, array('label' => 'Eliminar tasca'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $form->get('id')->getData();
            $em = $this->getDoctrine()->getManager();
            $tasca = $em->getRepository(Tasca::class)->find($id);

            if (!$tasca) {
                throw $this->createNotFoundException('No hi ha cap tasca amb aquesta id');
            } else {
                $em->remove($tasca);
                $em->flush();
            }
        }

        return $this->render('AppBundle:Tasca:remove.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
