<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Produk;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home',[
        	'produks'=>Produk::take(4)->get(),
        	'ligas'=> Liga::all()
        ]);
    }
}
