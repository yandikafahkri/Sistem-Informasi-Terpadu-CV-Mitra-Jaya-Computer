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
                              <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- Variabel php untuk nomor-->    
                      <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($data_inventaris as $inv)  
                      <tr>
                              <th>{{ $nomer++}}</th>
                              <td>{{ $inv->nama}} </td>
                              <td>{{ $inv->ip}} </td>
                              <td>
                                <a href="{{url('inventaris')}}/{{$inv->id}}/{{('clean')}}" class="btn btn-success btn-sm" style="color: white">
                                <i class="fas fa-hand-sparkles" style="color: white"></i> Bersihkan</a>

                                @if (auth()->user()->level=='administrator')
                                <a href="{{url('inventaris')}}/{{$inv->id}}/{{('printclean')}}" class="btn btn-danger btn-sm" style="color: white" target="_blank">
                                  <i class="fas fa-print" style="color: white"></i> Print</a>
                                @endif
  
                              </td>
                      </tr>
                      @endforeach  
                  </tbody>

                </table>
              </div>

            </div>
            <!-- /.card -->
          </div>

{{-- Tanggal Maintenance --}}
          {{-- <div class="col-4">
            <div class="card">

              <div class="card-header">
                <div class="col-md-6">
                    <h1 class="card-title">Tanggal</h1>
                </div>
               
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                            <th scope="col">Tanggal Maintenance</th>
                      </tr>
                  </thead>
                  <tbody>
                      <!-- ambil data di database-->
                      @foreach($clean_inventaris as $item)  
                      <tr>
                            <td>{{ $item->waktu}} </td>
                      </tr>
                      @endforeach  
                    </tbody>

                </table>
              </div>             
            </div>
          </div>   --}}

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



<!-- ---------------------------------------------------------------------------------------------------- -->

 
   











@endsection