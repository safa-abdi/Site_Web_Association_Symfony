<?php

namespace App\Controller;

use App\Entity\CollecteArgent;
use App\Form\MoneyType;
use App\Repository\MessagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/money')]
class MoneyController extends AbstractController
{
private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/money', name: 'money_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $CollecteArgent = new CollecteArgent();
        $form = $this->createForm(MoneyType::class, $CollecteArgent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($CollecteArgent);
            $entityManager->flush();
            return $this->redirectToRoute('money_new');

        }
        return $this->render('donnation/newMoney.html.twig', [
            'Messages' => $CollecteArgent,
            'form' => $form->createView(),
        ]);
    }
}
?>