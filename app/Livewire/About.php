<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $title = "Tentang";
    public $description = "Mitra Terpercaya untuk Kebutuhan Energi Anda!";
    public $keywords = "keyword";
    public $url = "url";
    public $image = "image";
    public function render()
    {
        return view('livewire.about');
    }
}
