<?php

namespace App\Controller;
use App\Entity\GensBesoins;
use App\Form\GensBesoinsType;
use App\Repository\GensBesoinsRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoryController extends AbstractController
{
    private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/story', name: 'story')]
    public function index(GensBesoinsRepository $GensBesoinsRepository): Response
    {
        return $this->render('TrueStory/story.html.twig', [
            'story' => $GensBesoinsRepository->findAll(),
        ]);
    }

}