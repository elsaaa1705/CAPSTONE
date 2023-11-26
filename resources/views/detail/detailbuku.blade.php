@extends('dashboard.dashboard')

@section('content')
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
                    <div class="tab-pane active" id="pic-1">
                        <img src="{{ asset('img/' . $buku[0]['img']) }}" />
                   </div>

					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$buku[0]['judul']}}</h3>
						<p class="product-description">{{$buku[0]['deskripsi_buku']}}</p>
						<h4 class="price">Nama Pemilik : <span>{{$buku[0][id_]}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button"> Pinjam Buku </button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection