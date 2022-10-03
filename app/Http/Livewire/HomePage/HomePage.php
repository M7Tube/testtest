<?php

namespace App\Http\Livewire\HomePage;

use App\Models\AppSettings;
use App\Models\Item;
use App\Models\Post;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Statistics;
use Carbon\Carbon;
use Livewire\Component;

class HomePage extends Component
{
    public $info;
    public $services;
    public $statistics;
    public $posts;
    public $items;
    public $skills;
    public $date;
    protected $listeners = [
        'getData'
    ];
    public function mount()
    {
        $this->info = AppSettings::first();
        $this->services = Services::all()->take(6);
        $this->statistics = Statistics::first();
        $this->posts = Post::all()->take(6);
        $this->items = Item::all()->take(6);
        $this->skills = Skills::all();
    }

    public function getData($value)
    {
        dd($value);
        if (!is_null($value)) {
            $this->date = $value;
        }
    }

    public function render()
    {
        return view('livewire.home-page.home-page');
    }
}
