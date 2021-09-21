@extends('layouts.master')

@section('content')









<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Edit Data proyek </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
					<li class="breadcrumb-item active"> Edit Data proyek </li>
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
						<h3 class="card-title"> Edit Data Proyek </h3>
					</div>

					<!-- form start -->
					<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('proyek') }}/{{$proyek->id}}/{{('update')}}" method="POST" enctype="multketeranganart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
    <!-- Nama -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="#">Nama Proyek</label>
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $proyek->nama}}" placeholder="Nama Proyek" required autocomplete="nama" autofocus>
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Waktu -->         
              <div class="form-group row">               
                <div class="col-md-12">
                  <label for="#">Waktu</label>
                  <input id="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ $proyek->waktu}}" placeholder="" required autocomplete="waktu" autofocus>
                  @error('waktu')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Keterangan -->    
              <div class="form-group row">                     
                <div class="col-md-12">
                  <label for="#">Keterangan</label>
                  <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $proyek->keterangan}}" placeholder="keterangan" required autocomplete="keterangan" autofocus>
                  @error('keterangan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Tombol -->
            <div class="form-group row">
    					<div class="col-md-12">
    						<br>
                <button type="submit" class="btn btn-primary">
                  Simpan
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>

     </form>  
            </div>
						<!-- /.card -->






					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->




















			@stop