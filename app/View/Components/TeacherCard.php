<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeacherCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $position;
    public $url;

    public function __construct( $name, $position, $url )
    {
        $this->name = $name;
        $this->position = $position;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.teacher-card');
    }
}
