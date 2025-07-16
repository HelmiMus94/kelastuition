<x-app-layout>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Urus Senarai Kelas</h1>
            <a href="{{ route('admin.kelas.create') }}" class="btn btn-primary">Tambah Kelas Baru</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Subjek</th>
                            <th>Nama Cikgu</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($senarai_kelas as $kelas)
                            <tr>
                                <td>{{ $kelas->id }}</td>
                                <td>{{ $kelas->nama_subjek }}</td>
                                <td>{{ $kelas->nama_cikgu }}</td>
                                <td>
                                    <a href="{{ route('admin.kelas.show', $kelas->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('admin.kelas.edit', $kelas->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form method="POST" action="{{ route('admin.kelas.destroy', $kelas->id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Adakah anda pasti untuk memadam kelas ini?')">Padam</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tiada data kelas lagi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>