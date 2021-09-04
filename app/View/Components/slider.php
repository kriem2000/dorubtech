<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class slider extends Component
{
    public $services;
    public $services_length;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = Service::all()->splice(0,12)->toArray();
        $this->services_length= sizeof($this->services);
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
