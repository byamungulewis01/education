<?php

namespace App\View\Components\Student;

use App\Models\Country;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SignupModel extends Component
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
        $countries = Country::orderBy('name')->get();
        return view('components.student.signup-model', compact('countries'));
    }
}
