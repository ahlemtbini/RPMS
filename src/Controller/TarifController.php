<?php

namespace App\Controller;

use App\Entity\TarifRPMS;
use App\Form\TarifType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TarifController extends AbstractController
{
     /**
     * @Route("/tarif", name="app_tarif")
     */
    public function index(): Response
    {
        $tarif = $this->getDoctrine()->getRepository(TarifRPMS::class)->findAll();
        return $this->render('tarif/index.html.twig', [
            'tarif' => $tarif,
        ]);
    }

    /**
     * @Route("/creetarif", name="creetarif")
     */
    public function creetarif(Request $request): Response
    {
        $tarif=new TarifRPMS();
        $form =$this->createForm(TarifType::class ,$tarif);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($tarif);
        $entityManager->flush();
        return $this->redirectToRoute('app_tarif');
        }   
        return $this->render('tarif/ajouter.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/modifiertarif/{id}", name="modifiertarif")
     */
    public function modifier(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tarif = $this->getDoctrine()->getRepository(TarifRPMS::class)->findBy(array('id'=>$id));
        if(!$tarif){
            throw $this->createNotFoundException('pas de tarif avec ce id'.$id);
        }
            $tarif=$tarif[0];
            $form = $this->createForm(TarifType::class ,$tarif);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($tarif);
                $entityManager->flush();
                return $this->redirectToRoute('app_tarif');
            }

            return $this->render('tarif/modifier.html.twig', [
                'tarif' => $tarif,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimertarif/{id}", name="supprimertarif")
     */
    public function supprimer(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tarif = $this->getDoctrine()->getRepository(TarifRPMS::class)->findBy(array('id'=>$id));
        if(!$tarif){
            throw $this->createNotFoundException('pas de tarif avec ce id'.$id);
        }
        $entityManager->remove($tarif[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_tarif');
    }

}

