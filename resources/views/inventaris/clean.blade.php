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
	<div class="content-header">
        <div class="container-fluid">
        <div class="alert alert-light fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <ol class="breadcrumb float-sm">
                <li class="breadcrumb-item"><a href="{{url ('/')}}"  style="color: blue"> Home</a></li>
                <li class="breadcrumb-item active">Bersihkan CCTV {{$inventaris->nama}}</li>
                </ol>

        </div>
</div>
    </div>



<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="callout callout-info">
					<h5>Bersihkan CCTV </h5>
					<h4><b><i>{{ $inventaris->nama}}</b></i></h4>
				</div>

<!-- Notifikasi success / error -->
@if(session('sukses'))
<div class="container">
	<div class="row justify-content-center" >
		<div class="col-md-12">
			<div class="alert alert-success" role="alert">
				{{session('sukses')}}
			</div>
			@endif

			@if(session('error'))
			<div class="alert alert-danger" role="alert">
				{{session('error')}}
			</div>
		</div>
	</div>
</div>	
@endif
<!-- End Notifikasi success / error -->




				<!-- Main content -->

				<div class="invoice p-3 mb-3">
					<!-- info row -->
					<div class="container">
					<div class="row justify-content-center" >
							<div class="col-md-12">
								<table class="table table-bordered">
									<tr>
										<td style="width: 200px">
											Nama CCTV
										</td>
										<td>
											{{ $inventaris->nama}}
										</td>
									</tr>
									<tr>
										<td>
											IP Addres 
										</td>
										<td>
											{{ $inventaris->ip}} 
										</td>
									</tr>
								</table>
							</div>
						<!-- /.col -->
					</div>
					</div>
					<!-- /.row -->
                              
 

					<div class="container">
						<div class="row justify-content-center" >
						<div class="col-md-12">
						@foreach($inventaris->clean as $clean)

						<table class="table table-bordered">

							<thead>
								<tr>
									<th>No</th>
									<th>Foto Before</th>
									<th>Foto After</th>
									<th>Foto Aksi</th>
									<th>Foto Aksi</th>
								</tr>
							</thead>
								<!-- Variabel php untuk nomor-->    
								<?php
								$nomer = 1;
								?>
								<!-- ambil data di database-->
								<tr>

									<td>{{ $nomer++}}</td>
									{{$clean->CCTV}}  </td>
									<td> <img src="{{asset('images/'.$clean->pivot->ss_sebelum)}}" width="100%"> </td>
									<td> <img src="{{asset('images/'.$clean->pivot->ss_setelah)}}" width="100%"> </td>
									<td> <img src="{{asset('images/'.$clean->pivot->sebelum)}}" width="100%"> </td>
									<td> <img src="{{asset('images/'.$clean->pivot->setelah)}}" width="100%"> </td>
								</tr>
								<tr>
									<td colspan="2">Tanggal Maintenance</td>
									<td colspan="3">{{$clean->pivot->waktu}}</td>
								</tr>
							</table>
							@endforeach

							</div>
							</div>
							</div>


<div class="container">
	<div class="row justify-content-center" >
		<div class="col-md-12">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalMaint">
				<i class="fa fa-plus"></i> Masukan Data Maintenance
			</button>

			@foreach($inventaris->clean as $clean)
			<a href="{{url('inventaris')}}/{{$inventaris->id}}/{{$clean->id}}/{{'deleteclean'}}"
				class="btn btn-danger btn-md" onclick="return confirm('Data akan di hapus ?')">
				<i class="fa fa-trash"></i> Hapus Data</a>
			@endforeach


			<a href="{{url('inventaris')}}/{{'maint'}}" class="btn btn-info btn-md">
				<i class="fas fa-undo"> </i> Kembali
			</a>
			<a href="{{ url('inventaris') }}/{{$inventaris->id}}/{{('printclean')}}" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>
		</div>
	</div>
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
<div class="modal fade" id="ModalMaint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Maintenance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     <div class="modal-body">

		<form action="{{url('inventaris')}}/{{$inventaris->id}}/addrawat"  method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}

<!-- barang -->
			<div class="form-group">
			  <label for="clean">Data CCTV</label>
			  <select class="form-control" id="clean" name="clean">
				@foreach($pembersihan as $bersih)
					<option value="{{$bersih->id}}">{{$bersih->CCTV}}</option>
				@endforeach
			  </select>
			</div>

<!-- SS Sebelum -->
			<div class="form-group">
				<label for="exampleInputEmail1">Foto Before </label>
				<input name="ss_sebelum" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Before" value="{{old('ss_sebelum')}}">
			</div>

<!-- SS Setelah -->
			<div class="form-group">
				<label for="exampleInputEmail1">Foto After </label>
				<input name="ss_setelah" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto After" value="{{old('ss_setelah')}}">
			</div>

<!-- Sebelum -->
			<div class="form-group">
				<label for="exampleInputEmail1"> Foto Aksi 1 </label>
				<input name="sebelum" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Aksi 1" value="{{old('sebelum')}}">
			</div>

<!-- Setelah -->
			<div class="form-group">
				<label for="exampleInputEmail1"> Foto Aksi 2 </label>
				<input name="setelah" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto Aksi 2" value="{{old('setelah')}}">
			</div>

<!-- Waktu -->
			<div class="form-group{{$errors->has('waktu') ? 'has-error' : ''}}">
				<label for="exampleInputEmail1"> Waktu </label>
				<input name="waktu" type="date"  value="<?=date('dd/mm/yy')?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu" >
				@if($errors->has('waktu'))
					<span class="help-block"> {{$errors->first('waktu')}} </span>
				@endif
			</div>

      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">
			<i class="fas fa-save"></i> Simpan Data
		</button>
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
