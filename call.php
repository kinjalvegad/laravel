<?php 
    class a
    {
        public function __construct()
        {
            echo "hello";
        }
    }
    class b extends a 
    {
        public function alpha()
        {
           
            echo "world";
        }
    } 
    $obj=new b;
    
    $obj->alpha();
    
?>