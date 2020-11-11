<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsProductOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      $id = $request->route('product');

      $product = $request->user()->products()->find($id);

      if(!$product) {
        return redirect()->back();
      }

      return $next($request);
    }
}
