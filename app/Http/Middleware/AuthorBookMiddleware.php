<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorBookMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $books = auth()->user()->books;

        $countStatus = count(auth()->user()->books()->where("status", "complete")->get());

       

        // dd(count($books));
        if (count($books) >= 3) {
            if (count($books) ===  $countStatus) {
                return $next($request);
            }
            if (count($books) - 2 !== $countStatus) {
                return  redirect('/author/dashboard')->with(["error" => "Complete one of your 3 book to create another book."]);
            }
            return $next($request);
        }
        return $next($request);
    }
}
