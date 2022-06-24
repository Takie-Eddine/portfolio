<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PublicationItem extends Component
{
    public string $paperId;
    public string $title;
    public string $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($paperId, $title, $description)
    {
        $this->paperId = $paperId;
        $this->title =  $title;
        $this->description = $description;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.publication-item');
    }
}
