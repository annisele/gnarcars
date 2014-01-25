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

    public function resultsAction()
    {
    	return $this->render('HacktechGnarCarBundle:Default:results.html.twig', array());
    }

    public function joinTripAction()
    {
    	return $this->render('HacktechGnarCarBundle:Default:join_trip.html.twig', array());
    }
}
