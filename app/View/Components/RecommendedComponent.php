<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Book;

class RecommendedComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recommended-component', [
            "books" => Book::with(["user"])->orderBy("rating", "DESC")->limit(6)->get(),
            "title" => "Recommended"
        ]);
    }
}
