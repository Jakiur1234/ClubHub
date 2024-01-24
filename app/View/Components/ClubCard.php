<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClubCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public $url;
    public $name;
    public function __construct( $image, $url, $name )
    {
        $this->image = $image;
        $this->url = $url;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.club-card');
    }
}
