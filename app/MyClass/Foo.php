<?php 

namespace App\MyClass; 

use Illuminate\Support\Facades\Facade;

Class Foo { 

    public function baz1() { 
        $string='WeCan Team';
        $reverse = '';
        $i = 0;
        while(!empty($string[$i])){ 
              $reverse = $string[$i].$reverse; 
              $i++;
        }
        return $reverse;
    }
    public function baz2() { 
        
        for ($i = 1 ; $i<=15; $i++){
            if ($i%3==0 && $i%5==0) {
                echo 'iorem Ipsum, ';
            }
            else if ($i%5==0){
                echo 'ipsum, ';
            }
            else if ($i%3==0) {
                echo 'iorem, ';
            }

            else{
            echo $i.", ";
            }
        }
    }

    public function baz3(){ 
        return 'baz3 method not ready'; 
    }

    public function baz4(){ 
        return 'baz4 method not ready'; 
    }

    public function baz5(){ 
        return 'baz5 method not ready'; 
    }

    















}


?> 
