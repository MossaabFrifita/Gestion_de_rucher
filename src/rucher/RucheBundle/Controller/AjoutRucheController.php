<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use rucher\RucheBundle\Entity\Ruche;
class AjoutRucheController extends Controller
{
    
	
	
	public function indexAction(Request $request){
$request = $this->getRequest();

		
		if($request->isXmlHttpRequest()){
	
		$em = $this->getDoctrine()->getEntityManager();

		
			 $r = new Ruche();
     $NomRuche = $request->get('nomRuche');
     $PosRuche = $request->get('PosRuche');
     $idApiculteur= $request->get('idApiculteur');
	 $r->setNomRuche($NomRuche);
	 $r->setPosition($PosRuche);
	 $r->setIdApiculteur($idApiculteur);
		
		$em->persist($r);
	     $em->flush();

        $emm = $this->getDoctrine()->getEntityManager();
        $listeRuche = $emm->getRepository("RucheBundle:Ruche")->findBy(array('idApiculteur'=> $idApiculteur));
        
	return new response("Added");
   



             }
		
    }//end of function
	
	
}
	
