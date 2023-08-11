<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icons extends Component
{
    /**
     * Create a new component instance.
     */

    public $name;
    public $class;
    public function __construct($name = null, $size = null, $class = null)
    {
        $this->name = $name;
        $classname = implode("", [
            "w-",
            $size,
            " ",
            "h-",
            $size,
            " ",
            $class
        ]);
        $this->class = $size !== null ? $classname : "w-4 h-4";

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icons');
    }
}