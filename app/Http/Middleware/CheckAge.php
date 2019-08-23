<?php

namespace App\Http\Middleware;
use Auth; 
use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $birth = Auth::user()->birth_date; 
        $now = date('Y-m-d'); 
        $diff = date_diff(date_create($birth), date_create($now));
        $age = $diff->format('%y'); 

        if ($age > 18) { 
            return $next($request);
          
        }
        return redirect('/home');
    }
}
