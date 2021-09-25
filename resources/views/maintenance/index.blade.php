@extends('layouts.master')

@section('content')




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="alert alert-light fade show">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <ol class="breadcrumb float-sm">
              <li class="breadcrumb-item"><a href="{{url ('/')}}"  style="color: blue"> Home</a></li>
              <li class="breadcrumb-item active">Data Maintenance</li>
              </ol>
      </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">

              <div class="card-header">
                <div class="left">

                </div>
                <div class="col-md-6">
                    <h1 class="card-title">Maintenance CCTV</h1>
                </div>
               
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                      <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama CCTV</th>
                            <th scope="col">IP Address</th>
                            <th scope="col">Tanggal Maintenance</th>
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
                              <td>{{ $inventaris->ip}} </td>
                              <td>{{ $inventaris->clean_inventaris->waktu}} </td>

                              <td>
                                  <a href="{{url('inventaris')}}/{{$inventaris->id}}/{{('clean')}}" class="btn btn-success btn-sm" style="color: white"">
                                  <i class="fas fa-hand-sparkles" style="color: white"></i> Bersihkan</a>
                                  
                                  {{-- <a href="{{url('inventaris')}}/{{$inventaris->id}}/{{('incident')}}" class="btn btn-danger">Incident</a> --}}
                              </td>
                              </tr>
                      @endforeach          
                    </tbody>

                </table>

<!-- this row will not appear when printing -->
{{-- <div class="row no-print">
  <div class="col-12">

    <a href="{{ url('inventaris') }}/{{$inventaris->id}}/{{('print')}}" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>

  </div>
</div> --}}


              </div>
              <!-- ____________________________ -->



            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



<!-- ---------------------------------------------------------------------------------------------------- -->

 
   











@endsection