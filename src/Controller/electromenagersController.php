<?php

namespace App\Controller;

use App\Entity\Electromenagers;
use App\Form\ElectromenagersType;
use App\Repository\ElectromenagersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/elect')]
class electromenagersController extends AbstractController
{
private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/new', name: 'electro_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $elec = new Electromenagers();
        $form = $this->createForm(ElectromenagersType::class, $elec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($elec);
            $entityManager->flush();
            return $this->redirectToRoute('electro_new');

        }

        return $this->render('electromenagers/elect.html.twig', [
            'elec' => $elec,
            'form' => $form->createView(),
        ]);
    }
}
?>