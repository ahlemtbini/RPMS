<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Entity\User;
use App\Form\ContactsType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsController extends AbstractController
{
    /**
     * @Route("/contacts", name="app_contacts")
     */
    public function index(): Response
    {
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();
        return $this->render('contacts/index.html.twig', [
            'Contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/creecontacts", name="creecontacts")
     */
    public function creecontacts(Request $request): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();
        $contacts=new Contacts();
        $form =$this->createForm(ContactsType::class ,$contacts);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($contacts);
        $entityManager->flush();
        return $this->redirectToRoute('app_contacts');
        }   
        return $this->render('contacts/ajouter.html.twig', [
            'user1' => $user,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/modifiercontacts/{id}", name="modifiercontacts")
     */
    public function modifier(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findBy(array('id'=>$id));
        if(!$contacts){
            throw $this->createNotFoundException('pas de contact avec ce id'.$id);
        }
            $contacts=$contacts[0];
            $form = $this->createForm(ContactsType::class ,$contacts);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($contacts);
                $entityManager->flush();
                return $this->redirectToRoute('app_contacts');
            }

            return $this->render('contacts/modifier.html.twig', [
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimercontacts/{id}", name="supprimercontacts")
     */
    public function supprimer(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findBy(array('id'=>$id));
        if(!$contacts){
            throw $this->createNotFoundException('pas de contrat avec ce id'.$id);
        }
        $entityManager->remove($contacts[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_contacts');
    }

}
