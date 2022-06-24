<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Publications extends Component
{
    public $publication = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($publication)
    {
        $this->publication = [
            [

                'title' => 'Architectural design of a Cyber-Physical system for Industry 4.0',
                'description' => 'This is 5 hours PHP Course and in this course you will learn all the basics you need in PHP. This is good starting point if you want to learn PHP.'
            ],
            [

                'title' => 'A Modelling Framework for CPS-based Industry 4.0: Application to Manufacturing Systems',
                'description' => 'You will build a Full stack application, which includes Laravel REST API with authentication, Tailwind.css and Vue 3 with Vuex for UI'
            ],
            [

                'title' => 'Towards a Service-Driven Model for Industry-4.0',
                'description' => 'Video playlist which will show you how to build an MVC framework from scratch. This will help you understand how modern PHP frameworks work.'
            ],
        ];
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.publications');
    }
}
