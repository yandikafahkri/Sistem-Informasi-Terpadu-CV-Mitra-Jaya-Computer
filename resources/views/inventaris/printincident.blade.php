<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MJC</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 4 -->

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<!-- Main content -->
		<section class="invoice">

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
									<b> Password = </b>  ***
								</address>
							</div>
					</div>
					</div>
					<!-- /.row -->

			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">

					<thead>
						<tr>
							<th>NO</th>
						<!-- 	<th>Barang</th>		-->
							<th>Screenshot Foto Before</th>
							<th>Screenshot Foto After</th>
							<th>Foto Before</th>
							<th>Foto After</th>
							<th>Waktu</th>
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
						<!-- 	<td> {{$incident->CCTV}}  </td>		-->
							<td> <img src="{{asset('images/'.$incident->pivot->ss_sebelum)}}" width="100%"> </td>
							<td> <img src="{{asset('images/'.$incident->pivot->ss_setelah)}}" width="100%"> </td>
							<td> <img src="{{asset('images/'.$incident->pivot->sebelum)}}" width="100%"> </td>
							<td> <img src="{{asset('images/'.$incident->pivot->setelah)}}" width="100%"> </td>
							<td>  {{$incident->pivot->waktu}}  </td>
						</tr>
						@endforeach
					</tbody>

				</table>
			</div>


			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- ./wrapper -->

	<script type="text/javascript"> 
		window.addEventListener("load", window.print());
	</script>
</body>
</html>
