<?php

namespace App\View\Components\Frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Consultance extends Component
{
    /**
     * Create a new component instance.
     */
    public $limits;
    public $chunking;
    public function __construct($limits, $chunking)
    {
        //
        $this->limits = $limits;
        $this->chunking = $chunking;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $consultancies = \App\Models\Consultance::orderByDesc('id')->limit($this->limits)->get();

        return view('components.frontend.consultance', compact('consultancies'));
    }
}
