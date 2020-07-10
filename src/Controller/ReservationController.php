<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Reservation;
use App\Entity\Product;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation/new")
     */
    public function newAction()
    {
        $reservation = new Reservation();

        $product = $this->getDoctrine()->getRepository(Product::class)->find(1);

        $reservation->setProduct($product);
        $reservation->setBasePrice(rand(100, 99999));
        $reservation->setFinalPrice(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush();
        return new Response('<html><body>Reservation created!</body></html>');
    }

     /**
     * @Route("/reservation")
     */
    public function listAction()
    {
        $reservations = $this->getDoctrine()->getManager()->getRepository(Reservation::class)
            ->findAll();
        
         return $this->render('reservation/list.html.twig', [
            'reservations' => $reservations
        ]);

    }
}
