<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavbarItem extends Component
{
    public string $href;

    /**
     * Create a new component instance.
     * @param string $href
     * @return void
     */
    public function __construct( $href )
    {
        $this->href = $href;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar-item');
    }
}
