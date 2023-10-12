<!-- resources/views/barang/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Pemain</h2>
        @include('pemain.table')
    </div>
@endsection
