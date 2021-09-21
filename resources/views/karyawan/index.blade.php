@extends('layouts.master')

@section('content')




    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="alert alert-light fade show">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <ol class="breadcrumb float-sm">
              <li class="breadcrumb-item"><a href="{{url ('/')}}"  style="color: blue"> Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#karyawan">
                    <i class="fas fa-plus"></i>
                      Tambah Data Pegawai
                    </button>
                </div>
                <div class="col-md-6">
                    <h1 class="card-title">Data Pegawai</h1>
                </div>
               
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-stralamated">

                  <thead>
                      <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Status Pendidikan</th>
                            <th scope="col">Action</th>
                      </tr>
                  </thead>

                  <tbody>
                      <!-- Variabel php untuk nomor-->    <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($data_karyawan as $karyawan)
                          <tr>
                              <th>{{ $nomer++}}</th>
                              <td>{{ $karyawan->nama}} </td>
                              <td>{{ $karyawan->jabatan}} </td>
                              <td> {{ $karyawan->ttl}} </td>
                              <td>{{ $karyawan->alamat}}</td>
                              <td>{{ $karyawan->email}}</td>
                              <td>{{ $karyawan->nohp}}</td>
                              <td>{{ $karyawan->pendidikan}}</td>
                              <td>
                                  <a href="{{ url('karyawan') }}/{{$karyawan->id}}/{{('edit')}}" class="btn btn-primary btn-sm"><i class="fas fa-edit" style="color: white"></i></a>
                                  |
                                  <a href="{{ url('karyawan') }}/{{$karyawan->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')"><i class="fa fa-trash"></i></a>
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
  <div class="modal fade" id="karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('karyawan/create') }}" method="POST" enctype="multalamatart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
    <!-- Nama -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="#">Nama Karyawan</label>
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama Karyawan" required autocomplete="nama" autofocus>
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

<!-- __________________________________________________________________________________ -->
    <!-- Jabatan -->                        
    <div class="form-group row">
      <div class="col-md-12">
        <label for="#">Jabatan</label>
        <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" placeholder="Jabatan" required autocomplete="jabatan" autofocus>
        @error('jabatan')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>
<!-- __________________________________________________________________________________ -->
    <!-- Tanggal Lahir -->         
              <div class="form-group row">               
                <div class="col-md-6">
                  <label for="#">Tanggal Lahir</label>
                  <input id="ttl" type="date" class="form-control @error('ttl') is-invalid @enderror" name="ttl" value="{{ old('ttl') }}" placeholder="" required autocomplete="ttl" autofocus>
                  @error('ttl')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- Alamat -->                        
                <div class="col-md-6">
                  <label for="#">Alamat</label>
                  <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" required autocomplete="alamat" autofocus>
                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Email --> 
              <div class="form-group row">                       
                <div class="col-md-6">
                  <label for="#">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- No HP --> 
                <div class="col-md-6">
                  <label for="#">No HP</label>
                  <input id="nohp" type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" placeholder="No HP" required autocomplete="nohp" autofocus>
                  @error('nohp')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Status Pendidikan -->                        
              <div class="form-group row">
                <div class="col-md-12">
                  <select id="inputState" class="form-control" id="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}" required autocomplete="pendidikan" autofocus>
                    <option selected>-- Status Pendidikan --</option>
                    <option> Lulusan SMA </option>
                    <option> Lulusan SMK </option>
                    <option> Lulusan MA </option>
                    <option> Masa Kuliah </option>
                    <option> Sarjana </option>
                  </select>
                  @error('pendidikan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror                              
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- Tombol -->
            <div class="form-group row">
    					<div class="col-md-6">
    						<br>
                <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>
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