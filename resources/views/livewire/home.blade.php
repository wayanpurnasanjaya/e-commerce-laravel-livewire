<div class="container">
   <div class="banner">
   		<img src="{{url('assets/slider/slider1.png')}}" alt="">
   </div>

   <section class="pilih-liga mt-4">
   	<h3><strong>Pilih Liga</strong></h3>
   	<div class="row mt-4">
   		@foreach($ligas as $liga)
   		<div class="col">
   			<a href="{{route('produks.liga',$liga->id)}}">
        <div class="card shadow">
          <div class="card-body text-center">
             <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                 </div>
        </div>  
        </a>
		</div>
		@endforeach
   	</div>
   	
   </section>


    <section class="produk mt-5 mb-5">
   	<h3>
      <strong>Best Produk</strong>
      <a href="{{route('produks')}}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua</a>
    </h3>
   	<div class="row mt-4">
   		@foreach($produks as $produk)
   		<div class="col-md-3">
   			<div class="card ">
  				<div class="card-body text-center">
    				 <img src="{{ url('assets/jersey') }}/{{ $produk->gambar }}" class="img-fluid">
    				 <div class="row mt-2">
    				 	<div class="col-md-12">
    				 		<h5><strong>{{$produk->nama}}</strong></h5>
    				 		<h5>Rp.{{number_format($produk->harga)}}</h5>
    				 	</div>
    				 </div>

    				  <div class="row mt-2">
    				 	<div class="col-md-12">
    				 		<a href="{{route('produks.detail',$produk->id)}}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
    				 	</div>
    				 </div>
                 </div>
  			</div>
		</div>
		@endforeach
   	</div>
   	
   </section>
</div>
