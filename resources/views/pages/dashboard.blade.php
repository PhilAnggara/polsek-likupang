@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
  <!-- Awal Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Jumlah Kendaraan R2 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-secondary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kendaraan R2</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $r2 }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Jumlah Kendaraan R4 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-secondary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kendaraan R4</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $r4 }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-car-side fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Jumlah Senjata -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-secondary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Senjata</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $senjata }}</div>
              </div>
              <div class="col-auto">
                <i class="far fa-dot-circle fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Jumlah Alat Kantor -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-bottom-secondary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Alat Kantor</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kantor }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-tv fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection