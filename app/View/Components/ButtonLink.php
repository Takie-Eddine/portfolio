<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public string $href;
    public string $target;
    public string $variant;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href , $target='_self' , $variant='primary')
    {
        $this->href = $href;
        $this->target = $target;
        $this->variant = $variant;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link');
    }
}
