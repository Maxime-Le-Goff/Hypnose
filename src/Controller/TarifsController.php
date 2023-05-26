<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TarifsController extends AbstractController
{
    /**
     * @Route("/tarifs", name="app_tarifs")
     */
    public function index(CategorieRepository $categorie, DataTextRepository $dataText): Response
    {
        return $this->render('tarifs.html.twig',[
            'categories' => $categorie->findAll(),
            'data' => $dataText->findAll(),
        ]);
    }
}
