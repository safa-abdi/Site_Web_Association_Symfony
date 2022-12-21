<?php

namespace App\Controller\Admin;
use App\Entity\Messages;
use App\Entity\Electromenagers;
use App\Entity\Contact;
use App\Entity\CollecteArgent;
use App\Entity\User;
use App\Entity\Clothes;
use App\Entity\HistoriqueAide;
use App\Entity\GensBesoins;
use App\Entity\Reclamation;
use App\Entity\TrasportPartage;
use App\Entity\Event;
use App\Entity\Reunion;
use App\Entity\CollecteNourriture;
use EasyCorp\Bundle\EasyAdminBundle;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DashboardController extends AbstractDashboardController
{
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
            ->setTitle('Dream');
    }

    public function configureMenuItems(): iterable
    {   
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Gens_Besoins', 'fas fa-user-minus',GensBesoins::class);
        yield MenuItem::linkToCrud('Messages', 'fas fa-list', Messages::class);
        yield MenuItem::linkToCrud('Contact', 'far fa-id-card', Contact::class);
        yield MenuItem::linkToCrud('Evenement', 'fas fa-calendar-week', Event::class);
        yield MenuItem::linkToCrud('Collecte_Argent', 'fas fa-coins', CollecteArgent::class);
        yield MenuItem::linkToCrud('Collecte_Nourriture', 'fas fa-apple-alt', CollecteNourriture::class);
        yield MenuItem::linkToCrud('Collecte_clothes', 'fa fa-pencil-square-o', Clothes::class);
        yield MenuItem::linkToCrud('Collecte_Electro', 'fa fa-pencil-square-o', Electromenagers::class);
        yield MenuItem::linkToCrud('Transport aides', 'fas fa-car',TrasportPartage::class);
        yield MenuItem::linkToCrud('Réunion', 'fas fa-users',Reunion::class);
        yield MenuItem::linkToCrud('Historique des aides', 'fa fa-handshake-o',HistoriqueAide::class);


    }
}
