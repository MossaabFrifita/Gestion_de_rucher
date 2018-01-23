<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;



class AfficherProductionController extends Controller
{
    		
	public function indexAction(){
        
        $request = $this->getRequest();
            if($request->isXmlHttpRequest()){
	
				$em = $this->getDoctrine()->getManager();
			    $IdRuche = $request->get('IdRuche');
	
$listeIntervention = $em->getRepository("RucheBundle:Production")->findBy(array('idRuche'=> $IdRuche)); 


$encoders = array('xml' => new XmlEncoder(), 'json' => new JsonEncoder());
$normalizers = array(new GetSetMethodNormalizer());

$serializer = new Serializer($normalizers, $encoders);

$jsonContent = $serializer->serialize($listeIntervention, 'json');


return new response($jsonContent);
			


            }
		
    }//end of function
	
	
}
	
