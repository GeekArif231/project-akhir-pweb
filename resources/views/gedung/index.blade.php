<h1>Daftar Gedung</h1>
<a href="{{ route('gedung.create') }}">Tambah Gedung</a>
<table>
    <tr>
        <th>Nama</th>
        <th>Kapasitas</th>
        <th>Aksi</th>
    </tr>
    @foreach($gedungs as $gedung)
    <tr>
        <td>{{ $gedung->nama_gedung }}</td>
        <td>{{ $gedung->kapasitas }}</td>
        <td>
            <a href="{{ route('gedung.edit', $gedung->id) }}">Edit</a>
            <form action="{{ route('gedung.destroy', $gedung->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
