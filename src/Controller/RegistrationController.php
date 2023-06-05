<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            
            return $this->redirectToRoute('app_comptes');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/comptes", name="app_comptes")
     */
    public function comptes(): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('registration/comptes.html.twig', [
            'user' => $user,

        ]);
    }
    /**
     * @Route("/supprimercompte/{id}", name="supprimercompte")
     */
    public function supprimercompte(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $compte = $this->getDoctrine()->getRepository(User::class)->findBy(array('id'=>$id));
        if(!$compte){
            throw $this->createNotFoundException('pas de compte avec ce id'.$id);
        }
        $entityManager->remove($compte[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_comptes');
    }



/**
     * @Route("/modifiercompte/{id}", name="modifiercompte")
     */
    public function modifier(int $id,UserPasswordEncoderInterface $userPasswordEncoder,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $compte = $this->getDoctrine()->getRepository(User::class)->findBy(array('id'=>$id));
        $compte=$compte[0];

        if(!$compte){
            throw $this->createNotFoundException('pas de compte avec ce id'.$id);
        }
            $form = $this->createForm(RegistrationFormType::class ,$compte);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $compte->setPassword(
                    $userPasswordEncoder->encodePassword(
                            $compte,
                            $form->get('plainPassword')->getData()
                        )
                    );
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($compte);
                $entityManager->flush();
                return $this->redirectToRoute('app_compte');
            }

            return $this->render('registration/modifier.html.twig', [
                'compte'=>$compte,
                'registrationForm' => $form->createView(),

            ]);
  
    }
 
    

    
}
