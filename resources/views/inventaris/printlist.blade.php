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
							<img src="{{asset('images/kop_mjc_list.jpg')}}" width="100%">
							{{-- <img src="{{asset('images/MJC.png')}}" class="float-left" width="20%">
							<img src="{{asset('images/pelindo3.png')}}" class="float-right" width="20%"> --}}

						</div>
                        <hr>
						<div class="col-md-12">

                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                          <th scope="col">No</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">IP</th>
                                          <th scope="col">Merk</th>
                                          <th scope="col">Serial Number</th>
                                          <th scope="col">Model</th>
                                          <th scope="col">Type</th>              
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
                                            <td> {{ $inventaris->nama}} </td>
                                            <td>{{ $inventaris->ip}}</td>
                                            <td>{{ $inventaris->merk}}</td>
                                            <td>{{ $inventaris->serialnumber}}</td>
                                            <td>{{ $inventaris->model}}</td>
                                            <td>{{ $inventaris->type}}</td>
                           
                                        </tr>
                                    @endforeach          
                                </tbody>
              
                              </table>

						</div>				
				
						<!-- /.col -->
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
