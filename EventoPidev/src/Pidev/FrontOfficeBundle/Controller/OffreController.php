<?php

namespace Pidev\FrontOfficeBundle\Controller;

use Pidev\FrontOfficeBundle\Entity\Offre;
use Pidev\FrontOfficeBundle\Entity\Utilisateur;
use Pidev\FrontOfficeBundle\Entity\DemandeService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller {

    public function listOffreAction() {
        $user = $this->getUser();
        $idU = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $offres = $em->getRepository('PidevFrontOfficeBundle:Offre')->findAll();
        $DemandesClient = $em->getRepository('PidevFrontOfficeBundle:DemandeService')->findBy(array('idClient' => $idU)); //id client Manuel
        return $this->render('PidevFrontOfficeBundle:Offre:OffreClient.html.twig', array('offres' => $offres, 'DemandesClient' => $DemandesClient));
    }

    public function afficheOffreAction($id) {
        $user = $this->getUser();
        $idU = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository('PidevFrontOfficeBundle:Offre')->find($id);
        $DemandesClient = $em->getRepository('PidevFrontOfficeBundle:DemandeService')->findBy(array('idClient' => $idU)); //id client Manuel
        return $this->render('PidevFrontOfficeBundle:Offre:AfficheOffreClient.html.twig', array('offre' => $offre, 'DemandesClient' => $DemandesClient));
    }

    public function ajouterOffreAction() {

        $em = $this->getDoctrine()->getManager();
        $prestataires = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->findBy(array('nature' => '0'));


        $offre = new Offre();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {

            $titre = $request->get('titre');
            $prix = $request->get('prix');
            $description = $request->get('description');
            $dateDebut = $request->get('dateDebut');
            $dateFin = $request->get('dateFin');
            $prestataire = $request->get('prestataire');
            $user = new Utilisateur();
            $user = $this->getUser();
            $idU = $user->getId();
//             $user = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->findBy(array('nom' => $prestataire)); 

            $user = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($idU);
            $categorie = $request->get('categorie');

            $offre->setTitre($titre);
            $offre->setPrix($prix);
            $offre->setDescription($description);
            $offre->setDateDebut(new \DateTime($dateDebut));
            $offre->setDateFin(new \DateTime($dateFin));
            $offre->setIdPrestataire($user);
            $offre->setCategorie($categorie);

            $em = $this->get('Doctrine')->getManager();
            $em->persist($offre);

            $em->flush();
            return $this->redirect($this->generateURL("list_offre_client"));
        } else {
            return $this->render('PidevFrontOfficeBundle:Offre:ajouterOffreClient.html.twig', array('prestataires' => $prestataires));
        }
    }

    public function supprimerAction($id) {

        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository("PidevFrontOfficeBundle:Offre")->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateURL("list_offre_prestataire"));
    }

    public function afficheOffrePrestataireAction() {
$user =  $this->getUser();
  $idU = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $offres = $em->getRepository('PidevFrontOfficeBundle:Offre')->findBy(array('idPrestataire' => $idU)); //7 = id prestataire connecté 
        return $this->render('PidevFrontOfficeBundle:Offre:AfficheOffrePrestataire.html.twig', array('offres' => $offres));
    }

    public function modifierAction($id) {

        $em = $this->getDoctrine()->getManager();
        $prestataires = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->findBy(array('nature' => '0'));
        $soffre = $em->getRepository('PidevFrontOfficeBundle:Offre')->find($id);


        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {

            $titre = $request->get('titre');
            $prix = $request->get('prix');
            $description = $request->get('description');
            $dateDebut = $request->get('dateDebut');
            $dateFin = $request->get('dateFin');
            $prestataire = $request->get('prestataire');
            $user = new Utilisateur();
            $user = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find('7');
            $categorie = $request->get('categorie');


            $offre = new Offre();
            $offre->setTitre($titre);
            $offre->setPrix($prix);
            $offre->setDescription($description);
            $offre->setDateDebut(new \DateTime($dateDebut));
            $offre->setDateFin(new \DateTime($dateFin));
            $offre->setIdPrestataire($user);
            $offre->setCategorie($categorie);

            $em = $this->get('Doctrine')->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirect($this->generateURL("list_offre_client"));
        } else {
            return $this->render('PidevFrontOfficeBundle:Offre:modifierOffrePrestataire.html.twig', array('prestataires' => $prestataires, 'soffre' => $soffre));
        }
    }

    public function demandeAction($id_offre) {
$user =  $this->getUser();
  $idU = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $id_client = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($idU);
        $id_offres = $em->getRepository('PidevFrontOfficeBundle:Offre')->find($id_offre);
        $demandeOffre = new DemandeService();

        $demandeOffre->setIdClient($id_client);
        $demandeOffre->setIdOffre($id_offres);
        $demandeOffre->setEtat("en attente");
        $demandeOffre->setDate(new \Datetime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($demandeOffre);
        $em->flush();
        return $this->redirect($this->generateURL("list_offre_client"));
    }

    public function accepterAction() {

        $em = $this->getDoctrine()->getManager();
        $offres = $em->getRepository('PidevFrontOfficeBundle:Offre')->findAll();
        $demandeOffre = $em->getRepository('PidevFrontOfficeBundle:DemandeService')->findBy(array('etat' => 'en attente'));
        $users = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->findBy(array('nature' => '1'));
        return $this->render('PidevFrontOfficeBundle:Offre:AccepterDemandes.html.twig', array('offres' => $offres, 'demandeOffre' => $demandeOffre, 'users' => $users));
    }

    public function accepterDemandesAction($idClient, $idOffre) {

        $em = $this->getDoctrine()->getManager();

        $demandeOffre = $em->getRepository('PidevFrontOfficeBundle:DemandeService')->findDemandeService($idClient, $idOffre);
        $demandeOffre->setEtat("accepter");
        $em->persist($demandeOffre);
        $em->flush();
        return $this->redirect($this->generateURL("list_demande"));
    }

}
