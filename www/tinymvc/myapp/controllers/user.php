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
        $page_view = new Page_Model('Gebruikers');

        $this->view->display('User_view');
    }
}
