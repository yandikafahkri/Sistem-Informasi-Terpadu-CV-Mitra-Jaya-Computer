@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="alert alert-light fade show">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <ol class="breadcrumb float-sm">
              <li class="breadcrumb-item"><a href="{{url ('/')}}"  style="color: blue"> Home</a></li>
              <li class="breadcrumb-item active">Profile Perusahaan</li>
              </ol>
      </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="mx-auto rounded-circle border-info" style="width: 200px;"
              src="{{asset('adminlte/dist/img/mjc.png')}}"
              alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">CV Mitra Jaya Computer</h3>


            <ul class="list-group list-group-unbordered mb-3 text-center">
              <li class="list-group-item">
                <b>Instalasi Jaringan</b> 
              </li>
              <li class="list-group-item">
                <b>Instalasi CCTV</b> 
              </li>
              <li class="list-group-item">
                <b>Pengadaan Barang</b> 
              </li>
            </ul>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <!-- ______________________________________________________________________________________________________ -->
      <div class="col-md-9">
        <div class="card" style="height: 440px">
          <div class="card-header">
            Profile Singkat Perusahaan
          </div><!-- /.card-header -->

          <div class="card-body">
            <div class="tab-content">
              <!-- __________________________________________________________________________________ -->
              <div class="active tab-pane" id="profile">
                <!-- The timeline -->
                <div class="text-justify">

                        <b>Mitra Jaya Computer</b> yang beralamatkan di Perum Taman Bringin D No. 03 Rt.009 Rw.008 Kel. Tambak Aji Kec. Ngaliyan. 
                        Semarang. Diresmikan pada tanggal  25 Januari 2012. CV Mitra Jaya Computer ini bekerja sama dengan PT. Pelindo III Regional Jawa Tengah yang berada di kawasan Pelabuhan Tanjung Emas di Kota Semarang. 
                        <br><br>
                        <b>Sasaran pasar Mitra Jaya Computer adalah : </b>
                        seluruh kalangan masyarakat yang membutuhkan perangkat keras komputer dan perangkat lunak, serta kawasan perkantoran guna untuk memenuhi kebutuhan dari sistem komputerisasi masing-masing, 
                        mengembangkan dan memperbaiki serta meningkatkan sistem komputernya. Tidak hanya itu MJC juga dapat mengerjakan instalasi CCTV dan instalasi jaringan lengkap dengan sistem maintenance nya.
                      </h3>
                </div>
                </div>
              </div>




            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->

        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->















@endsection