<?php
/**
 * Created by PhpStorm.
 * User: error
 * Date: 9/02/2019
 * Time: 12:57
 */


class Test_Controller extends TinyMVC_Controller
{
    function index()
    {
        $page_view = new Page_Model('Test_page');
        $user = new User_Model();

        // Return True of False
        // die( $user->checkIfUserExists('admin@site.be') );

        // Stores new User, required parameters: email, optional parameter: admin, password;
        // $user->storeNewUser('adminTest2@site.be', 1, 'password');

        $this->view->display('test_view');
    }
}
