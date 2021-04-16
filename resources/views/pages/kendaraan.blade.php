@extends('layouts.app')
@section('title', 'Kendaraan - Polsek Likupang')

@section('content')
<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kendaraan</h1>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal">
      <i class="fas fa-plus-circle"></i>
      Tambah Data
    </button>
  </div>

  <div class="card border-left-secondary shadow py-2">
    <div class="card-body">
      <table id="dataTable" class="table table-bordered table-responsive-sm text-center text-nowrap">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nama Kendaraan</th>
            <th scope="col" style="width: 120px !important;">No. Polisi</th>
            <th scope="col" style="width: 100px !important;">Warna</th>
            <th scope="col" style="width: 20px !important;">Jenis</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col" style="width: 140px !important;">No. Telp</th>
            <th scope="col" style="width: 100px !important;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Kawasaki KLX</td>
            <td>DB 1234 FH</td>
            <td>Hitam</td>
            <td>R2</td>
            <td>Bripka. Reza Mamuko</td>
            <td>081234567890</td>
            <td>
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal">
                <i class="far fa-edit"></i>
                Edit
              </button>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal">
                <i class="fas fa-trash"></i>
                Hapus
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal tambah data -->
  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir modal tambah data -->
  
  <!-- Modal edit data -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir modal edit data -->
  <!-- Modal hapus data -->
  <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hapusModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir modal hapus data -->

</div>
@endsection

@push('addon-script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable({
        ordering:  false,
        paging:  false
      });
    });
  </script>
@endpush