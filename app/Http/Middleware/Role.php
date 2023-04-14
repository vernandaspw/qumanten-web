<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role, $role2 = null, $role3 = null, $role4 = null, $role5 = null, $role6 = null)
    {
        if ($request->user()->role == $role  || $request->user()->role == $role2 || $request->user()->role == $role3  || $request->user()->role == $role4  || $request->user()->role == $role5 || $request->user()->role == $role6) {
            if ($request->user()->status == 'aktif') {
                return $next($request);
            } else {
                return redirect('/tidakaktif');
            }
        } else {
            return abort(403);
        }
    }
}