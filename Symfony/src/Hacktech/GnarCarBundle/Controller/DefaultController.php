<?php

namespace Hacktech\GnarCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	// this returns a view file found in our Resources/views
        return $this->render('HacktechGnarCarBundle:Default:index.html.twig', array());
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

     public function registerAction()
    {   echo $_POST['username'];
echo $_POST['email'];
echo $_POST['password'];
        return $this->render('HacktechGnarCarBundle:Default:register.html.twig', array());
    }
}
