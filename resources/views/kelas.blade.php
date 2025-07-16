<x-app-layout>
    <div class="container py-4">
        <h1 class="mb-4">Senarai Kelas Ditawarkan</h1>

        <div class="row">
            @forelse ($kelas as $item)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_subjek }}</h5>
                            <p class="card-text">{{ $item->penerangan }}</p>
                            <p class="text-muted mb-2"><small>Cikgu: {{ $item->nama_cikgu }}</small></p>
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <h4>Tiada Kelas Tersedia</h4>
                        <p>Belum ada kelas yang ditawarkan buat masa ini. Sila hubungi pentadbir untuk maklumat lanjut.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>