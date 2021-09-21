<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SISTEM INFORMASI TERPADU MJC</title>
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
						<div class="col-md-12">
							<img src="{{asset('images/kop_mjc.jpg')}}" width="100%">
							{{-- <img src="{{asset('images/MJC.png')}}" class="float-left" width="20%">
							<img src="{{asset('images/pelindo3.png')}}" class="float-right" width="20%"> --}}

						</div>
						<div class="col-md-12">
							@foreach($inventaris->clean as $clean)
							{{-- {{$clean->CCTV}}  --}}
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
								<tr>
									<td>Tanggal Maintenance</td>
									<td>{{$clean->pivot->waktu}}</td>
								</tr>
							</table>
						</div>				
				
						<!-- /.col -->
					</div>

					<div class="row justify-content-center" >
						<div class="col-md-12">
						<table class="table table-bordered">
								<tr class="text-center">
									<td>Foto Before</td>
									<td>Foto After</td>
								</tr>
								<tr class="text-center">
									<td> <img src="{{asset('images/'.$clean->pivot->ss_sebelum)}}" width="55%"> </td>
									<td> <img src="{{asset('images/'.$clean->pivot->ss_setelah)}}" width="55%"> </td>
								</tr>
								<tr class="text-center">
									<td>Foto Aksi 1</td>
									<td>Foto Aksi 2</td>
								</tr>
								<tr class="text-center">
									<td> <img src="{{asset('images/'.$clean->pivot->sebelum)}}" width="55%"> </td>
									<td> <img src="{{asset('images/'.$clean->pivot->setelah)}}" width="55%"> </td>
								</tr>
						</table>
						@endforeach

						</div>
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
