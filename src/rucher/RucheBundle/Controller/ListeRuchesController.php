<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class ListeRuchesController extends Controller
{
    public function indexAction()
    {

		$request = $this->getRequest();
	    if($request->isXmlHttpRequest()){  
	        $idApi = $request->get('idApi');  
			$em = $this->getDoctrine()->getEntityManager();
			$listeRuche = $em->getRepository("RucheBundle:Ruche")->findBy(array('idApiculteur'=>$idApi));
			$encoders = array('xml' => new XmlEncoder(), 'json' => new JsonEncoder());
			$normalizers = array(new GetSetMethodNormalizer());
			$serializer = new Serializer($normalizers, $encoders);
			$jsonContent = $serializer->serialize($listeRuche, 'json');
			return new response($jsonContent);

	        
	    }

    }
}
