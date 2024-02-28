<?php

namespace App\View\Components;

use App\Models\Genres;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserChoise extends Component
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
        
        $genres = explode(',', auth()->user()->reader?->genres);
        $genres = Genres::whereIn("id", $genres)->get();

        
        return view('components.user-choise', [
            "genres" => $genres
        ]);
    }
}
