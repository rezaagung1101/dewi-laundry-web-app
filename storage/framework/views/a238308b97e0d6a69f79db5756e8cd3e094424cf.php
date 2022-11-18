<?php $__env->startSection('main'); ?>
<main>

    
    <!-- Button trigger modal -->
    <!-- <button type="button d-none" id="btn-modal" class="btn btn-primary " data-bs-toggle="modal"
        data-bs-target="#exampleModal" style="display:none;">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade modal-news" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel" class="fw-bold">Berita Terbaru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    
                    <section class="hotnews p-0">
                        <div class="container p-0">
                            <div id="newscarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active ">
                                        <img src="<?php echo e(asset('/img/img-modal-1.jpeg')); ?>"
                                            class="d-block w-100" alt="Missing News Pic" />
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?php echo e(asset('/img/img-modal-2.jpeg')); ?>"
                                            class="d-block w-100" alt="Missing News Pic" />
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?php echo e(asset('/img/img-modal-3.jpeg')); ?>"
                                            class="d-block w-100" alt="Missing News Pic" />
                                    </div>
                                    <div class="carousel-item  ">
                                        <img src="<?php echo e(asset('/img/img-modal-4.jpeg')); ?>"
                                            class="d-block w-100" alt="Missing News Pic" />
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#newscarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#newscarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                    </section>

                    
                </div>
            </div>
        </div>
    </div>
    

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h1 class="display-4">PORTAL SRIGONCO</h1>
                    <p class="fs-4">
                        Menyediakan informasi mengenai UMKM, Pariwisata serta
                        Profil di Desa Srigonco.
                    </p>
                    <a class="btn btn-selengkapnya" href="#about">
                        <span>Selengkapnya</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center flex-column">
                    <h1 class="fw-bold mb-3">Tentang Srigonco</h1>
                    <p class="text-justify">
                        Srigonco adalah sebuah desa yang subur dan asri yang
                        terletak di Kecamatan Bantur, Kabupaten Malang, Jawa
                        Timur. Sebelumnya desa ini memiliki nama Guling yang
                        nama itu diambil dari salah satu kejadian saat babad
                        tanah tersebut ada sebuah batu besar yang jatuh (guling)
                        dari atas bukit, nama itulah yang dipakai masyarakat
                        pada masa itu sebelum akhirnya dikenal dengan sebutan
                        Desa Srigonco.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" class="rounded-3"
                            src="https://www.youtube.com/embed/fN5daMGykKs" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="pariwisata">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Tempat Terbaik untuk Dikunjungi</h1>
            <p class="text-secondary">
                Jelajahi tempat wisata di Desa Srigonco
            </p>
        </div>
        <div class="pt-0" style="overflow: hidden">
            <div class="container">
                <div class="row awesome-project-content portfolio-container">
                    <div class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-app portfolio-item">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/pariwisata-1.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="img/pariwisata-1.jpg">
                                            <h4>Pantai Balekambang</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/pariwisata-2.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="img/pariwisata-2.jpg">
                                            <h4>Pantai Regent</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-card">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/pariwisata-3.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="img/pariwisata-3.jpg">
                                            <h4>Coban Kedung Darmo</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 portfolio-item filter-web">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="img/pariwisata-4.jpg" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="img/pariwisata-4.jpg">
                                            <h4>Makam Syekh Abdul Jalil</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 d-flex justify-content-center align-items-center">
                    <a href="<?php echo e(url('/pariwisata')); ?>" class="btn mx-auto">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rezaa\Documents\DEVELOPMENT\Dewi_Laundry\resources\views/pages/web/homepage.blade.php ENDPATH**/ ?>