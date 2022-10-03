<?php

namespace App\Http\Livewire\Dashboard\Items;

use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Item;
use Livewire\WithPagination as LivewireWithPagination;

class Items extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $item_id;
    public $en_name;
    public $ar_name;
    public $en_desc;
    public $ar_desc;
    public $picture;
    public $buy_link;
    public $price;
    public $user_id;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'item_id', 'en_name', 'ar_name',
            'en_desc',
            'ar_desc',
            'buy_link',
            'price',
            'picture', 'user_id'
        ]);
    }

    public function render()
    {
        return view(
            'livewire.dashboard.items.items',
            [
                'items' => Item::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate(5),
            ]
        );
    }
}
