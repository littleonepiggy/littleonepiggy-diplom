<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /** 
     * Determine if the link's href correlates to the current url.
     */
    public function isActive(): bool
    {   
        return request()->getPathInfo() == $this->attributes['href'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.headerlink');
    }
}
