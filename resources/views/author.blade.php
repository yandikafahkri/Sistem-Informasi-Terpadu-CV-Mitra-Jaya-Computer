@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="alert alert-light fade show">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <ol class="breadcrumb float-sm">
              <li class="breadcrumb-item"><a href="{{url ('/')}}"  style="color: blue"> Home</a></li>
              <li class="breadcrumb-item active">Website</li>
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
        <div class="card card-primary card-outline" style="height: 350px">
          <div class="card-body box-profile">
            <div class="nav-item has-treeview menu-open text-center">
                <a href="#" class="nav-link">
                  <i class="brand-text">
                    <img src="{{asset('style/images/aku.jpeg')}}" alt="Logo" class="mx-auto rounded-circle"
                    style="width: 200px;">
                  </i>      
                    <hr>
                <a class="btn btn-light border-info btn-social mx-1 text-info" href="https://twitter.com/yandikafi" target="_blank">
                <i class="fab fa-twitter"></i></a>
              
                <a class="btn btn-light border-info btn-social mx-1 text-primary" href="https://facebook.com/yandika.isma" target="_blank">
                <i class="fab fa-facebook"></i></a>

                <a class="btn btn-light border-info btn-social mx-1 text-danger" href="https://instagram.com/yandikafahkri" target="_blank">
                <i class="fab fa-instagram"></i></a>

                <a class="btn btn-light border-info btn-social mx-1 text-primary" href="https://www.linkedin.com/in/yandika-fahkri-ismananda-6b53391bb/" target="_blank">
                <i class="fab fa-linkedin"></i></a>
        

                </a>
              </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <!-- ______________________________________________________________________________________________________ -->
      <div class="col-md-9">
        <div class="card" style="height: 350px">
          <div class="card-header">
            Profile Administrator
          </div><!-- /.card-header -->

          <div class="card-body">
            <div class="tab-content">                                              
                                <div class="text-center"><h5><b>Yandika Fahkri Ismananda</b></h5></div>
                                <table class="table" width="100%" cellspacing="0">
                                        <tr>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td>:</td>
                                            <td>Semarang, 4 Januari 1997</td>
                                        </tr>
                                        <tr>
                                            <td>Hobby</td>
                                            <td>:</td>
                                            <td>Menikmati Alam, Komputer dan Elektronika</td>
                                        </tr>
                                        <tr>
                                            <td>Riwayat Pendidikan</td>
                                            <td>:</td>
                                            <td>SMK N 4 SEMARANG, 2015, MULTIMEDIA
                                            <p>UNIVERSITAS PGRI SEMARANG, TEKNIK INFORMATIKA
                                            </p></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="3"><i>"pahami dasar nya, lalu kembangkan."<i></i></i></td>                                          
                                        </tr>
                                </table>
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