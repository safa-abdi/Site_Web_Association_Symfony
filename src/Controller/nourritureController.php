<?php

namespace App\Controller;

use App\Entity\CollecteNourriture;
use App\Form\CollecteNourritureType;
use App\Repository\MessagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/nourriture')]
class nourritureController extends AbstractController
{
private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/nourriture', name: 'nourriture_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $CollecteNourriture = new CollecteNourriture();
        $form = $this->createForm(CollecteNourritureType::class, $CollecteNourriture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($CollecteNourriture);
            $entityManager->flush();
            return $this->redirectToRoute('nourriture_new');

        }
        return $this->render('nourriture/newNourr.html.twig', [
            'Messages' => $CollecteNourriture,
            'form' => $form->createView(),
        ]);
    }
}
?>