<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Product;

class ProductController extends AbstractController
{
     /**
     * @Route("/product/new")
     */
    public function newAction()
    {
        $product = new Product();
        $product->setName('Keyboard'.rand(1, 100));
        $product->setBasePrice(rand(100, 99999));
        $product->setFinalPricesSum(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        return new Response('<html><body>Product created!</body></html>');
    }

     /**
     * @Route("/product")
     */
    public function listAction()
    {
        $products = $this->getDoctrine()->getManager()->getRepository(Product::class)
            ->findAll();
        
        // return $this->json($products);

         return $this->render('product/list.html.twig', [
            'products' => $products
        ]);

    }
}
