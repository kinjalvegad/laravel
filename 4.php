<?php 
    class a // parent class
	{
		public function test()
		{
			echo"hello";
			echo"</br>";
		}
	}
	class b  extends a// child class
	{
		public function test1()
		{
			echo"world";
		}
	}
$obj=new b;
$obj->test();
$obj->test1();
?>