<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class slider extends Component
{
    public $serivces;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->serivces = Service::all()->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider');
    }
}
