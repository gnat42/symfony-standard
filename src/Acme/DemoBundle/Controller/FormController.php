<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\DemoBundle\Form\PersonType; 

class FormController extends Controller
{
    /**
     * @Route("/formtest", name="_formtest")
     * @Template()
     */
    public function indexAction()
    {
        $form = $this->get('form.factory')->create(new PersonType());
        
        return array('form'=>$form->createView()); //$this->render('AcmeDemoBundle:Form:index.html.twig',array('form'=>$form->createView()));
    }
}
