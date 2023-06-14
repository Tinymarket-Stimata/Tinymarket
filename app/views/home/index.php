<!-- banner -->
<div id="carouselExampleCaptions" class="carousel slide bg-black mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner mx-auto" style="width: 1080px;">
        <div class="carousel-item active">
            <img src="<?= BASEURL; ?>/img/banner-1.png" class="img-fluid" alt="Sapi">
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/banner-2.png" class="img-fluid" alt="Tani">
        </div>
        <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/banner-3.png" class="img-fluid" alt="Dapur">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- search bar -->
<div class="container mt-5 mb-5">
    <div class="input-group search-bar mx-auto" style="max-width: 768px;">
        <button id="search-button" type="button" class="btn">
            <i class="fas fa-search"></i>
        </button>
        <input type="text" class="form-control shadow-inner" placeholder="Cari sesuatu...">
    </div>
</div>

<!-- card -->
<div class="container p-4">
    <div class="card mx-auto" style="width: 768px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">TinyMoney</h5>
                    <p class="card-text fs-3">Rp. 200.000</p>
                    <a href="#" class="btn btn-outline-dark px-4">Top-Up</a>
                </div>
                <div class="col-md-6">
                    <h5 class="card-title">TinyPlus</h5>
                    <p class="card-text fs-3">Coba 1 Bulan</p>
                    <a href="#" class="btn btn-outline-dark px-4">Langganan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- category -->
<div class="container mt-5 mb-5" style="width: 768px;">
    <h4 class="text-center mb-4 fw-bold">Kategori</h4>
    <div class="row-1 d-flex justify-content-between mb-4">
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Bahan Pokok</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Buah & Sayuran</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Susu & Produk Olahan</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Daging & Produk Olahan</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Bumbu Masakan & Bahan Kue</p>
        </a>
    </div>
    <div class="row-2  d-flex justify-content-between">
    <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Makanan Ringan</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Minuman</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Instant</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Bayi & Anak</p>
        </a>
        <a href="#" class="shadow-sm option" style="width: 100px;">
            <img src="<?= BASEURL; ?>/img/icon.png" class="rounded mb-3" alt="icon">
            <p class="text-center mx-2">Kesehatan</p>
        </a>
    </div>
</div>

<!-- Coupon -->
<div class="container p-4">
    <h4 class="">Raih Kupon Kejutan 
        <span class="ms-4">
            <a href="#" class="fs-5 link-success">Lihat Semua</a>
        </span>
    </h4>
    <div class="shadow-lg container rounded" style="max-width: 80rem;">
        <div class="row">
            <div class="col-3 rounded-start" style="background-image: url('<?= BASEURL; ?>/img/icon.png'); height: 35vh;">
                <div class="d-flex justify-content-start align-items-center mt-3">
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-8 rounded-end" style="background-color: white; height: 35vh;">
                <div class="d-flex justify-content-end mt-3">
                    <!-- <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" class="shadow card" style="width: 10rem;">
                            <img class="card-img-top" src="<?= BASEURL; ?>/img/discount.png" alt="Kupon">
                            <div class="card-body">
                                <h5 class="card-title text-center">Ambil!</h5>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Display-1 -->
<div class="container p-4">
    <h4 class="">Menu Kebersamaan Keluarga 
        <span class="ms-4">
            <a href="#" class="fs-5 link-success">Lihat Semua</a>
        </span>
    </h4>
    <div class="shadow-lg container rounded" style="max-width: 80rem;">
        <div class="row">
            <div class="col-3 rounded-start" style="background-image: url('<?= BASEURL; ?>/img/icon.png'); height: 75vh;">
                <div class="d-flex justify-content-end align-items-center mt-4">
                    <div class="m-3">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title">Pisang</h5>
                                <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <div class="wrap">
                                        <p class="card-text">Malang</p>
                                        <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                    </div>
                                    <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 rounded-end" style="background-color: white; height: 75vh;">
                <div class="d-flex justify-content-center align-items-center mt-4">
                        <div class="m-3">
                            <div class="card" style="width: 16rem;">
                                <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang</h5>
                                    <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                    <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <div class="wrap">
                                            <p class="card-text">Malang</p>
                                            <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                        </div>
                                        <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="card" style="width: 16rem;">
                                <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang</h5>
                                    <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                    <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <div class="wrap">
                                            <p class="card-text">Malang</p>
                                            <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                        </div>
                                        <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="card" style="width: 16rem;">
                                <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang</h5>
                                    <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                    <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <div class="wrap">
                                            <p class="card-text">Malang</p>
                                            <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                        </div>
                                        <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Display 2 -->
