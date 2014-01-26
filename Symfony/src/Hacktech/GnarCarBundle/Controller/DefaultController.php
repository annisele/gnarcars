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
      public function logging_inAction()
    {
        $user = new \uFlex(false);

 $user->db['user'] = "root";
    $user->db['pass'] = "";
    $user->db['name'] = "all_users";
        $user->start();
        echo $_POST['username'];
        //Proccess Login
if(count($_POST)){
    $username = isset($_POST['username']) ? $_POST['username'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $auto = isset($_POST['auto']) ? $_POST['auto'] : false;

    $user->login($username,$password,$auto);

    $errMsg = '';

    if($user->has_error()){
        $errMsg = $user->error();
        $errMsg = $errMsg[0];
    }

    echo json_encode(array(
        'error'    => $user->error(),
        'confirm'  => "You are now login as <b>$user->username</b>",
        'form'     => $user->form_error(),
    ));
}


        return $this->render('HacktechGnarCarBundle:Default:index.html.twig', array());
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
