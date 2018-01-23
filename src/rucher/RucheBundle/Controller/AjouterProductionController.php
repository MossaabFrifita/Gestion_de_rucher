<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use rucher\RucheBundle\Entity\Production;
class AjouterProductionController extends Controller
{
    
	
	
	public function indexAction(Request $request){
$request = $this->getRequest();

		
		if($request->isXmlHttpRequest()){
	
		$em = $this->getDoctrine()->getManager();

		
			 $p = new Production();
     $idRuche = $request->get('idRuche');
     $poids = $request->get('poids');
     $dateProd = $request->get('dateProd');

    $p->setPoids($poids);
    $p->setDateProd($dateProd);
    $p->setIdRuche($idRuche);
		
		$em->persist($p);
	     $em->flush();

        
	return new response("Added");
   



             }
		
    }//end of function
	
	
}
	
