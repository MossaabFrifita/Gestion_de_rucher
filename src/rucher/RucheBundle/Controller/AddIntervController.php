<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


use rucher\RucheBundle\Entity\Intervention;
class AddIntervController extends Controller
{
    
	
	
	public function indexAction(Request $request){

if($request->isXmlHttpRequest()){
	

		$em = $this->getDoctrine()->getEntityManager();

		$i = new Intervention();

     $Contenu = $request->get('contenu');
     $IdRuche = $request->get('idRuche');
	 $i->setContenu($Contenu);
	 $i->setIdRuche($IdRuche);

		
		$em->persist($i);
	     $em->flush();

        
	return new response("Added");
   }
else
    return new response("Error_query");




		
    }//end of function
	
	
}
	
