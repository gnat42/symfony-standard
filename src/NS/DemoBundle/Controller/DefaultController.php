<?php

namespace NS\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $s = $this->get('ns_demo.example');
        
        return $this->render('NSDemoBundle:Default:index.html.twig', array('name' => $s->getSomething()));
    }
    
    public function formAction($id)
    {
        $demo = ($id == null) ? new \NS\DemoBundle\Entity\Demo():$this->getDoctrine ()->getEntityManager ()->getRepository ('NSDemoBundle:Demo')->find($id);
        $form = $this->createForm(new \NS\DemoBundle\Form\DemoType(),$demo);
        
        if($this->getRequest()->getMethod() == 'POST')
        {
            $form->bind($this->getRequest());
            if(!$form->isValid())
            {
                die($form->getErrorsAsString ());
            }
            
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($demo);
            $em->flush();
        }
        return $this->render('NSDemoBundle:Default:form.html.twig', array('id'=>$id,'form'=>$form->createView()));
    }
}
