<?php

namespace rucher\loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class loginController extends Controller
{
    public function indexAction()
    {
        return $this->render('loginBundle:login:login.html.twig',array('res'=>'true'));
		
    }
	
	
	public function TestAction(Request $request){
		if($request->getMethod()=='POST'){
		    $user =$request->get('login');
            $password =$request->get('password');	
            $em	= $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('loginBundle:apiculteur');

            $user = $repository->findOneBy(array('login'=>$user,'password'=>$password));
			
			if($user){

				return $this->render('loginBundle:login:test.html.twig',array('res'=>'true'));
	
			}

			else {
	
				return $this->render('loginBundle:login:login.html.twig',array('res'=>'false'));
	
			}	
			
			
		}
	




		
	}	
		
}
