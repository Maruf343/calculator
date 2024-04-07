<?php

    class calculation{
        public $result= 0;
        public function __construct($num1,$num2,$operator){
            if(isset($_POST["btn"])){
                $num1=$_POST["number1"];
                $num2=$_POST["number2"];
                $operator=$_POST["operator"];
            }
            if($operator=="+"){
                $result = $num1 + $num2;
                echo $result;
            }elseif($operator=="-"){
                $result = $num1 - $num2;
                echo $result;
            }elseif($operator=="*"){
                $result = $num1 * $num2;
                echo $result;
            }elseif($operator=="/"){
                $result = $num1 / $num2;
                echo $result;
            }
        }
    }
