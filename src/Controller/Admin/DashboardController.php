<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\Skill;
use App\Entity\DataText;
use App\Entity\User;
use App\Entity\Avis;
use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use App\Repository\UserRepository;
use App\Repository\SkillRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{   

    protected $userRepository;
    protected $dataTextRepository;
    protected $skillRepository;
    protected $categorieRepository;

    public function __construct(UserRepository $userRepository, DataTextRepository $dataTextRepository, SkillRepository $skillRepository, CategorieRepository $categorieRepository) {

        $this->userRepository = $userRepository;
        $this->dataTextRepository = $dataTextRepository;
        $this->categorieRepository = $categorieRepository;
        $this->skillRepository = $skillRepository;

    }
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();

        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Hypnose');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-solid fa-users', User::class);
        yield MenuItem::linkToCrud('Données', 'fas fa-solid fa-tag', DataText::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-solid fa-tag', Categorie::class);
        yield MenuItem::linkToCrud('Compétences', 'fas fa-solid fa-chart-line', Skill::class);
        yield MenuItem::linkToCrud('Avis', 'fas fa-solid fa-chart-line', Avis::class);

        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
