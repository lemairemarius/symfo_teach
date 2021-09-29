<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    /**
     * @Route("/pin", name="pin")
     */
    public function index(): Response
    {
        $pin = new Pin();
        $pin->setTitle('title 1');
        $pin->setDescription('Description');

       $em = $this->getDoctrine()->getManager();

       $em->persist($pin);

       $em->flush();





       return $this->render('pin/index.html.twig');
    }
}
