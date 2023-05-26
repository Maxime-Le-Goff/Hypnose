<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Repository\CategorieRepository;
use App\Repository\DataTextRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(CategorieRepository $categorie, Request $request, MailerInterface $mailer, DataTextRepository $data)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();
            
            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('lgmaximemlg@gmail.com')
                ->subject('Contact Hypnose/PNL')
                ->text('Sender : '.$contactFormData['email'].\PHP_EOL.
                    $contactFormData['message'],
                    'text/plain');
            $mailer->send($message);




            $this->addFlash('success', 'Votre Mail a bien été envoyé');

            return $this->redirectToRoute('app_contact');
        }



        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
            'categories' => $categorie->findAll(),
            'data' => $data->findAll(),
        ]);
    }
    
}

