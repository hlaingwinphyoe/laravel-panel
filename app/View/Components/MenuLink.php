<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuLink extends Component
{
    public $link;
    public $title;
    public $class;

    /**
     * Create a new component instance.
     */
    public function __construct($link='#',$title="sample",$class="home")
    {

        $this->link = $link;
        $this->title = $title;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-link');
    }
}
