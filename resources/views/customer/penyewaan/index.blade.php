@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Penyewaan Gedung</h2>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('customer.penyewaan.store') }}" method="POST" class="mb-8">
        @csrf
        <div class="mb-4">
            <label for="gedung_id" class="block text-gray-700">Pilih Gedung</label>
            <select id="gedung_id" name="gedung_id" class="w-full p-2 border rounded mt-2" required>
                <option value="">-- Pilih Gedung --</option>
                @foreach($gedung as $g)
                    <option value="{{ $g->id }}">{{ $g->nama_gedung }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="detail_acara" class="block text-gray-700">Detail Acara</label>
            <input type="date" id="detail_acara" name="detail_acara" class="w-full p-2 border rounded mt-2" required>
        </div>

        <div class="mb-4">
            <label for="jam_mulai" class="block text-gray-700">Jam Mulai</label>
            <input type="date" id="jam_mulai" name="jam_mulai" class="w-full p-2 border rounded mt-2" required>
        </div>

        <div class="mb-4">
            <label for="jam_selesai" class="block text-gray-700">Detail Acara</label>
            <textarea id="jam_selesai" name="jam_selesai" class="w-full p-2 border rounded mt-2" required></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
            Buat Penyewaan
        </button>
    </form>

    <!-- Daftar Penyewaan -->
    <h3 class="text-xl font-bold mb-4">Riwayat Penyewaan</h3>
    @if($penyewaan->isEmpty())
        <p>Belum ada penyewaan.</p>
    @else
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Gedung</th>
                    <th class="p-2 border">Tanggal Mulai</th>
                    <th class="p-2 border">Tanggal Selesai</th>
                    <th class="p-2 border">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyewaan as $p)
                    <tr>
                        <td class="p-2 border">{{ $p->gedung->nama_gedung }}</td>
                        <td class="p-2 border">{{ $p->tanggal_mulai }}</td>
                        <td class="p-2 border">{{ $p->tanggal_selesai }}</td>
                        <td class="p-2 border">
                            {{ $p->confirmed_status ? 'Dikonfirmasi' : 'Belum Dikonfirmasi' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
