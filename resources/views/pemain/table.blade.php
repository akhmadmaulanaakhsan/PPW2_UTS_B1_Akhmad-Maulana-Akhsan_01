<!-- resources/views/barang/table.blade.php -->

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($daftarpemain as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->nama_pemain }}</td>
                <td>{{ $item->nomor_punggung }}</td>
                <td>{{ $item->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>