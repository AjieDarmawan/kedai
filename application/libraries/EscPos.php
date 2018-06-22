<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Mike42\Escpos\Printer;
    	use Mike42\Escpos\PrintConnectors\FilePrintConnector;
        use Mike42\Escpos\EscposImage;
  class Escpos
  {
  	public function __construct()
  	{
    	require_once APPPATH . 'third_party/Mike42/autoloader.php';
    	
  	}
  }
  
