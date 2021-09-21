@extends('layouts.master')


@section('header')
<!-- Edit Nilai Cepat -->
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<!--  -->
@stop


@section('content')
<!-- Edit Nilai Cepat -->
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<!--  -->

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Incident</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
					<li class="breadcrumb-item active">Incident</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="callout callout-info">
					<h5><i class="fas fa-info"></i> Note:</h5>
					Data Incident CCTV
				</div>


				<!-- Main content -->
				<div class="invoice p-3 mb-3">
					<!-- title row -->
					<div class="row">
						<div class="col-12">
							<img src="{{asset('images/KOPMJC2.png')}}" width="100%">
						</div>
						<div class="col-12">
							<img src="{{asset('images/KOPMJC3.png')}}" width="100%">
						</div>
						
						<div class="col-12">
							<br>
							<h4>
								<i class="fas fa-globe"></i> Detail CCTV : {{ $inventaris->nama}}
								<small class="float-right">    </small>
							</h4>
						</div>
					
						<!-- /.col -->
					</div>

					<!-- info row -->
					<div class="container">
					<div class="row justify-content-center" >
							<div class="col-md-5">
								<address>
									<b> Lokasi / Kode = </b>  {{ $inventaris->lokasi}}  <br>
									<b> Nama = </b>  {{ $inventaris->nama}}  <br>
									<b> IP = </b>  {{ $inventaris->ip}}  <br>
									<b> Merk = </b>  {{ $inventaris->merk}}
								</address>
							</div>
						<!-- /.col -->
							<div class="col-md-4">
								<address>
									<b> Resolusi = </b>  {{ $inventaris->resolusi}}  <br>
									<b> Keterangan = </b>  {{ $inventaris->ket}}  <br>
									<b> MAC Address = </b>  {{ $inventaris->macaddres}}  <br>
									<b> Serial Number = </b>  {{ $inventaris->serialnumber}}
								</address>
							</div>
						<!-- /.col -->
							<div class="col-md-3">
								<address>
									<b> Model = </b>  {{ $inventaris->model}}  <br>
									<b> Type = </b>  {{ $inventaris->type}}  <br>
									<b> Password = </b>  {{ $inventaris->password}}
								</address>
							</div>
					</div>
					</div>
					<!-- /.row -->
                              
 

					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">

							<thead>
								<tr>
									<th>No</th>
								<!--	<th>Barang</th>		-->
									<th>Screenshot Foto Before</th>
									<th>Screenshot Foto After</th>
									<th>Foto Before</th>
									<th>Foto After</th>
									<th>Waktu</th>
									<th>Aksi</th>
								</tr>
							</thead>


							<tbody>
								<!-- Variabel php untuk nomor-->    <?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								@foreach($inventaris->incident as $incident)
								<tr>

									<th>{{ $nomer++}}</th>
								<!--	<td> {{$incident->CCTV}}  </td>		-->
									<td> <img src="{{asset('images/'.$incident->pivot->ss_sebelum)}}" width="100%"> </td>
									<td> <img src="{{asset('images/'.$incident->pivot->ss_setelah)}}" width="100%"> </td>
									<td> <img src="{{asset('images/'.$incident->pivot->sebelum)}}" width="100%"> </td>
									<td> <img src="{{asset('images/'.$incident->pivot->setelah)}}" width="100%"> </td>
									<td>  {{$incident->pivot->waktu}}  </td>
									<td>
										<a href="{{url('inventaris')}}/{{$inventaris->id}}/{{$incident->id}}/{{'deleteincident'}}"
										 class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
									</td>

								</tr>
								@endforeach

							</tbody>


							</table>
							</div>




<!-- Notifikasi success / error -->
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	  		{{session('sukses')}}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-danger" role="alert">
	  		{{session('error')}}
		</div>
		@endif
<!-- End Notifikasi success / error -->


<!-- this row will not appear when printing -->
<div class="row no-print">
	<div class="col-12">

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ambil">
			Tambah Data
		</button>

		<a href="{{ url('inventaris') }}/{{$inventaris->id}}/{{('printincident')}}" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>
		
	</div>
</div>
</div>
<!-- /.invoice -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- ______________________________________________________________________________________ -->


<!-- Tambah Data Pengambilan -->
<div class="modal fade" id="ambil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Incident</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('inventaris')}}/{{$inventaris->id}}/addganti"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

<!-- barang -->
			<div class="form-group">
			  <label for="incident">Data CCTV</label>
			  <select class="form-control" id="incident" name="incident">
				@foreach($perbaikan as $baik)
					<option value="{{$baik->id}}">{{$baik->CCTV}}</option>
				@endforeach
			  </select>
			</div>

<!-- SS Sebelum -->
			<div class="form-group">
				<label for="exampleInputEmail1"> Screenshot Foto Before </label>
				<input name="ss_sebelum" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Screenshot Foto Before" value="{{old('ss_sebelum')}}">
			</div>

<!-- SS Setelah -->
			<div class="form-group">
				<label for="exampleInputEmail1"> Screenshot Foto After </label>
				<input name="ss_setelah" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Screenshot Foto After" value="{{old('ss_setelah')}}">
			</div>

<!-- Sebelum -->
			<div class="form-group">
				<label for="exampleInputEmail1"> Foto Before </label>
				<input name="sebelum" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Before" value="{{old('sebelum')}}">
			</div>

<!-- Setelah -->
			<div class="form-group">
				<label for="exampleInputEmail1"> Foto After </label>
				<input name="setelah" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto After" value="{{old('setelah')}}">
			</div>

<!-- Waktu -->
			<div class="form-group{{$errors->has('waktu') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Waktu </label>
				<input name="waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu" value="{{old('waktu')}}">
				@if($errors->has('waktu'))
					<span class="help-block"> {{$errors->first('waktu')}} </span>
				@endif
			</div>

      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      	</form>
      	
    </div>
  </div>
</div>



<!-- _____________________________________________________________________________________________________ -->



@stop




<!-- _____________________________________________________________________________________________________ -->


@section('footer')






@stop
