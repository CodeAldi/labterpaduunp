@extends('layouts.backend.main')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Berita</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Berita</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.dashboard.berita.create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>Tulis Berita Baru</a>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($beritas as $berita)
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>{{ $berita->judul }}</td>
                                        <td>{{ $berita->kategori->nama_kategori }}</td>
                                        <td>{{ $berita->is_published? 'terbit':'draft' }}</td>
                                        <td>{{ $berita->created_at->isoFormat('D MMMM Y') }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-success"><i class="fas fa-thumbtack"></i>Pin</a>
                                            <a href="" class="btn btn-primary"><i class="far fa-eye"></i>Lihat</a>
                                            <a href="" class="btn btn-warning"><i class="far fa-edit"></i>Edit</a>
                                            <a href="{{ route('admin.dashboard.berita.destroy',['berita'=>$berita]) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i>Delete</a>
                                        </td>
                                    </tr>
                                        
                                    @empty
                                    <tr>
                                        <td colspan="6" class="bg-warning">Data masih kosong</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection