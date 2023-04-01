<?php

namespace App\View\Components\Forms;

use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class Select extends Component
{
    public Collection $items;

    public function __construct(
        public string $name,
        Collection $select,
        Collection $values,
        string $key,
        string $value,
        public bool $required = false,
        public bool $multiple = false,
    ) {
        $values = $values->keyBy($key);

        $this->name = $name;
        $this->items = $select->map(fn ($item) => [
            'key' => $item[$key],
            'selected' => !!$values->get($item[$key]),
            'text' => $item[$value],
        ]);
    }

    public function render(): View
    {
        return view('components.forms.select');
    }
}
