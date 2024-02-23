<?php

namespace App\View\Components;

use App\Models\Genres;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BrowseComponent extends Component
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
        return view('components.browse-component', ["genres" => Genres::all(), "authors" => User::where("role", 2)->get()]);
    }
}
