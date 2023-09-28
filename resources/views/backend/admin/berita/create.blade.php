@extends('layouts.backend.main')



@section('content')
<div class="content-wrapper">
    <section class="content-header">
        
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Tulis Berita Baru</h2>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('admin.dashboard.berita.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Judul" name="judul" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="#" disabled selected>Pilih Kategori</option>
                                @forelse ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                    
                                @empty
                                   <option value="#" disabled class="bg-warning">Kategori Masih kosong, silahkan buat kategori terlebih dahulu pada menu kategori berita</option> 
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="customFile" class="col-sm-2 col-form-label">Custom File</label>
                        <div class="input-group col-sm-10">
                            <div class="custom-file ">
                                <input type="file" class="custom-file-input" id="customFile" name="thumbnail">
                                <label class="custom-file-label" for="customFile" required>Choose file</label>
                            </div>

                        </div>
                    </div>
                    <textarea name="isi" id="summernote" required></textarea>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('admin.dashboard.berita.all') }}">
                        <button type="button" class="btn btn-default">Cancel</button>
                    </a>
                    <button type="submit" class="btn btn-info">Create</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </section>
</div>
@endsection


@push('script')
<!-- bs-custom-file-input -->
<script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(function () {
  bsCustomFileInput.init();
});
</script>
@endpush

@push('script')

<script>
    $(function () {
            // Summernote
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen','help']],
                    ],
            })
        })
</script>
@endpush