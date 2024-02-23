<?php

namespace App\View\Components;

use App\Models\Book;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopRatedComponent extends Component
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
        return view('components.top-rated-component', [
            "books" =>  Book::with(["user"])->where("isPublished", 1)->orderBy("rating", "DESC")->limit(5)->get()
        ]);
    }
}
