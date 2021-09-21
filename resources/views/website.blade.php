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
                <a href="{{ url('/') }}" class="nav-link">
                  <i class="brand-text">
                    <img src="{{asset('style/images/MJCpng.png')}}" alt="Logo" class="brand-image"
                    style="width: 150px;">
                  </i>
                </a>
                SISTEM INFORMASI TERPADU <br>
                CV. MITRA JAYA COMPUTER
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
            SISTEM INFORMASI TERPADU (SITERPA) CV. MITRA JAYA COMPUTER
          </div><!-- /.card-header -->

          <div class="card-body">
            <div class="tab-content">
              <!-- __________________________________________________________________________________ -->
              <div class="active tab-pane" id="profile">
                <!-- The timeline -->
                <div class="text-justify">
                        
                        <b>SITERPA</b> diciptakan untuk memudahkan segala bentuk pekerjaan yang ada di
                           CV. Mitra Jaya Computer ini, terutama di bidang pelaporan demi kelancaran administrasi perusahaan.
                           Segala bentuk kekurangan mohon dimaklumi karena masih dalam proses pengembangan, kritik dan saran yang 
                           membangun sangat diharapkan demi segera terciptanya sistem informasi yang kompleks dan efisien
                        <br>
                        <br>
                        <br>
                        <br>
                        <p class="float-right"> TTD, Creator</p>
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