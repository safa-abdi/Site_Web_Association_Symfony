<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessagesType;
use App\Repository\MessagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/message')]
class ContactController extends AbstractController
{
private $formFactory;
    public function __constructor(FormFactoryInterface $formFactory){
         $this->formFactory =$formFactory;
    }
    #[Route('/new', name: 'message_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $messages = new Messages();
        $form = $this->createForm(MessagesType::class, $messages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messages);
            $entityManager->flush();
            return $this->redirectToRoute('message_new');

        }

        return $this->render('contact/new.html.twig', [
            'Messages' => $messages,
            'form' => $form->createView(),
        ]);
    }
}
?>