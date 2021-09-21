@extends('layouts.master')

@section('content')




    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        <div class="alert alert-light fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <ol class="breadcrumb float-sm">
                <li class="breadcrumb-item"><a href="{{url ('/')}}"  style="color: blue"> Home</a></li>
                <li class="breadcrumb-item active">List Data CCTV</li>
                </ol>
        </div>
    </div>
    </div>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

<!-- Notifikasi ------------------------------------------------- -->
                    @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                          {{session('sukses')}}
                        </div>
                    @endif


            <div class="card">

              <div class="card-header">
                <div class="left">
                    <!-- Button trigger modal -->
                    @if (auth()->user()->level=='administrator')
                    <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#inventaris">
                      <i class="fas fa-plus"> </i> Tambah Data CCTV
                    </button>
                    @endif

                </div>
                <div class="col-md-12">
                    <h1 class="card-title">List Data CCTV</h1>
                </div>
               
              </div>

              <div class="card-body">
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

                            @if (auth()->user()->level=='administrator')
                            <th scope="col">Aksi</th>
                            @endif
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

                              @if (auth()->user()->level=='administrator')
                              <td>
                                  <a href="{{ url('inventaris') }}/{{$inventaris->id}}/{{('edit')}}" class="btn btn-primary btn-sm"><i class="fas fa-edit" style="color: white"></i></a>
                                  |
                                  <a href="{{ url('inventaris') }}/{{$inventaris->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Data akan di hapus?')"><i class="fa fa-trash"></i></a>
                              </td>
                              @endif

                              </tr>
                      @endforeach          
                  </tbody>

                </table>

                    {{-- <div class="right">
                      <a href="{{ url('inventaris/exportexcel') }}" class="btn btn-sm btn-primary"> Export Excel </a>  
                    </div> --}}

              </div>
              <!-- ____________________________ -->
              <div class="card-footer">
                <a href="{{ url('inventaris') }}/{{('printlist')}}" target="_blank" class="btn btn-danger">
                <i class="fas fa-print"></i> Print List</a>
              </div>
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

 
   
<!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="inventaris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data CCTV</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('inventaris/create') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
    <!-- Nama -->                        
            <div class="form-group row">               
                <div class="col-md-12">
                  <label for="#">Nama CCTV</label>
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="" required autocomplete="nama" autofocus>
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
    <!-- IP -->               
            <div class="form-group row">               
              <div class="col-md-6">
                  <input id="ip" type="text" class="form-control @error('ip') is-invalid @enderror" name="ip" value="{{ old('ip') }}" placeholder="IP Address" required autocomplete="ip" autofocus>
                  @error('ip')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Merk -->                        
                <div class="col-md-6">
                  <select id="inputState" class="form-control" id="merk" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ old('merk') }}" required autocomplete="merk" autofocus>
                    <option selected>-- Merk CCTV --</option>
                    <option> Sony </option>
                    <option> Samsung </option>
                    <option> Hikvision </option>
                    <option> Bosch </option>
                    <option> Pelco </option>
                    <option> Lainnya </option>
                  </select>
                  @error('merk')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
<!-- __________________________________________________________________________________ -->

    <!-- Serial Number -->       
            <div class="form-group row">                                
                <div class="col-md-12">
                  <label for="#">Serial Number</label>
                  <input id="serialnumber" type="text" class="form-control @error('serialnumber') is-invalid @enderror" name="serialnumber" value="{{ old('serialnumber') }}" placeholder="" required autocomplete="serialnumber" autofocus>
                  @error('serialnumber')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
    <!-- Model -->  
            <div class="form-group row">               
                <div class="col-md-6">
                  <label for="#">Model</label>
                  <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" placeholder="" required autocomplete="model" autofocus>
                  @error('model')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Type -->                        
                <div class="col-md-6">
                  <label for="#">Type CCTV</label>
                  <select id="inputState" class="form-control" id="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>
                    <option selected> Fix Dome </option>
                    <option> Fix Bullet </option>
                    <option> PTZ </option>
                    <option> Panorama </option>
                    <option> Fish Eye </option>
                  </select>
                  @error('type')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
    <!-- Tombol -->
    					<div class="col-md-12">
    						<br>
                      <button type="submit" class="btn btn-primary">
                        Simpan
                      </button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

                </form>  
              </div>

<!-- EndFormulir __________________________________________________________________________________________ -->
      </div>
   </div>
</div>
<!-- EndModal ------------------------------------------------- -->










@endsection