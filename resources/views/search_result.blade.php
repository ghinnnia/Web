<h1>Hasil Pencarian</h1>

<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" placeholder="Cari barang...">
    <button type="submit">Cari</button>
</form>

<ul>
    @foreach ($barangs as $barang)
        <li>{{ $barang->nama }} - {{ $barang->jenis }} - {{ $barang->aksesoris ?? 'Tidak ada aksesoris' }}</li>
    @endforeach
</ul>