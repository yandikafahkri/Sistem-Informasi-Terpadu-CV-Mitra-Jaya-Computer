@extends('layouts.master')

@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12 text-center">
				<h5 class="text-dark">				
					<b>SISTEM INFORMASI TERPADU CV. MITRA JAYA COMPUTER</b>        
				</h5>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-4 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3>{{totalInventaris()}}</h3>

						<p>Jumlah Camera CCTV</p>
					</div>
					<div class="icon">
						<i class="fas fa-list-alt"></i>
					</div>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-4 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3>{{totalClean()}}</h3>

						<p>Camera Sudah Maintenance</p>
					</div>
					<div class="icon">
						<i class="fa fa-calendar-check"></i>
					  </div>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-4 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">

						<?php
						$min=totalInventaris()-totalClean();
						?>

						<h3><?=$min?></h3>

						<p>Camera Belum Maintenance</p>
					</div>
					<div class="icon">
						<i class="fa fa-calendar-minus"></i>
					  </div>
				</div>
			</div>
			<!-- ./col -->

		</div>
		<!-- /.row -->

		  <!-- Main row -->
		  <div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">
			  <!-- Custom tabs -->
			  <div class="card" style="height: 320px">
				<div class="card-header">
				  <h3 class="card-title">
					Progress Pekerjaan
				  </h3>
				</div><!-- /.card-header -->
		
						<table class="table text-center">
						  <thead>
							<tr>
							  <th>Jumlah Camera</th>
							  <th>Presentase Maintenance</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  	<td>
								  	<h3><span class="badge bg-info">{{totalInventaris()}} Camera CCTV</span></h3>
									<a type="" href="{{ url('/inventaris') }}" class="nav-link">
										<i class="fas fa-arrow-circle-right"> </i> Lihat Data
									</a>
								</td>
							  	<td>
									<?php
									$pres=totalClean()/totalInventaris();
									$pres100=$pres*100;
									?>
									<h3><span class="badge bg-warning"><?=$pres100?> % </span></h3>

									<a type="" href="{{ url('inventaris') }}/{{('maint')}}" class="nav-link">
										<i class="fas fa-arrow-circle-right"> </i> Lihat Data
									</a>
								</td>
							</tr>

						  </tbody>
						</table>

						{{-- <table id="example1" class="table table-hover dataTable dtr-inline">
		
						  <thead>
							  <tr>
									<th scope="col">#</th>
									<th scope="col">Nama CCTV</th>
									<th scope="col">Action</th>
							  </tr>
						  </thead>
		
						  <tbody>
							  <!-- Variabel php untuk nomor-->    <?php
							  $nomer = 1;
							  ?>
							  <!-- ambil data di database-->
							  @foreach($data_inventaris as $inventaris)
								  <tr>
									  <th>{{ $nomer++}}</th>
									  <td>{{ $inventaris->nama}} </td>
		
										<td>
										  <a href="{{url('inventaris')}}/{{$inventaris->id}}/{{('clean')}}" class="btn btn-success btn-sm" style="color: white"">
										  <i class="fas fa-hand-sparkles" style="color: white"></i> Bersihkan</a>
										</td>
									  </tr>
							  @endforeach          
						  </tbody>
		
						</table> --}}
						<div class="card-footer text-muted text-center"><i> 
							- Data presentase diupdate otomatis oleh sistem - 
						</i></div>
	
			  </div>
			  <!-- /.card -->
			</section>
		
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5">
		
			 	 <div class="card card-widget widget-user">
						<!-- Add the bg color to the header using any of the bg-* classes -->
						<div class="widget-user-header text-white" style="background: url('adminlte/dist/img/panov.jpg') center bottom;">
						  <h2 class="widget-user-username text-center">Mitra Jaya Computer</h2>
						  <h6 class="widget-user-desc text-center">Commanditaire Vennotschaap </h6>
						</div>
						<div class="widget-user-image">
							<img class="img-circle"
							src="{{asset('adminlte/dist/img/mjc.png')}}"
							alt="User profile picture">
						</div>
						<div class="card-footer">
						  <div class="row">
							<div class="col-sm-4 border-right">
							  <div class="description-block">
								<h5 class="description-header">Instalasi</h5>
								<span class="description-text">Jaringan</span>
							  </div>
							  <!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4 border-right">
							  <div class="description-block">
								<h5 class="description-header">Instalasi</h5>
								<span class="description-text">CCTV</span>
							  </div>
							  <!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4">
							  <div class="description-block">
								<h5 class="description-header">Pengadaan</h5>
								<span class="description-text">Barang</span>
							  </div>
							  <!-- /.description-block -->
							</div>
							<!-- /.col -->
						  </div>
						  <!-- /.row -->
						  <hr>
						  <div class="row">
							<div class="col-sm-12">
								<div class="text-center">
									<a href="{{ url('/profile') }}" class="">
										<i class="fas fa-building"></i>
										  Lihat Profile Perusahaan
									  </a>
								</div>
							</div>
						  </div>
						</div>
					  </div>
				
			</section>
			<!-- right col -->
		  </div>

	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection