<?php 
	interface a
	{
		public function disp();
	}
	class demo implements a
	{
		public function disp()
		{
			echo "this is display method";
		}
	}
	class test extends demo
	{
		public function demo()
		{
			echo "this is demo method";
			echo "<br>";
		}
	}
$obj=new test;
$obj->demo();	
$obj->disp();	
?>