<?php

namespace App\View\Components\Forms;

use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class Select extends Component
{
    public string $name;
    public Collection $items;

    public function __construct(string $name, Collection $select, Collection $values, string $key, string $value)
    {
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
