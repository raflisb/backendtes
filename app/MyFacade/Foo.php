<?php 

namespace App\MyFacade; 

use Illuminate\Support\Facades\Facade;

class Foo extends Facade {
    
    protected static function getFacadeAccessor() { 
        return 'value'; 
    }
}


