<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillController extends AbstractController
{
    /**
     * @Route("/compétences/{id}", name="app_skill")
     */
    public function index(CategorieRepository $categorie, SkillRepository $skill, int $id ): Response
    {
        $skills = $skill->findBy(['categorie'=> $id]);
        return $this->render('skill.html.twig',[
            'categorie' => $categorie->find($id),
            'categories' => $categorie->findAll(),
            'skills'=> $skills,
        ]  
        );
    }
}
