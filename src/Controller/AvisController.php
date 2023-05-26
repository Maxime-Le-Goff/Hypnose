<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\NewAvisType;
use App\Repository\AvisRepository;
use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use DateTime;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

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
     * @Route("/votreAvis", name="app_new_avis",methods={"GET", "POST"})
     */
    public function new(Request $request, UserInterface $user, CategorieRepository $categorie, DataTextRepository $data, EntityManagerInterface $entityManager)
    {
        $avis = new Avis();

        $form= $this->createForm(NewAvisType::class, $avis);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $avis->setDate(new DateTime('now'));
            $avis->setUser($user);
            $avis->setIsValid(false);
            $entityManager->persist($avis);
            $entityManager->flush($avis);

            return $this->redirectToRoute('app_avis');
        }
        return $this->renderForm('avis/new.html.twig', [
            'avis' => $avis,
            'form' => $form,
            'categories' => $categorie->findAll(),
            'data' => $data->findAll(),
        ]);

    }
}
