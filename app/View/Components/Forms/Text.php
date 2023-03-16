<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\View\View;

class Text extends Component
{
    public function __construct(
        public string $name,
        public string $value = '',
        public bool $required = false,
        public bool $multiline = false,
    ) {
    }

    public function render(): View
    {
        return view('components.forms.text');
    }
}
