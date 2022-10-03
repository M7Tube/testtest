<?php

namespace App\Http\Livewire\Post;

use App\Models\AppSettings;
use App\Models\Post;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class AllPost extends Component
{
    use LivewireWithPagination;

    public $info;

    public function mount()
    {
        $this->info = AppSettings::first();
    }

    public function render()
    {
        return view('livewire.post.all-post', ['posts' => Post::paginate(2)]);
    }
}
