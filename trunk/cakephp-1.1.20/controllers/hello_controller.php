<?php
class HelloController extends AppController {
    var $layout = null;
    var $autoLayout = false;
    var $autoRender = false;
    var $uses = array();
    var $helpers = null;

    function index()
    {
        echo 'hello world';
    }
}
