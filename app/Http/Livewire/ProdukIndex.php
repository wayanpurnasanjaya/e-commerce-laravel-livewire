<?php

namespace App\Http\Livewire;

use App\produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukIndex extends Component
{
	use WithPagination;

	public $search;
	protected $updateQueryString = ['search'];
	public function updatingSearch()
	{
		$this->resetPage();
	}

    public function render()
    {
    	if($this->search){
    		$produks = Produk::where('nama','like','%'.$this->search.'%')->paginate(8);
    	}else{
    		$produks = Produk::paginate(8);
    	}
    	
        return view('livewire.produk-index',[
        	'produks'=> $produks,
            'title'=>'List Produk'
        ]);
    }
}
