<?php

namespace App\Http\Middleware;


use App\AppConst\CommonFunctions;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Category;

/**
 * Get Configuration Data to View for all pages
 *
 * @package App\Http\Middleware
 */
class LoadData2View
{

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        View::share('category', Category::all());
        // Schema::defaultStringLength(191);
        return $next($request);
    }

}
