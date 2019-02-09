<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 11:18
 */

class Login_Controller extends TinyMVC_Controller
{
    function index()
    {

        $page_view = new Page_Model('Homepage');

        $this->view->display('login_view');
    }
}