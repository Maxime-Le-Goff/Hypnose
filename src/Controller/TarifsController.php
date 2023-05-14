<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TarifsController extends AbstractController
{
    /**
     * @Route("/tarifs", name="app_tarifs")
     */
    public function index(CategorieRepository $categorie): Response
    {
        return $this->render('tarifs.html.twig',[
            'categories' => $categorie->findAll(),
        ]);
    }
}
