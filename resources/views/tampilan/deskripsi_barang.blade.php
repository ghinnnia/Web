@extends('layouts.app')

@section('content')
    <h1>Deskripsi Barang</h1>
    <p>Nama Barang: {{ $barang->nama }}</p>
    <p>Jenis: {{ $barang->jenis }}</p>
    <p>Merk: {{ $barang->merk }}</p>
    <!-- ... (Tambahkan informasi lainnya tentang barang) -->
@endsection