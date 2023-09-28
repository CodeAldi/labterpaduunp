@extends('layouts.backend.main')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kategori Berita</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List kategori</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tabel Kategori</h3>

                                    <div class="card-tools">
                                        <button class="btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-default"><i class="fas fa-plus-square"></i>
                                            Tambah</button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Jumlah Berita</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kategoris as $kategori)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kategori->nama_kategori }}</td>
                                                <td>50</td>
                                                <td class="text-center d-flex justify-content-around">
                                                    <div>

                                                        <button class="btn btn-warning" data-toggle="modal"
                                                            data-target="#modal-{{ $kategori->id }}-update"><i
                                                                class="far fa-edit"></i>
                                                            Edit</button>
                                                    </div>
                                                    <form
                                                        action="{{ route('admin.dashboard.berita.kategori-berita.destroy',['kategori'=>$kategori->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"><i
                                                                class="far fa-trash-alt"></i>
                                                            Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4" class="bg-warning text-center">Data Masih kosong</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.dashboard.berita.kategori-berita.store') }}" method="POST">
                    @csrf
                    <label for="#nama">Nama Kategori</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal untuk update -->
@foreach ($kategoris as $kategori)
<div class="modal fade" id="modal-{{ $kategori->id }}-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.dashboard.berita.kategori-berita.update',['kategori'=>$kategori->id]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="#nama">Nama Kategori</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $kategori->nama_kategori }}"
                        required>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" type="submit"><i class="far fa-edit"></i>
                    update</button>
            </div>
            </form>
            {{-- <form action="{{ route('admin.dashboard.berita.kategori-berita.update',['kategori'=>$kategori->id]) }}"
                method="POST">
                @csrf
                @method('PATCH')

                <button class="btn btn-warning" type="submit"><i class="far fa-edit"></i>
                    update</button>
            </form> --}}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endforeach
<!-- /.modal -->