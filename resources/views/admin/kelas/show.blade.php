<x-app-layout>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Maklumat Kelas</h1>
            <div>
                <a href="{{ route('admin.kelas.edit', $kelas->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('admin.kelas.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Nama Subjek</h5>
                        <p class="fs-4">{{ $kelas->nama_subjek }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Nama Cikgu</h5>
                        <p class="fs-4">{{ $kelas->nama_cikgu }}</p>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5>Penerangan</h5>
                    <p>{{ $kelas->penerangan }}</p>
                </div>

                <div class="mt-4">
                    <small class="text-muted">
                        Dicipta: {{ $kelas->created_at->format('d/m/Y H:i') }} | 
                        Dikemaskini: {{ $kelas->updated_at->format('d/m/Y H:i') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>