<?php
	class test
	{
		public function __construct()
		{
			echo "construct";
		}
		public function test()
		{
			echo "hello";
		}
		public function __destruct()
		{
			echo"distruct";
		}
	}
$obj=new test;
echo "<br>";
$obj->test();
echo"<br>";	
?>