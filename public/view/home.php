<link rel="stylesheet" href="<?= URL_P_V ?>css/home.css">

<div class="section-introduce">
    <img src="<?= URL_A ?>image/bg_header.png" alt="header introduce" class="">
    <div class="content text-light text-center text-lg-start">
        <h5 id="introduce-desc" class="name">
            <?= WEB_NAME ?>
        </h5>
        <p class="title animate__animated animate__fadeInLeft animate__delay-1s">
            <?= WEB_TITLE ?>
        </p>
        <div class="d-flex align-items-center flex-column flex-lg-row gap-3 mt-3 mt-lg-4">
            <a href="#lien-he" class="btn btn-outline-light w-75 w-lg-fit-content animate__animated animate__fadeInUp animate__delay-2s">
                Liên hệ thiết kế / thi công
            </a>
            <a href="#du-an" class="btn btn-outline-light w-75 w-lg-fit-content animate__animated animate__fadeInUp animate__delay-3s">
                Xem dự án
            </a>
        </div>
    </div>
</div>

<div class="mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php for ($i=0; $i < 8; $i++) : ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$i ?>" class="<?= ($i!=1)? '' :'active'?>"
                aria-current="true" aria-label="Slide <?=$i+1?>"></button>
            <?php endfor ?>
        </div>
        <div class="carousel-inner">
            <?php for ($i=1; $i <= 8; $i++) : ?>
                <div class="carousel-item <?= $i!=1 ? '' : 'active'?>" data-bs-interval="2000">
                    <img src="<?= URL_A ?>banner/0<?=$i?>.jpg" class="w-100 object-fit-cover" alt="<?= URL_A ?>banner/0<?=$i?>.jpg">
                </div>
            <?php endfor ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="mt-5">
    <div class="h4 text-center text-lg-start">
        Dự án nổi bật
    </div>
    <div id="du-an" class="row">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="col-12 col-md-6 col-lg-3">
                <a href="" class="border-1 border-dark">
                    <img src="<?= URL_A ?>project/project_0<?= $i ?>_01.jpg" alt="project_0<?= $i ?>_01.jpg"
                        class="w-100 h-100 object-fit-cover">
                </a>
            </div>
        <?php endfor ?>
    </div>
</div>