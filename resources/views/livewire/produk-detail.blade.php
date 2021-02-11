<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('produks') }}" class="text-dark">List Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produk Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-produk">
                <div class="card-body">
                    <img src="{{ url('assets/jersey') }}/{{ $produk->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{ $produk->nama }}</strong>
            </h2>
            <h4>
                Rp. {{ number_format($produk->harga) }}
                @if($produk->is_ready == 1)
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                @endif
            </h4>

            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang"> 
                    <table class="table" style="border-top : hidden">
                        <tr>
                            <td>Liga</td>
                            <td>:</td>
                            <td>
                                <img src="{{ url('assets/liga') }}/{{ $produk->liga->gambar }}" class="img-fluid"
                                    width="50">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $produk->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{ $produk->berat }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>
                                <input id="jumlah_pesanan" type="number"
                                    class="form-control @error('jumlah_pesanan') is-invalid @enderror"
                                    wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required
                                    autocomplete="name" autofocus>

                                @error('jumlah_pesanan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>
                        @if($jumlah_pesanan > 1)
                        @else
                        <tr>
                            <td colspan="3"><strong>Name Set (isi jika tambah nameset)</strong> </td>
                        </tr>
                        <tr>
                            <td>Harga Name Set</td>
                            <td>:</td>
                            <td>Rp. {{ number_format($produk->harga_nameset) }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <input id="nama" type="text"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    wire:model="nama" value="{{ old('nama') }}"
                                    autocomplete="name" autofocus>

                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td>
                                <input id="nomor" type="number"
                                    class="form-control @error('nomor') is-invalid @enderror"
                                    wire:model="nomor" value="{{ old('nomor') }}"
                                    autocomplete="name" autofocus>

                                @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-dark btn-block" @if($produk->is_ready !== 1) disabled @endif><i class="fas fa-shopping-cart"></i>  Masukkan Keranjang</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>