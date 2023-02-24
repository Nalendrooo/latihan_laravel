@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route ('siswa.index') }}" type="button" class="btn btn-secondary btn-sm mb-2">Kembali</a>
            <form action="{{ route('siswa.store') }}" method="post">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="nama" required id="" class="form-control">
                    NIS <input type="text" name="nis" required id="" class="form-control">
                    Tanggal Lahir <input type="date" name="tgl_lahir" required id="" class="form-control">

                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </ul>
            </form>

        </div>
    </div>
</div>
@endsection