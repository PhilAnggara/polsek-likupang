@extends('layouts.app')
@section('title', 'Senjata - Polsek Likupang')

@section('content')
  
@endsection

@push('addon-script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
@endpush