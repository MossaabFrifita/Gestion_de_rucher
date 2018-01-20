<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use rucher\RucheBundle\Entity\Intervention;
class AddIntervController extends Controller
{
    
	
	
	public function indexAction(){


	
		$em = $this->getDoctrine()->getEntityManager();

		$i = new Intervention();

	 $i->setContenu("exexexexexe");
	 $i->setIdRuche(58);

		
		$em->persist($i);
	     $em->flush();

        
	return new response("Added");
   




		
    }//end of function
	
	
}
	
