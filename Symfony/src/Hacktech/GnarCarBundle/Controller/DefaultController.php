<?php

namespace Hacktech\GnarCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	// this returns a view file found in our Resources/views
        return $this->render('HacktechGnarCarBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
    {
    	return $this->render('HacktechGnarCarBundle:Default:login.html.twig', array());
    }

    public function searchAction()
    {
    	return $this->render('HacktechGnarCarBundle:Default:search.html.twig', array());
    }

    public function formAction()
    {
    	return $this->render('HacktechGnarCarBundle:Default:form.html.twig', array());
    }
}
