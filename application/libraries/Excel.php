<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("PHPExcel.php");
class Excel extends PHPExcel{
	public function _construct(){
		parent::_construct();
	}
}