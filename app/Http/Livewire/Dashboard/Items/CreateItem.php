<?php

namespace App\Http\Livewire\Dashboard\Items;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Item;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreateItem extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $item_id;
    public $ar_name;
    public $en_name;
    public $ar_desc;
    public $en_desc;
    public $picture;
    public $price;
    public $buy_link;
    public $user_id;

    public function mount()
    {
        $this->user_id = auth()->id();
    }
    public function updatedPicture()
    {
        $this->validate([
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img/', $this->picture->getClientOriginalName());
    }
    //l
    public function create()
    {
        $this->validate([
            'ar_name' => ['required', 'string', 'max:28800'],
            'en_name' => ['required', 'string', 'max:28800'],
            'ar_desc' => ['required', 'string', 'max:28800'],
            'en_desc' => ['required', 'string', 'max:28800'],
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
            'price' => ['required', 'integer'],
            'buy_link' => ['required', 'string'],
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        Item::Create([
            'ar_name' => $this->ar_name,
            'en_name' => $this->en_name,
            'ar_desc' => $this->ar_desc,
            'en_desc' => $this->en_desc,
            'picture' => $this->picture->getClientOriginalName(),
            'price' => $this->price,
            'buy_link' => $this->buy_link,
            'user_id' => $this->user_id,
        ]);
        $this->clear();
        return redirect()->route('Items', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'item_id',
            'ar_name',
            'en_name',
            'ar_desc',
            'en_desc',
            'picture',
            'price',
            'buy_link',
            'user_id',
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.items.create-item');
    }
}
