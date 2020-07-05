@extends('layouts.master')
@section('content')
<div class="row m-2">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<div class="card">
		  <img class="card-img-top" src="{{asset('images/ERD_Quiz_week_3.png')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">ERD Quiz 3</h5>
		    <p class="card-text">Erd diatas merepresentasikan entitas/data yang berinteraksi dalam sistem ini, data tersebut adalah User dan Artikel. Sistem ini adalah sebuah tempat dimana orang dapat berbagi tulisan atau artikel. Setiap user dapat membuat banyak artikel.</p>
		    <a href="{{url('artikel')}}" class="btn btn-primary float-right">Lihat Semua Artikel</a>
		  </div>
		</div>
	</div>
	<div class="col-lg-1"></div>
</div>
@endsection