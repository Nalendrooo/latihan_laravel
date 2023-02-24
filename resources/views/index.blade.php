@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <a type="button" class="btn btn-secondary mb-3 btn-sm" href="{{ route('siswa.create') }}">Tambah Data Siswa</a>

            @if ($message = Session::get('suc'))
            <div class="alert alert-success ">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
                @foreach($siswa as $s)

                <tr>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->nis}}</td>
                    <td>{{$s->tgl_lahir}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route ('siswa.show', $s->id)}}" class="btn btn-sm btn-success me-2">Show</a>
                            <a href="{{route ('siswa.edit', $s->id)}}" class="btn btn-sm btn-primary ms-2 me-2">Edit</a>

                            <button type="submit" data-bs-toggle="modal" data-bs-target="#deleteModal{{$s->id}}" class="btn btn-danger btn-sm ms-2">Delete</button>

                        </ul>
                    </td>
                </tr>

                <div class="modal fade" id="deleteModal{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda ingin menghapus data <strong>{{$s->nama}}</strong> ?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <form action="{{route ('siswa.destroy', $s->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Now</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection