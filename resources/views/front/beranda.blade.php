@extends('layouts.front.main')

@section('content')
<main>
    <!-- section jumbotron start -->
    <section id="jumbotron" class="container-fluid">
        <div class="hero container mb-md-5">
            <div class="row">
                <div class="col fw-medium pt-4">Selamat Datang Di Website UPT. Laboratorium Terpadu</div>
            </div>
            <div class="row">
                <div class="col mt-4">
                    <h1 class="fw-bold">Pengujian Telah Terstandar</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 style="color: orangered">SNI ISO/IEC 17025:2017</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="text-break isi"><br />Pusat pelayanan <br>UPT. laboratorium terpadu Universitas Negeri Padang<br>
                        menyediakan berbagai jenis layanan pengujian yang <br>telah terakredetasi dinasional dan
                        internasional <br>dan diakui oleh komite akredetasi nasional</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box position-relative" style="width: 100%; height: 100px">
                        <div class="opacity-50 bg-white position-absolute" style="width: 100%; height: 70%"></div>
                        <div class="tulisan text-dark fw-bold text-center position-absolute top-0 w-100 py-2">
                            Kunjungi Sistem Informasi Laboratorium Terpadu UNP<br />Untuk Akses Informasi dan
                            Melakukan Pendaftaran Pengujian</div>
                    </div>
                </div>
            </div>
            <div class="row mt-md-0 mt-5">
                <div class="col text-center">
                    <a href="{{ route('pindahweblogin') }}" class="btn btn-dark">Daftar</a>
                    <a href="{{ route('pindahweblogin') }}" class="btn btn-primary">Masuk</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-light text-center">Belum Punya Akun?<br />Silahkan Klik Daftar Untuk Membuat Akun
                    </p>
                </div>
            </div>
        </div>
        <div class="logo2 border rounded-5 shadow bg-white container">
            <div class="row">
                <div class="col-sm-4"><img src="images/Logo-labdu.jpg" class="object-fit-contain" alt=""
                        style="width: 15rem; height: 5rem" /></div>
                <div class="col-sm-4"><img src="images/logo-iso.jpg" class="object-fit-contain" alt=""
                        style="width: 15rem; height: 5rem" /></div>
                <div class="col-sm-4"><img src="images/UNP.jpg" class="object-fit-contain" alt=""
                        style="width: 15rem; height: 5rem" /></div>
            </div>
        </div>
    </section>
    <!-- section jumbotron end -->
    <!-- section news start -->
    <section id="beritadaninformasi" class="card rounded-5" style="top:45px;">
        <div class="container mt-2">
            <h2 class="fw-bold text-decoration-underline" style="color: orangered;">Berita Dan Informasi <span
                    class="">Terkini</span></h2>
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">Informasi Terbaru</div>
                    <div class="col col-md-4 ms-auto text-end"><a href="#" class="" style="color: orangered;">Lihat
                            Semua Berita</a></div>
                </div>
            </div>
        </div>
        <div id="berita" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#berita" data-bs-slide-to="0" class="active border bg-black"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#berita" data-bs-slide-to="1" class="border"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#berita" data-bs-slide-to="2" class="border"
                        aria-label="Slide 3"></button>
                </div>
                <!-- carousel item 1 -->
                <div class="carousel-item active" data-bs-interval-500>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-thumbnail object-fit-cover" src="images/carousel/slide 1.jpg" alt="" style="height: 20rem; width:100%;" />
                            </div>
                            <div class="col">
                                <h1><a href="">Universitas Negeri Padang</a></h1>
                                <p>Telah dibuka pusat pelayanan pelatihan untuk umum, labdu menawarkan ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end carousel item 1 -->
                <!-- carousel item 2 -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-thumbnail object-fit-cover" src="images/carousel/slide 2.jpg" alt="" style="height: 20rem; width:100%;" />
                            </div>
                            <div class="col">
                                <h1><a href="">Universitas Negeri Padang 2</a></h1>
                                <p>Telah dibuka pusat pelayanan pelatihan untuk umum, labdu menawarkan ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end carousel item 2 -->
                <!-- carousel item 3 -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-thumbnail object-fit-cover" src="images/carousel/slide 3.jpg" alt="" style="height: 20rem; width:100%;" />
                            </div>
                            <div class="col">
                                <h1><a href="">Universitas Negeri Padang 3</a></h1>
                                <p>Telah dibuka pusat pelayanan pelatihan untuk umum, labdu menawarkan ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end carousel item 3 -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#berita" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#berita" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="terkini bg-body-secondary">
            <div class="container py-md-4">
                <h2 class="fw-bold text-center text-decoration-underline" style="color: orangered;">Berita Pilihan
                </h2>
                <div class="row justify-content-around">
                    @forelse ($beritas as $berita)
                    <div class="col col-md-4 ">
                        <div class="card" >
                            <img src="{{ asset('storage/'. $berita->gambar) }}" class="card-img-top object-fit-cover" alt="..."
                                style="height: 12rem;" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->singkat }}.</p>
                                <a href="#" class="btn btn-primary">Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                    @empty
                        
                    <div class="col col-md-4">
                        <div class="card" >
                            <img src="images/carousel/slide 2.jpg" class="card-img-top object-fit-cover" alt="..."
                                style="height: 12rem;" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card" >
                            <img src="images/carousel/slide 2.jpg" class="card-img-top object-fit-cover" alt="..."
                                style="height: 12rem;" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card" >
                            <img src="images/carousel/slide 3.jpg" class="card-img-top object-fit-cover" alt="..."
                                style="height: 12rem;" />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- section news end -->
    <!-- section video profil start -->
    <section id="videoprofil">
        <div class="container mt-5">
            <div class="row">
                <h1>Video Profil</h1>
            </div>
            <div class="row">
                <div class="col">
                    <p>Telah dibuka pusat pelayanan untuk umum, labdu menawarkan ...</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <video class="w-100" src="{{ asset('vid/Video Profil Laboratorium Terpadu UNP.mp4') }}" controls poster="{{ asset('vid/thumbnail_vid.png') }}"></video>
                </div>
            </div>
    </section>
    <!-- section video profil end -->
</main>
@endsection

@push('script')
    <script>
        const myCarouselElement = new bootstrap.Carousel("#berita");
          const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 2000,
            touch: false,
            items:1,
            autoplay:true,
            autoplayTimeout:3000,
            loop:true,
          });
    </script>
@endpush