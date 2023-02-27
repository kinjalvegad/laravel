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
$obj=new demo;
$obj->disp();	
?>