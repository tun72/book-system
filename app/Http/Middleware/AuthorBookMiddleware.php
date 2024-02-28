<?php

namespace App\Http\Middleware;

use App\Models\Setting;
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
        $setting = Setting::where("id", 1)->first();

        $books = auth()->user()->books;

        $countStatus = count(auth()->user()->books()->where("status", "complete")->get());


        $isComplete = count($books) / $setting["limit_rating"] - $countStatus / $setting["limit_rating"];

        // dd(count($books));
        if ($isComplete > 1) {
            return  redirect('/author/dashboard')->with(["error" => "Complete one of your " . $setting["limit_rating"] . " book to create another book."]);
        }
        return $next($request);
    }
}
