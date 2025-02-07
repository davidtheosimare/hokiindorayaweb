<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $title = "Kontak";
    public $description = "Mitra Terpercaya untuk Kebutuhan Energi Anda!";
    public $keywords = "keyword";
    public $url = "url";
    public $image = "image";
    public function render()
    {
        return view('livewire.contact');
    }
}
