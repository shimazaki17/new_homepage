<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public string $color;

    public string $method;

    public function __construct(string $color = 'default', string $method = '')
    {
        $this->color = $color;
        $this->method = $method;
    }

    public function render(): View
    {
        return view('components.button');
    }
}
