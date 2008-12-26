<?php
class BenchmarkController extends AppController {

	var $helpers = null; //Because the 'Html' and 'Form' helpers are enabled by default
	var $uses = array();
	var $components = array();
    var $layout = null;
    var $autoLayout = false;


	function index() {
    	die("Hello World");
    }
}

?>