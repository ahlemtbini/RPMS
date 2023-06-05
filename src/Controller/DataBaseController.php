<?php

namespace App\Controller;

use App\Entity\AgenceDeCommunicationRp;
use App\Entity\ArtistesEtStylistes;
use App\Entity\CinemaEtCentreCuturel;
use App\Entity\Contacts2;
use App\Entity\Contacts;
use App\Entity\CosmetiqueEtParfum;
use App\Entity\DataBaseLm;
use App\Entity\DataBaseRpms;
use App\Entity\DataFournisseursBrut;
use App\Entity\Diplomatie;
use App\Entity\Divertissement;
use App\Entity\Foodie;
use App\Entity\Fournisseurs;
use App\Entity\HotelerieEtHebergement;
use App\Entity\JournalistesEtMedias;
use App\Entity\ShopEtConceptStore;
use App\Entity\TextileEtHabillement;
use App\Form\Contacts2Type;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataBaseController extends AbstractController
{
    /**
     * @Route("/data", name="app_data")
     */
    public function index(): Response
    {
        $agence = $this->getDoctrine()->getRepository(AgenceDeCommunicationRp::class)->findAll();
        $artistes = $this->getDoctrine()->getRepository(ArtistesEtStylistes::class)->findAll();
        $cinema = $this->getDoctrine()->getRepository(CinemaEtCentreCuturel::class)->findAll();
        $cosmetique = $this->getDoctrine()->getRepository(CosmetiqueEtParfum::class)->findAll();
        $dataLm = $this->getDoctrine()->getRepository(DataBaseLm::class)->findAll();
        $dataRpms = $this->getDoctrine()->getRepository(DataBaseRpms::class)->findAll();
        $dataf = $this->getDoctrine()->getRepository(DataFournisseursBrut::class)->findAll();
        $diplomatie = $this->getDoctrine()->getRepository(Diplomatie::class)->findAll();
        $divertissement = $this->getDoctrine()->getRepository(Divertissement::class)->findAll();
        $foodie = $this->getDoctrine()->getRepository(Foodie::class)->findAll();
        $hotele = $this->getDoctrine()->getRepository(HotelerieEtHebergement::class)->findAll();
        $journalistes = $this->getDoctrine()->getRepository(JournalistesEtMedias::class)->findAll();
        $shop= $this->getDoctrine()->getRepository(ShopEtConceptStore::class)->findAll();
        $textile = $this->getDoctrine()->getRepository(TextileEtHabillement::class)->findAll();
        return $this->render('data_base/index.html.twig', [
            'agence' => $agence,
            'artistes' => $artistes,
            'cinema' => $cinema,
            'cosmetique' => $cosmetique,
            'dataLm' => $dataLm,
            'dataRpms' => $dataRpms,
            'dataf' => $dataf,
            'diplomatie' => $diplomatie,
            'divertissement' => $divertissement,
            'foodie' => $foodie,
            'hotele' => $hotele,
            'journalistes' => $journalistes,
            'shop' => $shop,
            'textile' => $textile,


        ]);
    }
    





    /**
     * @Route("/contactRPMS", name="app_contactRPMS")
     */
    public function contactRPMS(): Response
    {
        $contactRPMS = $this->getDoctrine()->getRepository(Contacts2::class)->findAll();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();
        return $this->render('data_base/contactRPMS.html.twig', [
            'contactRPMS' => $contactRPMS,
            'contacts' => $contacts,

        ]);
    }

/**
     * @Route("/modifiercontactRPMS/{id}", name="modifiercontactRPMS")
     */
    public function modifiercontactRPMS(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contactRPMS = $this->getDoctrine()->getRepository(Contacts2::class)->findBy(array('id'=>$id));
        if(!$contactRPMS){
            throw $this->createNotFoundException('pas de contactRPMS avec ce id'.$id);
        }
            $contactRPMS=$contactRPMS[0];
            $form = $this->createForm(Contacts2Type::class ,$contactRPMS);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($contactRPMS);
                $entityManager->flush();
                return $this->redirectToRoute('app_contactRPMS');
            }

            return $this->render('data_base/modifiercontactRPMS.html.twig', [
                'contactRPMS' => $contactRPMS,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimercontactRPMS/{id}", name="supprimercontactRPMS")
     */
    public function supprimercontactRPMS(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $contactRPMS = $this->getDoctrine()->getRepository(Contacts2::class)->findBy(array('id'=>$id));
        if(!$contactRPMS){
            throw $this->createNotFoundException('pas de contactRPMS avec ce id'.$id);
        }
        $entityManager->remove($contactRPMS[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_contactRPMS');
    }









    /**
     * @Route("/modifieragence/{id}", name="modifieragence")
     */
    public function modifieragence(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $agence = $this->getDoctrine()->getRepository(AgenceDeCommunicationRp::class)->findBy(array('id'=>$id));
        if(!$agence){
            throw $this->createNotFoundException('pas de agence avec ce id'.$id);
        }
            $agence=$agence[0];
            $form = $this->createForm(AgenceType::class ,$agence);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($agence);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifieragence.html.twig', [
                'agence' => $agence,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimeragence/{id}", name="supprimeragence")
     */
    public function supprimeragence(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $agence = $this->getDoctrine()->getRepository(AgenceDeCommunicationRp::class)->findBy(array('id'=>$id));
        if(!$agence){
            throw $this->createNotFoundException('pas de agence avec ce id'.$id);
        }
        $entityManager->remove($agence[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }





    /**
     * @Route("/modifierartistes/{id}", name="modifierartistes")
     */
    public function modifierartistes(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $artistes = $this->getDoctrine()->getRepository(ArtistesEtStylistes::class)->findBy(array('id'=>$id));
        if(!$artistes){
            throw $this->createNotFoundException('pas de artistes avec ce id'.$id);
        }
            $artistes=$artistes[0];
            $form = $this->createForm(ArtistesType::class ,$artistes);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($artistes);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierartistes.html.twig', [
                'artistes' => $artistes,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerartistes/{id}", name="supprimerartistes")
     */
    public function supprimerartistes(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $artistes = $this->getDoctrine()->getRepository(ArtistesEtStylistes::class)->findBy(array('id'=>$id));
        if(!$artistes){
            throw $this->createNotFoundException('pas de artistes avec ce id'.$id);
        }
        $entityManager->remove($artistes[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }





    /**
     * @Route("/modifiercinema/{id}", name="modifiercinema")
     */
    public function modifiercinema(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $cinema = $this->getDoctrine()->getRepository(CinemaEtCentreCuturel::class)->findBy(array('id'=>$id));
        if(!$cinema){
            throw $this->createNotFoundException('pas de cinema avec ce id'.$id);
        }
            $cinema=$cinema[0];
            $form = $this->createForm(CinemaType::class ,$cinema);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($cinema);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifiercinema.html.twig', [
                'cinema' => $cinema,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimercinema/{id}", name="supprimercinema")
     */
    public function supprimercinema(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $cinema = $this->getDoctrine()->getRepository(CinemaEtCentreCuturel::class)->findBy(array('id'=>$id));
        if(!$cinema){
            throw $this->createNotFoundException('pas de cinema avec ce id'.$id);
        }
        $entityManager->remove($cinema[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }






    /**
     * @Route("/modifiercosmetique/{id}", name="modifiercosmetique")
     */
    public function modifiercosmetique(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $cosmetique = $this->getDoctrine()->getRepository(CosmetiqueEtParfum::class)->findBy(array('id'=>$id));
        if(!$cosmetique){
            throw $this->createNotFoundException('pas de cosmetique avec ce id'.$id);
        }
            $cosmetique=$cosmetique[0];
            $form = $this->createForm(CosmetiqueType::class ,$cosmetique);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($cosmetique);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifiercosmetique.html.twig', [
                'cosmetique' => $cosmetique,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimercosmetique/{id}", name="supprimercosmetique")
     */
    public function supprimercosmetique(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $cosmetique = $this->getDoctrine()->getRepository(CosmetiqueEtParfum::class)->findBy(array('id'=>$id));
        if(!$cosmetique){
            throw $this->createNotFoundException('pas de cosmetique avec ce id'.$id);
        }
        $entityManager->remove($cosmetique[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }





    /**
     * @Route("/modifierdataLm/{id}", name="modifierdataLm")
     */
    public function modifierdataLm(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dataLm = $this->getDoctrine()->getRepository(DataBaseLm::class)->findBy(array('id'=>$id));
        if(!$dataLm){
            throw $this->createNotFoundException('pas de dataLm avec ce id'.$id);
        }
            $dataLm=$dataLm[0];
            $form = $this->createForm(DataLmType::class ,$dataLm);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($dataLm);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierdataLm.html.twig', [
                'dataLm' => $dataLm,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerdataLm/{id}", name="supprimerdataLm")
     */
    public function supprimerdataLm(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dataLm = $this->getDoctrine()->getRepository(DataBaseLm::class)->findBy(array('id'=>$id));
        if(!$dataLm){
            throw $this->createNotFoundException('pas de dataLm avec ce id'.$id);
        }
        $entityManager->remove($dataLm[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }






    /**
     * @Route("/modifierdataRPMS/{id}", name="modifierdataRPMS")
     */
    public function modifierdataRPMS(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dataRPMS = $this->getDoctrine()->getRepository(DataBaseRpms::class)->findBy(array('id'=>$id));
        if(!$dataRPMS){
            throw $this->createNotFoundException('pas de dataRPMS avec ce id'.$id);
        }
            $dataRPMS=$dataRPMS[0];
            $form = $this->createForm(DataRPMSType::class ,$dataRPMS);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($dataRPMS);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierdataLm.html.twig', [
                'dataRPMS' => $dataRPMS,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerdataRPMS/{id}", name="supprimerdataRPMS")
     */
    public function supprimerdataRPMS(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dataRPMS = $this->getDoctrine()->getRepository(DataBaseRpms::class)->findBy(array('id'=>$id));
        if(!$dataRPMS){
            throw $this->createNotFoundException('pas de dataRPMS avec ce id'.$id);
        }
        $entityManager->remove($dataRPMS[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }







    /**
     * @Route("/modifierdataf/{id}", name="modifierdataf")
     */
    public function modifierdataf(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dataf = $this->getDoctrine()->getRepository(DataFournisseursBrut::class)->findBy(array('id'=>$id));
        if(!$dataf){
            throw $this->createNotFoundException('pas de dataf avec ce id'.$id);
        }
            $dataf=$dataf[0];
            $form = $this->createForm(DatafType::class ,$dataf);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($dataf);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierdataf.html.twig', [
                'dataf' => $dataf,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerdataf/{id}", name="supprimerdataf")
     */
    public function supprimerdataf(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $dataf = $this->getDoctrine()->getRepository(DataFournisseursBrut::class)->findBy(array('id'=>$id));
        if(!$dataf){
            throw $this->createNotFoundException('pas de dataf avec ce id'.$id);
        }
        $entityManager->remove($dataf[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }







    /**
     * @Route("/modifierdiplomatie/{id}", name="modifierdiplomatie")
     */
    public function modifierdiplomatie(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $diplomatie = $this->getDoctrine()->getRepository(Diplomatie::class)->findBy(array('id'=>$id));
        if(!$diplomatie){
            throw $this->createNotFoundException('pas de diplomatie avec ce id'.$id);
        }
            $diplomatie=$diplomatie[0];
            $form = $this->createForm(DiplomatieType::class ,$diplomatie);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($diplomatie);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierdiplomatie.html.twig', [
                'diplomatie' => $diplomatie,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerdiplomatie/{id}", name="supprimerdiplomatie")
     */
    public function supprimerdiplomatie(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $diplomatie = $this->getDoctrine()->getRepository(Diplomatie::class)->findBy(array('id'=>$id));
        if(!$diplomatie){
            throw $this->createNotFoundException('pas de diplomatie avec ce id'.$id);
        }
        $entityManager->remove($diplomatie[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }







    /**
     * @Route("/modifierdivertissement/{id}", name="modifierdivertissement")
     */
    public function modifierdivertissement(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $divertissement = $this->getDoctrine()->getRepository(Divertissement::class)->findBy(array('id'=>$id));
        if(!$divertissement){
            throw $this->createNotFoundException('pas de divertissement avec ce id'.$id);
        }
            $divertissement=$divertissement[0];
            $form = $this->createForm(DivertissementType::class ,$divertissement);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($divertissement);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierdivertissement.html.twig', [
                'divertissement' => $divertissement,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerdivertissement/{id}", name="supprimerdivertissement")
     */
    public function supprimerdivertissement(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $divertissement = $this->getDoctrine()->getRepository(Divertissement::class)->findBy(array('id'=>$id));
        if(!$divertissement){
            throw $this->createNotFoundException('pas de divertissement avec ce id'.$id);
        }
        $entityManager->remove($divertissement[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }







    /**
     * @Route("/modifierfoodie/{id}", name="modifierfoodie")
     */
    public function modifierfoodie(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $foodie = $this->getDoctrine()->getRepository(Foodie::class)->findBy(array('id'=>$id));
        if(!$foodie){
            throw $this->createNotFoundException('pas de foodie avec ce id'.$id);
        }
            $foodie=$foodie[0];
            $form = $this->createForm(FoodieType::class ,$foodie);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($foodie);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierfoodie.html.twig', [
                'foodie' => $foodie,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerfoodie/{id}", name="supprimerfoodie")
     */
    public function supprimerfoodie(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $foodie = $this->getDoctrine()->getRepository(Foodie::class)->findBy(array('id'=>$id));
        if(!$foodie){
            throw $this->createNotFoundException('pas de foodie avec ce id'.$id);
        }
        $entityManager->remove($foodie[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }





    /**
     * @Route("/modifierhotele/{id}", name="modifierhotele")
     */
    public function modifierhotele(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $hotele = $this->getDoctrine()->getRepository(HotelerieEtHebergement::class)->findBy(array('id'=>$id));
        if(!$hotele){
            throw $this->createNotFoundException('pas de hotele avec ce id'.$id);
        }
            $hotele=$hotele[0];
            $form = $this->createForm(HoteleType::class ,$hotele);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($hotele);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierhotele.html.twig', [
                'hotele' => $hotele,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerhotele/{id}", name="supprimerhotele")
     */
    public function supprimerhotele(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $hotele = $this->getDoctrine()->getRepository(HotelerieEtHebergement::class)->findBy(array('id'=>$id));
        if(!$hotele){
            throw $this->createNotFoundException('pas de hotele avec ce id'.$id);
        }
        $entityManager->remove($hotele[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }






    /**
     * @Route("/modifierjournalistes/{id}", name="modifierjournalistes")
     */
    public function modifierjournalistes(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $journalistes = $this->getDoctrine()->getRepository(JournalistesEtMedias::class)->findBy(array('id'=>$id));
        if(!$journalistes){
            throw $this->createNotFoundException('pas de journalistes avec ce id'.$id);
        }
            $journalistes=$journalistes[0];
            $form = $this->createForm(JournalistesType::class ,$journalistes);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($journalistes);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifierjournalistes.html.twig', [
                'journalistes' => $journalistes,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimerjournalistes/{id}", name="supprimerjournalistes")
     */
    public function supprimerjournalistes(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $journalistes = $this->getDoctrine()->getRepository(JournalistesEtMedias::class)->findBy(array('id'=>$id));
        if(!$journalistes){
            throw $this->createNotFoundException('pas de journalistes avec ce id'.$id);
        }
        $entityManager->remove($journalistes[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }





    /**
     * @Route("/modifiershop/{id}", name="modifiershop")
     */
    public function modifiershop(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $shop = $this->getDoctrine()->getRepository(ShopEtConceptStore::class)->findBy(array('id'=>$id));
        if(!$shop){
            throw $this->createNotFoundException('pas de shop avec ce id'.$id);
        }
            $shop=$shop[0];
            $form = $this->createForm(ShopType::class ,$shop);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($shop);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifiershop.html.twig', [
                'shop' => $shop,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimershop/{id}", name="supprimershop")
     */
    public function supprimershop(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $shop = $this->getDoctrine()->getRepository(ShopEtConceptStore::class)->findBy(array('id'=>$id));
        if(!$shop){
            throw $this->createNotFoundException('pas de shop avec ce id'.$id);
        }
        $entityManager->remove($shop[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }






    /**
     * @Route("/modifiertextile/{id}", name="modifiertextile")
     */
    public function modifiertextile(int $id,Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $textile = $this->getDoctrine()->getRepository(TextileEtHabillement::class)->findBy(array('id'=>$id));
        if(!$textile){
            throw $this->createNotFoundException('pas de textile avec ce id'.$id);
        }
            $textile=$textile[0];
            $form = $this->createForm(TextileType::class ,$textile);
            $form->handleRequest($request);
            if ($form->isSubmitted()){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($textile);
                $entityManager->flush();
                return $this->redirectToRoute('app_data');
            }

            return $this->render('data_base/modifiertextile.html.twig', [
                'textile' => $textile,
                'form' => $form->createView()
            ]);
  
    }

    /**
     * @Route("/supprimertextile/{id}", name="supprimertextile")
     */
    public function supprimertextile(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $textile = $this->getDoctrine()->getRepository(TextileEtHabillement::class)->findBy(array('id'=>$id));
        if(!$textile){
            throw $this->createNotFoundException('pas de textile avec ce id'.$id);
        }
        $entityManager->remove($textile[0]);
        $entityManager->flush();
        return $this->redirectToRoute('app_data');
    }






    


    
}
