<?php


namespace Pidev\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ob\HighchartsBundle\Highcharts\Highchart;
/**
 * Description of AbonnementController
 *
 * @author user
 */
class AbonnementController extends Controller {
    //put your code here
    
     public function abonnlistAction()     {

       $em= $this->getDoctrine()->getManager();
        $abonnements = $em->getRepository('PidevFrontOfficeBundle:Abonnement')->findAll();
 return $this->render('PidevBackOfficeBundle:Abonnementtwig:Listabonnementadmin.html.twig', array('abonnements' => $abonnements)); 
    }
    
    public function suppabonnAction($id)     {

       $em= $this->getDoctrine()->getManager();
        $abonnements = $em->getRepository('PidevFrontOfficeBundle:Abonnement')->find($id);
        $em->remove($abonnements);
        $em->flush();
        
 return $this->redirect($this->generateUrl("liste_abonnements"));
    }
    
    public function exportpdfAction()
    {
        
        $em= $this->getDoctrine()->getManager();
        $abonnements = $em->getRepository('PidevFrontOfficeBundle:Abonnement')->findAll();
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('PidevBackOfficeBundle:Abonnementtwig:Listabonn.html.twig', array('abonnements' => $abonnements));
         
       // on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
       // le sens de la page "portrait" => p ou "paysage" => l
       // le format A4,A5...
       // la langue du document fr,en,it...
       $html2pdf = new \Html2Pdf_Html2Pdf('P','A2','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('fullpage');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
       $html2pdf->writeHTML($html);
        $response = new Response();
 
$response->headers->set('Content-Type','application/pdf');

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Liste.pdf');
         
     
       
        
        
        
        
        return $response;
    } 
}
