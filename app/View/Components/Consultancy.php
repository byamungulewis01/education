<?php

namespace App\View\Components;

use Closure;
use App\Models\Consultance;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Consultancy extends Component
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
        $consultances = Consultance::orderBy('title')->get();
        return view('components.consultancy', compact('consultances'));
    }
}
