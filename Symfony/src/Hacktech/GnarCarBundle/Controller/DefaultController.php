<?php


namespace Hacktech\GnarCarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

 require_once('Flex.php');

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
    {    

     $user = new \uFlex(false);

 $user->db['user'] = "root";
    $user->db['pass'] = "";
    $user->db['name'] = "all_users";
        $user->start();
        echo $_POST['username'];


if(count($_POST)){
        //Register User
       if($user->register($_POST)!=false){

        echo json_encode(array(
           
            'Confirm'  => "User Registered Successfully. You may login now!",
            
        ));
    }else{
        echo json_encode(array(
     'Sorry:'  => "User not Registered.",
      ));
               
    }
        return $this->render('HacktechGnarCarBundle:Default:index.html.twig', array());
    }
    }
}
