<?php

namespace rucher\RucheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        
        $idApi=$id;
        $em = $this->getDoctrine()->getEntityManager();
        $listeRuche = $em->getRepository("RucheBundle:Ruche")->findBy(array('idApiculteur'=>$idApi));
        
        
        
        return $this->render('RucheBundle:Default:index.html.twig', array('listeRuche' => $listeRuche,'idApiculteur' => $idApi));
        
       
    }
}
