<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class comment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $comment;
    public function __construct($comment)
    {
        $this->comment=$comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.comment');
    }
}
