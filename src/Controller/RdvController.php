<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class RdvController extends AbstractController
{
    /**
     * @Route("/rdv", name="app_rdv")
     */
    public function index(CategorieRepository $categories, DataTextRepository $data): Response
    {

        return $this->render('rdv.html.twig',[
                'categories' => $categories->findAll(),
                'data' => $data->findAll(),
            ]
        );

    }
}
