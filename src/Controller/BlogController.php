<?php

namespace App\Controller;
use App\Entity\event;
use App\Form\EvenementT;
use App\Repository\EventRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/index', name: 'event')]
    public function index(EventRepository $EventRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'event' => $EventRepository->findAll(),
        ]);
    }

}