<?php

class Login_Controller extends TinyMVC_Controller
{
    function index()
    {
        //$page_view = new Page_Model('Homepage');
        //$this->view->display('index_view');

        $user = new User_Model();

        $email = empty($_POST['email'])? '' : $_POST['email'];
        $surName = empty($_POST['surname'])? '' : $_POST['surname'];
        $lastName = empty($_POST['lastname'])? '' : $_POST['lastname'];

        // @TODO: Add Username and Password to the Check before continue to next page.
        // @TODO: Rebuild to Switch Case for multiple wrong login actions/attempts.
        if($user->checkUserExists($email)){

            $userId = $user->getUserId($email);

            session_start();
            $_SESSION['id'] = $userId;

            header('Location: /user?id='.$userId);

            die('Found');
        }else{
            $user->storeNewUser($email, $surName, $lastName);
            $userId = $user->getUserId();

            session_start();
            $_SESSION['id'] = $userId;

            header('Location: /user?id='.$userId);

            die('New');
        }
    }
}