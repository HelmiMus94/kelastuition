@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Senarai Kelas Ditawarkan</h1>

    <div class="row">
        {{-- Class 1 --}}
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Matematik Tingkatan 5</h5>
                    <p class="card-text">Sesi tuisyen intensif untuk persediaan SPM.</p>
                    <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        {{-- Class 2 --}}
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sains Tingkatan 3</h5>
                    <p class="card-text">Fokus kepada amali dan pemahaman konsep PT3.</p>
                    <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection