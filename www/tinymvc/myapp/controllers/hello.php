<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 11:18
 */

class Hello_Controller extends TinyMVC_Controller
{
    function index()
    {
        // load the model
        $this->load->model('Page_Model','page');
        // alternately, specify the connection pool (default is "default")
        // $this->load->model('Page_Model','page',null,'mypool');

        // use the model to gather data
        $title = $this->page->get_title();
        $body_text = $this->page->get_body_text();

        $this->view->assign('title',$title);
        $this->view->assign('body_text',$body_text);
        $this->view->display('hello_view');
    }
}