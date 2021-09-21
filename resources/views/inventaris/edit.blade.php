@extends('layouts.master')

@section('content')









<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Edit Data </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
					<li class="breadcrumb-item active"> Edit Data </li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">

			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">

					<div class="card-header">
						<h3 class="card-title"> Edit Data </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('inventaris') }}/{{$inventaris->id}}/{{('update')}}" method="POST" enctype="multipart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<!-- Nama -->                        
							<div class="col-md-12">
								<label for="#">Nama</label>
								<input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $inventaris->nama}}" placeholder="" required autocomplete="nama" autofocus>
								@error('nama')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<!-- IP -->                        
							<div class="col-md-12">
								<label for="#">IP</label>
								<input id="ip" type="text" class="form-control @error('ip') is-invalid @enderror" name="ip" value="{{ $inventaris->ip}}" placeholder="" required autocomplete="ip" autofocus>
								@error('ip')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<!-- Merk -->                        
							<div class="col-md-12">
								<label for="#">Merk</label>
								<input id="merk" type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ $inventaris->merk}}" placeholder="" required autocomplete="merk" autofocus>
								@error('merk')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
								</div>
							<!-- Serial Number -->                        
							<div class="col-md-12">
								<label for="#">Serial Number</label>
								<input id="serialnumber" type="text" class="form-control @error('serialnumber') is-invalid @enderror" name="serialnumber" value="{{ $inventaris->serialnumber}}" placeholder="" required autocomplete="serialnumber" autofocus>
								@error('serialnumber')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<!-- Model -->  
							<div class="col-md-12">
								<label for="#">Model</label>
								<input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ $inventaris->model}}" placeholder="" required autocomplete="model" autofocus>
								@error('model')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<!-- Type -->                        
							<div class="col-md-12">
								<label for="#">Type</label>
								<input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $inventaris->type}}" placeholder="" required autocomplete="type" autofocus>
								@error('type')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-6">
								<br><br>
								<button type="submit" class="btn btn-primary">
									Update
								</button>
							</div>
							<!-- __________________________________________________________________________________ -->
						</div>
							<!-- Tombol -->

					</form>

						</div>
						<!-- /.card -->






					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->




















			@stop