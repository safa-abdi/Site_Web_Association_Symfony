<?php

namespace App\Controller;

use App\Entity\Clothes;
use App\Form\ClothesType;
use App\Repository\MessagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/clothes')]
class clothesController extends AbstractController
{
private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/clothes', name: 'clothes_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $Clothes = new Clothes();
        $form = $this->createForm(ClothesType::class, $Clothes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Clothes);
            $entityManager->flush();
            return $this->redirectToRoute('clothes_new');

        }
        return $this->render('clothes/newClo.html.twig', [
            'Messages' => $Clothes,
            'form' => $form->createView(),
        ]);
    }
}
?>