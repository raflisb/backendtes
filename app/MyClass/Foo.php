<?php 

namespace App\MyClass; 

use Illuminate\Support\Facades\Facade;

Class Foo { 

    public function baz1($string) { 
      
        $reverse = '';
        $i = 0;
        while(!empty($string[$i])){ 
              $reverse = $string[$i].$reverse; 
              $i++;
        }
        return $reverse;
    }
    public function baz2() { 
        
        for ($i = 0 ; $i<=15; $i++){
            if ($i%3==0){
                echo 'iorem';
            }
            else{
            echo $i.", ";
            }
        }
    }
}


?> 
