<?php 
	class test
	{
		public $a="hello";
		public function __construct()
		{
			echo $this->a;
		}
	}
	$obj=new test;
?>