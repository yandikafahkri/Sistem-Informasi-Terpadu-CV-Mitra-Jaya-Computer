@extends('layouts.master')

@section('content')









<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1> Edit Data Karyawan </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
					<li class="breadcrumb-item active"> Edit Data Karyawan </li>
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
						<h3 class="card-title"> Edit Data Karyawan </h3>
					</div>

					<!-- form start -->
					<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('karyawan') }}/{{$karyawan->id}}/{{('update')}}" method="POST" enctype="multalamatart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
    <!-- Nama -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="#">Nama Karyawan</label>
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $karyawan->nama}}" placeholder="Nama Karyawan" required autocomplete="nama" autofocus>
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Tanggal Lahir -->         
              <div class="form-group row">               
                <div class="col-md-6">
                  <label for="#">Tanggal Lahir</label>
                  <input id="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ $karyawan->ttl}}" placeholder="" required autocomplete="ttl" autofocus>
                  @error('ttl')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Alamat -->                        
                <div class="col-md-6">
                  <label for="#">Alamat</label>
                  <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $karyawan->alamat}}" placeholder="Alamat" required autocomplete="alamat" autofocus>
                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Email --> 
              <div class="form-group row">                       
                <div class="col-md-6">
                  <label for="#">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $karyawan->email}}" placeholder="Email" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- No HP --> 
                <div class="col-md-6">
                  <label for="#">No HP</label>
                  <input id="nohp" type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $karyawan->nohp}}" placeholder="No HP" required autocomplete="nohp" autofocus>
                  @error('nohp')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Status Pendidikan -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="#">Status Pendidikan</label>
                  <input id="pendidikan" type="text" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ $karyawan->pendidikan}}" placeholder="pendidikan Karyawan" required autocomplete="pendidikan" autofocus>
                  @error('pendidikan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!-- __________________________________________________________________________________ -->
    <!-- Tombol -->
            <div class="form-group row">
    					<div class="col-md-6">
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