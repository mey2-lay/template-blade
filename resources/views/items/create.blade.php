@extends('adminLte.master')

@section('content')
    <h2>ini halaman create</h2>
@endsection
<!-- harus ada tulisan endsection -->

@push('script')

<script>
  var wrappers = document.getElementsByClassName("wrappers");
  var items = ["ini", "contoh"];

  console.log(items)
</script>

@endpush