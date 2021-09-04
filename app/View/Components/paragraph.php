<?php

namespace App\View\Components;

use Illuminate\View\Component;

class paragraph extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $boldtitle;
     public $normaltitle;
     public $body;

    public function __construct($boldtitle="empty",$normaltitle="empty",$body="empty")
    {
        $this->boldtitle = $boldtitle;
        $this->normaltitle = $normaltitle;
        $this->body=$body;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.paragraph');
    }
}
