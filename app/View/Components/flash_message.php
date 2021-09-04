<?php

namespace App\View\Components;

use Illuminate\View\Component;

class flash_message extends Component
{
    public $message;
    public $error;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message,$error)
    {   
        $this->message=$message;
        $this->$error=$error;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flash_message');
    }
}
