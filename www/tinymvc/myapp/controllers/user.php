<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 12:57
 */


class User_Controller extends TinyMVC_Controller
{
    function index()
    {
        session_start();
        $email = isset($_GET['email'])? $_GET['email']: false;

        // @ToDo: Create Security Check into a function...
        // Security Check
        $security = isset($_SESSION['email']) ? $_SESSION['email'] : false;
        $check = $email == $security ? true : false;
        if(!$email && !$security && !$check){
            header('refresh:5;url=/');

            $page_view = new Page_Model('404 - Hack attempt!');
            $this->view->display('user_view');

            die();
        }

        $user = new User_Model();
        $user->getUser($email);

        $page_view = new Page_Model('Uw Persoonlijke Playlist');
        $this->view->assign('surName',$user->getUserFirstName());
        $this->view->assign('lastName',$user->getUserLastName());
        $this->view->display('user_view');
    }

    function logout()
    {
        $page_view = new Page_Model('Thank you!!');

        $this->view->display('logout_view');
    }
}
