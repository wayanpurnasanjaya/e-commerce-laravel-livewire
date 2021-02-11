<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukLiga extends Component
{
	use WithPagination;

	public $search,$liga;
	protected $updateQueryString = ['search'];
	public function updatingSearch()
	{
		$this->resetPage();
	}

	public function mount($ligaId)
	{
		$ligaDetail = Liga::find($ligaId);
		if($ligaDetail){
			$this->liga=$ligaDetail;
		}
	}

    public function render()
    {
    	if($this->search) {
            $produks = Produk::where('liga_id', $this->liga->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $produks = Produk::where('liga_id', $this->liga->id)->paginate(8);
        }
    	
        return view('livewire.produk-index',[
        	'produks'=> $produks,
        	'title' => 'Jersey '.$this->liga->nama
    ]);
}
}
