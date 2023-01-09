<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\View\View;

class Text extends Component
{
    public string $name;

    public string $value;

    public bool $required;

    public function __construct(string $name, string $value = '', bool $required = false)
    {
        $this->name = $name;
        $this->value = $value;
        $this->required = $required;
    }

    public function render(): View
    {
        return view('components.forms.text');
    }
}
