<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_product')]
    public function index(ProductRepository $repo): Response
    {
        $products = $repo->findAll();

        // dump($products);

        return $this->render('product/index.html.twig', [
            'all_products' => $products
        ]);
    }

    #[Route('/product/{id<\d+>}', name: 'product_show')]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'single_product' => $product
        ]);
    }

    // public function show($id, ProductRepository $repo): Response
    // {
    //     $product = $repo->find($id);

    //     if ($product === null) {

    //         throw $this->createNotFoundException("Resource is not found!");
    //         
    //     }

    //     return $this->render('product/show.html.twig', [
    //         'single_product' => $product
    //     ]);
    // }

    #[Route('/product/new', name: 'product_new')]
    public function new(): Response
    {
        return $this->render('product/new.html.twig');
    }

}
