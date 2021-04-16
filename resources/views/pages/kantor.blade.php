@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
  
@endsection

@push('addon-script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
@endpush