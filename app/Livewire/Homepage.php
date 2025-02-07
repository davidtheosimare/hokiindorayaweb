<?php

namespace App\Livewire;

use Livewire\Component;

class Homepage extends Component
{

    public $title = "Homepage";
    public $description = "Mitra Terpercaya untuk Kebutuhan Energi Anda!";
    public $keywords = "keyword";
    public $url = "url";
    public $image = "image";


    public function render()
    {
        return view('livewire.homepage');
    }
}
