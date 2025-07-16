<x-app-layout>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Maklumat Akaun</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            {{-- Name Field --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Penuh</label>
                                <input type="text" class="form-control" id="name" value="Ahmad Helmi" readonly>
                            </div>

                            {{-- Email Field --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Emel</label>
                                <input type="email" class="form-control" id="email" value="helmi@example.com" readonly>
                            </div>

                            {{-- Password Field --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Laluan Baru</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Biarkan kosong jika tidak mahu tukar">
                            </div>

                            <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>