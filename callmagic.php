<?php 
	class test
	{
		public function demo($name,$parameters)
		{
			echo $name;
			echo $parameters;
		}
		public function __call($name,$parameters)
		{
			echo $name;
			echo $parameters;
		}
	}
$obj=new test();

?>