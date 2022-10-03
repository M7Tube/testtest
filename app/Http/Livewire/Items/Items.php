<?php

namespace App\Http\Livewire\Items;

use App\Models\AppSettings;
use App\Models\Item;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class Items extends Component
{
    use LivewireWithPagination;
    public $info;

    public function mount()
    {
        $this->info = AppSettings::first();
        // $this->items = Item::simplePaginate();
    }
    public function render()
    {
        return view(
            'livewire.items.items',
            [
                'items' => Item::paginate(10),
            ]
        );
    }
}
