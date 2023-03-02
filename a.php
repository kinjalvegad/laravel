<?php 
    class demo
    {
        public $a=10;
        public $b=20;
        public function add()    // member method
        {
            echo $this->a + $this->b;
            echo"<br>";
        }
        public function __construct()
        {
            echo $this->a / $this->b;
            echo "<br>";
        }
        public function mul()  //member method
        {
            echo $this->a * $this->b;
            echo "<br>";
        }
        public function __destruct()
        {
            echo $this->a-$this->b;
            echo "<br>";
        }

    }
$obj=new demo();
$obj->add();
$obj->mul();
?>