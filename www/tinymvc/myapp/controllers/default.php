<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
    $page_view = new Page_Model('Homepage');

    $this->view->display('index_view');
  }
}

?>
