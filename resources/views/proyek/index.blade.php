@extends('layouts.master')

@section('content')




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Proyek</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Proyek</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#proyek">
                      Tambah Data Proyek
                    </button>
                </div>
                <div class="col-md-6">
                    <h1 class="card-title">Data Proyek</h1>
                </div>
               
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-strketeranganed">

                  <thead>
                      <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Proyek</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                      </tr>
                  </thead>

                  <tbody>
                      <!-- Variabel php untuk nomor-->    <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($data_proyek as $proyek)
                          <tr>
                              <th>{{ $nomer++}}</th>
                              <td>{{ $proyek->nama}} </td>
                              <td>{{ $proyek->waktu}} </td>
                              <td>{{ $proyek->keterangan}}</td>
                              <td>
                                  <a href="{{ url('proyek') }}/{{$proyek->id}}/{{('edit')}}" class="btn btn-warning">Edit</a>
                                  <a href="{{ url('proyek') }}/{{$proyek->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                              </td>
                              </tr>
                      @endforeach          
                  </tbody>

                </table>
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


<!-- ------------------------------------------------------------------------------ -->


   
<!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="proyek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data proyek</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('proyek/create') }}" method="POST" enctype="multketeranganart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
    <!-- Nama -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="#">Nama proyek</label>
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Proyek" required autocomplete="nama" autofocus>
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Waktu -->         
              <div class="form-group row">               
                <div class="col-md-12">
                  <label for="#">Waktu</label>
                  <input id="waktu" type="date" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}" placeholder="" required autocomplete="waktu" autofocus>
                  @error('waktu')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Keterangan -->    
              <div class="form-group row">                    
                <div class="col-md-12">
                  <label for="#">Keterangan</label>
                  <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" placeholder="keterangan" required autocomplete="keterangan" autofocus>
                  @error('keterangan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!-- __________________________________________________________________________________ -->
    <!-- Tombol -->
            <div class="form-group row">
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