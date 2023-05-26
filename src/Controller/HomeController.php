<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\DataText;
use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index( CategorieRepository $categories, DataTextRepository $data): Response
    {
        return $this->render('home.html.twig', [
            'categories' => $categories->findAll(),
            'data' => $data->findAll(),
        ]);
    }


    /**
     * @Route("/mentionslegales",  name ="app_mentions")
     */
    public function mentions(CategorieRepository $categories, DataTextRepository $data)
    {
        return $this->render('mentions.html.twig', [
            'categories' => $categories->findAll(),
            'data' => $data->findAll(),
        ]);
    }
}
