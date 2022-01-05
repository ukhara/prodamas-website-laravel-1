@extends('layouts.desain')
@section('main-tentang','active')
@section('tentang','active')
@section('search')
<form class="d-flex">
    <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
</form>
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Prodamas Plus</title>


    <!--Goofle Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--CSS-->
    <link rel="stylesheet" href="css/tentang.css">
</head>

<body>
    <!-- awal jumbotron -->
    <div class="container-fluid banner">
        <div class="container banner-content">
            <h1>tentang</h1>

        <!--CSS-->
        <link rel="stylesheet" href="css/tentang.css">
    </head>
    <body>
        <!-- awal jumbotron -->
        <div class="container-fluid banner">
            <div class="container banner-content">
            </div>

        </div>
    </div>
    <!-- akhir jumbotrom -->

    <div class="container">
        <div class="row justify-content-between mt-5">
            <!-- Sejarah Prodamas -->
            <div class="col">
                <div class="mb-3 kartukiri">
                    <div class="row g-0">

                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mb-3 kartukiri">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start" >

                        <div class="col-md-4 mt-5">
                        <img src="img-tentang/Sejarah Prodamas.jpg" class="img-fluid rounded-start" alt="Gambar Sejarah Prodamas" >
                        </div>
                        <div class="col-md-8">
                        <div class="card-body isi">
                            <h5 class="card-title">Sejarah Prodamas</h5>
                            <p class="card-text">Prodamas lahir dari hasil evaluasi Musrenbang (Musyawarah Perencanaan Pembangunan)
                                yang mana dalam pelaksanaanya ditemukan permasalahan utama yang menjadikan kurang optimalnya Musrenbang
                                dalam mengakomodasi seluruh kepentingan masyarakat, yaitu adanya kenyataan bahwa APBD Kota Kediri memiliki
                                keterbatasan untuk merealisasikan semua usulan masyarakat hasil Musrenbang sehingga perlu adanya skala prioritas pembangunan 
                                ditinjau dari segala segi.</p>

                        </div>
                        </div>
                        <div class="isi">
                            <p>Menjawab permasalahan tersebut, Abdullah Abu Bakar, SE., salah satu kandidat Calon Walikota Kediri periode 2014 – 2019, 
                                menawarkan sebuah konsep pembangunan yang langsung menyentuh pada satuan sistem sosial masyarakat terkecil di kelurahan, 
                                yaitu Rukun Tetangga (RT) sebagai basis utama.  </p>

                            <p>Setelah beliau terpilih sebagai Walikota Kediri tahun 2014, segera konsep pembangunan tersebut diterapkan secara resmi 
                                dengan nama Program Pemberdayaan Masyarakat (Prodamas), yaitu sebuah program pembangunan berbasis RT yang meliputi 
                                pembangunan bidang infrastruktur, sosial dan ekonomi, dengan besar anggaran (2014 – 2019) Rp. 50 Juta / RT yang dialokasikan 
                                pada APBD Kota Kediri.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 kartukanan">
                    <div class="row g-0">
                        <div class="col-md-8">

                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="img/sosial-budaya.jpg" class="img-fluid rounded-start">

                        <div class="card-body isi">
                            <h5 class="card-title">Transformasi Prodamas menjadi Prodamas Plus</h5>
                            <p class="card-text">Peralihan Prodamas ke Prodamas Plus merupakan langkah 
                                baru untuk membantu mewujudkan visi dan misi Kota Kediri untuk selalu 
                                terus menggerakan pembangunan dari segala aspek. Perubahan ini ditandai 
                                dengan beberapa poin perbedaan diantaranya cakupan bidang, sistem pengadaan, 
                                penempatan anggaran, usulan kegiatan, dan juga pendampingan.
                            </p>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img src="img-tentang/Foto Sebelah Tulisan.jpg" class="img-fluid rounded-start" alt="Gambar" >

                        </div>
                    </div>
                </div>
                <!-- End Sejarah Prodamas -->

                <div class="text-center mt-5">
                    <img src="/img-tentang/Transformasi Prodamas-Prodamas Plus.jpg" 
                    class="rounded" style="width: 100%;" alt="Gambar Transformasi Prodamas-Prodamas Plus">
                </div>

                <!-- Accordion -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Prodamas 2014
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Prodamas 2017
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>

                <div class="accordion mt-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Prodamas 2014
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>PERWALI 23 Tahun 2020 </strong>
                        <a href="/perwali/PERWAL 23 Tahun 2020.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Prodamas 2017
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>PERWALI 23 Tahun 2020 </strong>
                        <a href="/perwali/PERWAL 23 Tahun 2020.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Prodamas Plus 2021
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>PERWALI 23 Tahun 2020 </strong>
                        <a href="/perwali/PERWAL 23 Tahun 2020.pdf"> <button type="button" class="btn btn-outline-secondary">Download</button></a>

                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Prodamas Plus 2021
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Accordion -->
        </div>
    </div>
</body>

</html>
@endsection