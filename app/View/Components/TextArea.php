<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $name;
    public $value;
    public $class;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string|null  $value
     * @param  string|null  $class
     * @return void
     */
    public function __construct($name, $value = null, $class = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-area');
    }
}
