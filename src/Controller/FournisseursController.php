<?php

namespace App\Controller;

use App\Entity\Fournisseurs;
use App\Form\FournisseursType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FournisseursController extends AbstractController
{
     /**
     * @Route("/fournisseurs", name="app_fournisseurs")
     */
    public function index(): Response
    {
        $fournisseurs = $this->getDoctrine()->getRepository(Fournisseurs::class)->findAll();
        return $this->render('fournisseurs/index.html.twig', [
            'fournisseurs' => $fournisseurs,
        ]);
    }

    /**
     * @Route("/creefournisseurs", name="creefournisseurs")
     */
    public function creefournisseurs(Request $request): Response
    {
        $fournisseurs=new Fournisseurs();
        $form =$this->createForm(FournisseursType::class ,$fournisseurs);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($fournisseurs);
        $entityManager->flush();
        return $this->redirectToRoute('app_fournisseurs');
        }   
        return $this->render('fournisseurs/ajouter.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/modifierfournisseurs/{id}", name="modifierfournisseurs")
     */
    public function modifier(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fournisseurs = $this->getDoctrine()->getRepository(Fournisseurs::class)->findBy(array('id'=>$id));
        if(!$fournisseurs){
            throw $this->createNotFoundException('pas de fournisseurs avec ce id'.$id);
        }
            $fournisseurs=$fournisseurs[0];
            $form = $this->createForm(FournisseursType::class ,$fournisseurs);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($fournisseurs);
                $entityManager->flush();
                return $this->redirectToRoute('app_fournisseurs');
            }

            return $this->render('fournisseurs/modifier.html.twig', [
                'fournisseurs' => $fournisseurs,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerfournisseurs/{id}", name="supprimerfournisseurs")
     */
    public function supprimer(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $fournisseurs = $this->getDoctrine()->getRepository(Fournisseurs::class)->findBy(array('id'=>$id));
        if(!$fournisseurs){
            throw $this->createNotFoundException('pas de fournisseurs avec ce id'.$id);
        }
        $entityManager->remove($fournisseurs[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_fournisseurs');
    }
}
