<?php

namespace App\Controller;

use App\Repository\AvisRepository;
use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="app_avis")
     */
    public function index(CategorieRepository $categories, DataTextRepository $data, AvisRepository $avis): Response
    {
        return $this->render('avis/index.html.twig',[
            'categories' => $categories->findAll(),
            'data' => $data->findAll(),
            'allAvis' => $avis->findAll(),
        ]);
    }

    /**
     * @Route("/votreAvis", name="app_new_avis")
     */
    public function newAvis(CategorieRepository $categories, DataTextRepository $data) : Response
    {
        return $this->render('avis/new.html.twig',[
            'categories' => $categories->findAll(),
            'data' => $data->findAll(),]);
    }
}
