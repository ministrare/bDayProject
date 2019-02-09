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

        $this->view->display('test_view');
    }
}
