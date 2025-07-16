<x-app-layout>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Tambah Kelas Baru</h1>
            <a href="{{ route('admin.kelas.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.kelas.store') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nama_subjek" class="form-label">Nama Subjek</label>
                        <input type="text" class="form-control @error('nama_subjek') is-invalid @enderror" 
                               id="nama_subjek" name="nama_subjek" value="{{ old('nama_subjek') }}" required>
                        @error('nama_subjek')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="penerangan" class="form-label">Penerangan</label>
                        <textarea class="form-control @error('penerangan') is-invalid @enderror" 
                                  id="penerangan" name="penerangan" rows="4" required>{{ old('penerangan') }}</textarea>
                        @error('penerangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama_cikgu" class="form-label">Nama Cikgu</label>
                        <input type="text" class="form-control @error('nama_cikgu') is-invalid @enderror" 
                               id="nama_cikgu" name="nama_cikgu" value="{{ old('nama_cikgu') }}" required>
                        @error('nama_cikgu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Kelas</button>
                    <a href="{{ route('admin.kelas.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>