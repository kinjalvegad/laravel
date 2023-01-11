<?php
	class a
	{
		public $a="hello";
		public function __construct()
		{
			echo $this->a;
			echo "<br>";
		}
	}
	class b extends a
	{
		public $b="students";
		public function __destruct()
		{
			echo $this->b;
			echo "<br>";
		}
	}
	class c extends b
	{
		public $c="geetanjali";
		public function disp()
		{
			echo $this->c;
			echo "<br>";
		}
	}
	$obj=new c;
	$obj->disp();
?>