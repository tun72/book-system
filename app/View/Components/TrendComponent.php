<?php

namespace App\View\Components;

use App\Models\Book;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrendComponent extends Component
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
        return view('components.trend-component', [
            "books" => Book::with(["user"])->orderBy("rating", "DESC")->latest()->limit(10)->get()
        ]);
    }
}
