<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Subcategory;
use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Entity\User;
use App\Entity\Supplier;
use App\Entity\Team;
use App\Entity\CommercialDepartment;
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
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Villagegreen');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Produits'),
            MenuItem::linkToCrud('Produits', 'fa fa-guitar', Product::class),
            MenuItem::linkToCrud('Sous-catégories', 'fa fa-folder-open', Subcategory::class),
            MenuItem::linkToCrud('Catégories', 'fa fa-folder', Category::class),
            MenuItem::section('Commandes'),
            MenuItem::linkToCrud('Commandes', 'fa fa-shopping-cart', Order::class),
            MenuItem::linkToCrud('Détails de commande', 'fa fa-list-alt', OrderDetails::class),
            MenuItem::section('Comptes'),
            MenuItem::linkToCrud('Utilisateurs', 'fa fa-user', User::class),
            MenuItem::linkToCrud('Fournisseurs', 'fa fa-truck', Supplier::class),
            MenuItem::linkToCrud('Equipe', 'fa fa-users', Team::class),
            MenuItem::linkToCrud('Département Commercial', 'fa fa-user-tie', CommercialDepartment::class),

        
        ];
        
    }
}