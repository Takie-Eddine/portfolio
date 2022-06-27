<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->items = $items;
        //$this->tabs = $tabs;
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'AlpineJs'],
                'title' => 'Full Stack app with Laravel, Tailwindcss and Alpine Js',
                'image' => url('/img/avatar.jpeg'),
                'github' => 'https://github.com/Takie-Eddine/portfolio'
            ],
            [
                'category' => ['Laravel', 'Html', 'Css' ,'JavaSctpt'],
                'title' => 'Full Stack app with Laravel, Html , Css and JavaSctpt',
                'image' => url('/img/avatar.jpeg'),
                'github' => 'https://github.com/Takie-Eddine/sahle-ecommerce'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'Full Stack app with Laravel and Bootstrap',
                'image' => url('/img/avatar.jpeg'),
                'github' => 'https://github.com/Takie-Eddine/Boutique-shopping'
            ],
            [
                'category' => ['PHP', 'Html', 'Css' ,'JavaSctpt'],
                'title' => 'Full Stack app with PHP, Html , Css and JavaSctpt',
                'image' => url('/img/avatar.jpeg'),
                'github' => 'https://github.com/Takie-Eddine/'
            ],
            [
                'category' => ['JavaEE', 'Foundation'],
                'title' => 'Full Stack app with JavaEE and Foundation',
                'image' => url('/img/avatar.jpeg'),
                'github' => 'https://github.com/Takie-Eddine/AgenceLocationVoiture'
            ],

        ];
        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