<div class="container p-4">
    <h4 class="">Zona Pangan Organik 100% Sehat 
        <span class="ms-4">
            <a href="#" class="fs-5 link-success">Lihat Semua</a>
        </span>
    </h4>
    <div class="shadow-lg container rounded" style="max-width: 80rem;">
        <div class="row">
            <div class="col-3 rounded-start" style="background-image: url('<?= BASEURL; ?>/img/icon.png'); height: 75vh;">
                <div class="d-flex justify-content-end align-items-center mt-4">
                    <div class="m-3">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                            <div class="card-body">
                                <h5 class="card-title">Pisang</h5>
                                <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <div class="wrap">
                                        <p class="card-text">Malang</p>
                                        <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                    </div>
                                    <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 rounded-end" style="background-color: white; height: 75vh;">
                <div class="d-flex justify-content-center align-items-center mt-4">
                        <div class="m-3">
                            <div class="card" style="width: 16rem;">
                                <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang</h5>
                                    <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                    <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <div class="wrap">
                                            <p class="card-text">Malang</p>
                                            <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                        </div>
                                        <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="card" style="width: 16rem;">
                                <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang</h5>
                                    <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                    <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <div class="wrap">
                                            <p class="card-text">Malang</p>
                                            <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                        </div>
                                        <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="card" style="width: 16rem;">
                                <img src="<?= BASEURL; ?>/img/icon.png" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title">Pisang</h5>
                                    <p class="card-text">Pisang adalah buah yang lezat dan bernutrisi.</p>
                                    <h6 class="card-price fs-2 fw-bold">Rp. 20.000</h6>
                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                        <div class="wrap">
                                            <p class="card-text">Malang</p>
                                            <p class="card-text ml-3" style="line-height: 1.2">Rating: 4.5</p>
                                        </div>
                                        <button class="btn btn-primary rounded-pill ml-auto p-3"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- affiliate -->
<div class="container">
    <h4 class="text-center mt-5 mb-5 fw-bold">Kerja Sama</h4>
    <div class="affiliate">
        <div class="row-1 d-flex justify-content-center">
            <a href="#" class="shadow option rounded mx-4" style="width: 100px;">
                <img src="<?= BASEURL; ?>/img/jnt.png" class="rounded" alt="jnt">
                <p class="text-center">JNE</p>
            </a>
            <a href="#" class="shadow option rounded mx-4" style="width: 100px;">
                <img src="<?= BASEURL; ?>/img/lion.png" class="rounded" alt="lion">
                <p class="text-center">Lion Parcel</p>
            </a>
            <a href="#" class="shadow option rounded mx-4" style="width: 100px;">
                <img src="<?= BASEURL; ?>/img/who.png" class="rounded" alt="who">
                <p class="text-center">WHO</p>
            </a>
            <a href="#" class="shadow option rounded mx-4" style="width: 100px;">
                <img src="<?= BASEURL; ?>/img/nestle.png" class="rounded" alt="nestle">
                <p class="text-center">Nestlé S.A.</p>
            </a>
            <a href="#" class="shadow option rounded mx-4" style="width: 100px;">
                <img src="<?= BASEURL; ?>/img/unilever.png" class="rounded" alt="unilever">
                <p class="text-center">Unilever</p>
            </a>
        </div>
    </div>
</div>

<div class="shadow-lg container rounded mt-5 mb-5" style="max-width: 80rem;">
    <div class="row">
        <div class="col-6 rounded-start p-5" style="background-color: #37BC3C); height: 30vh;">
            <h2 class="fw-bold">Pengiriman Cepat</h2>
            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti libero qui nam voluptates, quibusdam odio praesentium ducimus cum similique! Delectus saepe beatae quas ut at culpa quisquam, eligendi quidem excepturi?</p>
        </div>
        <div class="col-6 rounded-end p-5" style="background-color: white; height: 30vh;">
            <h2 class="fw-bold">100% Sehat</h2>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum provident exercitationem nihil saepe ipsa, laudantium quas vero consectetur. Suscipit, ut consequatur. Molestiae quis vitae voluptatum rerum asperiores sequi libero rem.</p>
        </div>
    </div>
</div>