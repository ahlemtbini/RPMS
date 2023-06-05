<?php

namespace App\Controller;
use App\Entity\Fournisseurs;
use App\Entity\Projet;
use App\Entity\TarifRPMS;
use App\Entity\Contacts;
use App\Entity\User;
use App\Form\ProjetType;
use Doctrine\ORM\Mapping\Id;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ProjetController extends AbstractController
{
    /**
     * @Route("/creeProjet/{id}", name="app_creeProjet")
     */
    public function creeprojet(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findBy(array('id'=>$id));
        if(!$contacts){
            throw $this->createNotFoundException('pas de contrat avec ce id'.$id);
        }
        
        $contacts=$contacts[0];
        $fournisseurs = $this->getDoctrine()->getRepository(Fournisseurs::class)->findAll();
        $tarif = $this->getDoctrine()->getRepository(TarifRPMS::class)->findAll();
        $projet=new Projet();
        $form =$this->createForm(ProjetType::class ,$projet);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($projet);
        $projet->setProspectionId($id);
        $entityManager->flush();
        return $this->redirectToRoute('app_contacts');
        }   
        return $this->render('projet/ajouter.html.twig', [
            'contacts'=>$contacts,
            'tarif' => $tarif,
            'fournisseurs' => $fournisseurs,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/projet", name="app_projet")
     */
    public function projet(): Response
    {
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();

        return $this->render('projet/projet.html.twig', [
            'projet' => $projet,
            'contacts'=>$contacts
        ]);
    }
    /**
     * @Route("/projet/{id}", name="app_projetId")
     */
    public function projetId(int $id,Request $request): Response
    {
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findBy(array('id'=>$id));
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();

        return $this->render('projet/projetId.html.twig', [
            'projet' => $projet,
            'contacts'=>$contacts
        ]);
    }
    /**
     * @Route("/planning", name="app_planning")
     */
    public function planning(): Response
    {
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();

        return $this->render('projet/planning.html.twig', [
            'projet' => $projet,
            'contacts'=>$contacts
        ]);
    }
    /**
     * @Route("/commission", name="app_commission")
     */
    public function commission(): Response
    {
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();

        return $this->render('projet/commission.html.twig', [
            'projet' => $projet,
            'contacts'=>$contacts
        ]);
    }

    /**
     * @Route("/Statistiques", name="app_Statistiques")
     */
    public function Statistiques(): Response
    {
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();
        $user = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('projet/Statistiques.html.twig', [
            'projet' => $projet,
            'contacts'=>$contacts,
            'user'=>$user,
        ]);
    }
     /**
        * @Route("/commencer/{id}", name="commencerprojet")
        * 
        */
        public function commencer(int $id, Request $request): Response
        {
          $entityManger = $this->getDoctrine()->getManager() ;
          $projet = $this->getDoctrine()->getRepository(Projet::class)->findBy(array('id'=>$id));
          if(!$projet)
          {
            throw $this->createNotFoundException(
              'pas d projet avec ce id'.$id
            );
            }
 
            {
              $projet[0]->setEtat("commencer"); 
              $entityManger->flush();
              return $this->redirectToRoute('app_projet');
             }
         }

         /**
        * @Route("/terminer/{id}", name="terminerprojet")
        * 
        */
        public function terminer(int $id, Request $request): Response
        {
          $entityManger = $this->getDoctrine()->getManager() ;
          $projet = $this->getDoctrine()->getRepository(Projet::class)->findBy(array('id'=>$id));
          if(!$projet)
          {
            throw $this->createNotFoundException(
              'pas d projet avec ce id'.$id
            );
            }
 
            {
              $projet[0]->setEtat("terminer"); 
              $entityManger->flush();
              return $this->redirectToRoute('app_projet');
             }
         }
 /**
     * @Route("/supprimerprojet/{id}", name="supprimerprojet")
     */
    public function supprimer(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findBy(array('id'=>$id));
        if(!$projet){
            throw $this->createNotFoundException('pas de projet avec ce id'.$id);
        }
        $entityManager->remove($projet[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_projet');
    }
         
 
}
