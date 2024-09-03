<?php

namespace App\View\Components\Frontend;

use App\Models\Training;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Trainings extends Component
{
    /**
     * Create a new component instance.
     */
    public $limits;
    public function __construct($limits)
    {
        //
        $this->limits = $limits;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $trainings = Training::orderByDesc('id')->limit($this->limits)->get();
        return view('components.frontend.trainings', compact('trainings'));
    }
}
