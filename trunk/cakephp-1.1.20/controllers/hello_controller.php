<?php
class HelloController extends AppController {
    var $layout = null;
    var $autoLayout = false;
    var $uses = array();
    var $helpers = null;

    function index()
    {
        die('hello world');
    }
}
