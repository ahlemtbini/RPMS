<?php

namespace App\Controller;

use App\Entity\Fournisseurs;
use App\Entity\Projet;
use App\Entity\TarifRPMS;
use App\Entity\Contacts;
use App\Form\ProjetType;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ServiceFinencierController extends AbstractController
{
    /**
     * @Route("/financier", name="app_financier")
     */
    public function finencier(): Response
    {
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        $contacts = $this->getDoctrine()->getRepository(Contacts::class)->findAll();
        return $this->render('Service_finencier/index.html.twig', [
            'projet' => $projet,
            'contacts' => $contacts,

        ]);
    }
}
