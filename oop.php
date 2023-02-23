<?php 
    class a
    {
        public $a="pgdca";
        public function __construct()
        {
            echo $this -> a;
            
        }
    }    
    class b extends a
    {
        public $b="students";
        public function __destruct()
        {
            echo $this ->b;
            
        }
    } 
    class c extends b
    {
        public $c="sem2";
        public function test()
        {
            echo $this->c;
        }
    }
$obj= new c;
$obj->test();
?>    