@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            @can('isAdmin')
            <a href="{{ route ('siswa.index') }}" type="button" class="btn btn-secondary btn-sm mb-2">Kembali</a>
            @endcan
            <div class="row ms-2">
                <h6 class="col-4 fw-bold">Nama</h6>
                <h6 class="col-4">: {{ ($siswa->nama) }}</h6>
            </div>
            <div class="row ms-2">
                <h6 class="col-4 fw-bold">NIS</h6>
                <h6 class="col-4">: {{ ($siswa->nis) }}</h6>
            </div>
            <div class="row ms-2">
                <h6 class="col-4 fw-bold">Tanggal Lahir</h6>
                <h6 class="col-4">: {{ ($siswa->tgl_lahir) }}</h6>
            </div>

        </div>
    </div>
</div>
@endsection