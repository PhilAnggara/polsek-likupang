@extends('layouts.app')
@section('title', 'Senjata - Polsek Likupang')

@section('content')
<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Senjata</h1>
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
            <th scope="col">Nama Senjata</th>
            <th scope="col" style="width: 20px !important;">Jenis</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col" style="width: 140px !important;">No. Telp</th>
            <th scope="col" style="width: 100px !important;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($items as $item)
            <tr>
              <td>{{ $item->nama_senjata }}</td>
              <td>{{ $item->jenis }}</td>
              <td>{{ $item->penanggung_jawab }}</td>
              <td>{{ $item->no_telp }}</td>
              <td>
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModal-{{ $item->id }}">
                  <i class="far fa-edit"></i>
                  Edit
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal-{{ $item->id }}">
                  <i class="fas fa-trash"></i>
                  Hapus
                </button>
              </td>
            </tr>
          @empty
            <tr>
              <th colspan="10" class="text-center">
                Data Kosong
              </th>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal tambah data -->
  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('senjata.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama_senjata">Nama Senjata</label>
              <input type="text" class="form-control" name="nama_senjata" value="{{ old('nama_senjata') }}">
            </div>
            <div class="form-group">
              <label for="jenis">Jenis</label>
              <input type="text" class="form-control" name="jenis" value="{{ old('jenis') }}">
            </div>
            <div class="form-group">
              <label for="penanggung_jawab">Penanggung Jawab</label>
              <input type="text" class="form-control" name="penanggung_jawab" value="{{ old('penanggung_jawab') }}">
            </div>
            <div class="form-group">
              <label for="no_telp">No. Telp</label>
              <input type="number" class="form-control" name="no_telp" value="{{ old('no_telp') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Tambah
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir modal tambah data -->
  <!-- Modal edit data -->
  @foreach ($items as $edit)
  <div class="modal fade" id="editModal-{{ $edit->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('senjata.update', $edit->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="nama_senjata">Nama Senjata</label>
              <input type="text" class="form-control" name="nama_senjata" value="{{ $edit->nama_senjata }}">
            </div>
            <div class="form-group">
              <label for="jenis">Jenis</label>
              <input type="text" class="form-control" name="jenis" value="{{ $edit->jenis }}">
            </div>
            <div class="form-group">
              <label for="penanggung_jawab">Penanggung Jawab</label>
              <input type="text" class="form-control" name="penanggung_jawab" value="{{ $edit->penanggung_jawab }}">
            </div>
            <div class="form-group">
              <label for="no_telp">No. Telp</label>
              <input type="number" class="form-control" name="no_telp" value="{{ $edit->no_telp }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Simpan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- Akhir modal edit data -->
  <!-- Modal hapus data -->
  @foreach ($items as $hapus)
  <div class="modal fade" id="hapusModal-{{ $hapus->id }}" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hapusModalLabel">Hapus {{ $hapus->nama_senjata }}?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 text-center">
                <button class="btn btn-secondary btn-block" type="button" data-dismiss="modal">Batalkan</button>
              </div>
              <div class="col-6 text-center">
                <form action="{{ route('senjata.destroy', $hapus->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-block">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- Akhir modal hapus data -->

</div>
@endsection