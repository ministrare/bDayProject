<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 11:15
 */

class Admin_Controller extends TinyMVC_Controller
{
    function index()
    {

        $page_view = new Page_Model('Admin');

        $this->view->display('admin_view');
    }
}

?>


