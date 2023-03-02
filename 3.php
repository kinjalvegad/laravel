<?php 
	$a=25;
	$b=25;
	function test()
	{
		$GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
	}
test();
echo$c
?>
//50