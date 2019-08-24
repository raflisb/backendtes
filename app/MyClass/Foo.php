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
        $array = [] ;
        for ($i = 1 ; $i<=15; $i++){
            if ($i%3==0 && $i%5==0) {
                array_push($array,'iorem Ipsum, ');
            }
            else if ($i%5==0){
                array_push($array, 'ipsum, ');
            }
            else if ($i%3==0) {
                array_push($array,'iorem, ');
            }

            else{
            array_push($array, $i.", ");
            }
        }
        return $array; 
    }

    public function baz3(){ 
        $array = [] ; 
        
        for ($int = 1; $int <= 20; $int++) {
            if ($int % 2 == 1) {
            
             array_push($array,$int); 
            }
        }
       
        return $array;
        
    }

    public function baz4(){ 
        
       $array = $this->baz3(); 
       $newArray = [] ; 


       foreach ($array as $value) { 
           $kali = $value * 10; 
           array_push($newArray, $kali); 
       }
       // saya menggunakan function NumberFormatter
       // dengan mengenable extension intl di php.ini
        $terbF  = new NumberFormatter('id-ID', NumberFormatter::SPELLOUT);
        $arr =  array_map(function($v) use ($terbf) {
                return $terbf->format($v);
            }, $newArray);
        
        return $arr; 

    }

    public function baz5(){ 
        $array = $this->baz3(); 
        $newArray= [] ; 
        $total = array_reduce($array, function ($carry, $arrays){ 
            return $carry*$arrays; 
        }, 1);
        return $total; 
    }

    

    // function terbilang($angka) {
    //     $terbF  = new NumberFormatter('id-ID', NumberFormatter::SPELLOUT);
    //     // 'id-ID' format penulisan bahasa id : Indonesia
    //     return $terbF->format($angka);
    // }
     
    // $angka = 1255555;
    // $huruf = terbilang($angka); 
    
    // $nf = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    // $arr = array_map(function($v) use ($nf) {
    //     return $nf->format($v);
    // }, $arr);
    // print_r($arr); // Array ( [0] => two [1] => four [2] => seven [3] => eight )

  
    // $bilangan=1234; // Nilai Proses
    // $fzeropadded = sprintf("%07d", $bilangan);
    // echo "$fzeropadded "; // Hasil 0001234













}


?> 
