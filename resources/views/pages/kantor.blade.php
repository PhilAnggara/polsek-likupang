@extends('layouts.app')
@section('title', 'Kantor - Polsek Likupang')

@section('content')
  
@endsection

@push('addon-script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
@endpush