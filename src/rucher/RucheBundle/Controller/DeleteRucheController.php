<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DeleteRucheController extends Controller
{
    public function indexAction(Request $request)
    {
        
        //$idruche=$id;


        
        $request = $this->getRequest();

		
		if($request->isXmlHttpRequest()){
		$idRuche = $request->get('idRuche');

        $em = $this->getDoctrine()->getManager();

        

        $Interventions = $em->getRepository('RucheBundle:Intervention')->findBy( array('idRuche' => $idRuche, ));


foreach ($Interventions as $Intervention) {
    $em->remove($Intervention);
}

$em->flush();
       

 $Ruche = $em->getRepository('RucheBundle:Ruche')->findOneBy( array('id' => $idRuche, ));
     $em->remove($Ruche);
     $em->flush();  
        
        
     return new response("delete !");   
        
      } 
    }
}
