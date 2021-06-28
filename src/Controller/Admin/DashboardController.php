<?php

namespace App\Controller\Admin;
use App\Entity\Student;
use App\Entity\Instructor;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

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
       
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(StudentCrudController::class)->generateUrl());
       
        // return parent::index();
    }


    
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Zied Aouidene');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::section('Improtant');
        yield MenuItem::linkToCrud('Student','fa fa-list', Student::class);
        yield MenuItem::linkToCrud('Instructor','fa fa-list', Instructor::class);

        
        
    }
}
