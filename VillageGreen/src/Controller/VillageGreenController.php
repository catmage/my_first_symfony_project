<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class VillageGreenController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('villagegreen/home.html.twig', [
            'controller_name' => 'VillageGreenController',
        ]);
    }

     /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription() 
    {
        return $this->render('villagegreen/inscription.html.twig');
    }

    /**
     * @Route("/produits", name="produits")
     */
    public function produits(ProductRepository $repo): Response
    {
        $repo = $this->getDoctrine()->getRepository(Product::class);

        $products = $repo->findAll();

        return $this->render('villagegreen/produits.html.twig', [
            'controller_name' => 'VillageGreenController',
            'products' => $products
        ]);
    }

    /**
    * @Route("/show/{id}", name="show")
    */
    public function show($id, ProductRepository $productRepo) : Response
    {
        $product = $productRepo->findOneBy(['id' => $id]);

        if(!$product){
            throw new NotFoundHttpException('Produit introuvable');
        }
 
        return $this->render('villagegreen/show.html.twig', [
        'controller_name' => 'VillageGreenController',
        'product' => $product 
    ]);
    }

    /**
     * @Route("/connecter", name="connecter")
     */
    public function connecter() 
    {
        return $this->render('villagegreen/connecter.html.twig');
    }
}