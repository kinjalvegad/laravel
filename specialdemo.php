<?php
	spl_autoload_register(function ($class)
	{
		include $class . '.php';
	});
	$obj =new stud;
	$obj->studmethod();
	echo "<br>";
	
	$obj=new emp;
	$obj->empmethod();
?>