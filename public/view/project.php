<link rel="stylesheet" href="<?= URL_P_V ?>css/project.css?v=1.0.1">

<div class="container breadcrumb px-0 mt-1">
    <img src="<?= URL_A ?>banner/03.jpg" alt="banner" class="object-fit-cover">
    <div class="blur-img bg-dark-40"></div>
    <div class="content text-center">
        <div class="title text-light">
            Dự án
        </div>
        <div class="desc text-light-80">
            Những dự án mà chúng tôi đã hoàn thành
        </div>
    </div>
</div>

<div class="mt-5">
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-1">
        <button data-choose-tag="all" class="btn btn-outline-dark px-3 text-capitalize">
            <small>tất cả</small>
        </button>
        <button data-choose-tag="villa" class="btn btn-outline-dark px-3 text-capitalize">
            <small>villa</small>
        </button>
        <button data-choose-tag="kiến trúc" class="btn btn-outline-dark px-3 text-capitalize">
            <small>kiến trúc</small>
        </button>
        <button data-choose-tag="thiết kế nội thất" class="btn btn-outline-dark px-3 text-capitalize">
            <small>thiết kế nội thất</small>
        </button>
        <button data-choose-tag="thiết kế cảnh quan" class="btn btn-outline-dark px-3 text-capitalize">
            <small>thiết kế cảnh quan</small>
        </button>
        <button data-choose-tag="phong cách hiện đại" class="btn btn-outline-dark px-3 text-capitalize">
            <small>phong cách hiện đại</small>
        </button>
    </div>

    <div id="du-an" class="row gap-2 gap-lg-0 mt-3">
        <?php foreach ($list_project as $project) : extract($project) ?>
            <div data-list-tag="<?= implode(';',$tag)?>" class="col-12 col-md-6 col-lg-3 p-lg-1" title="Nhấn để xem chi tiết">
                <a href="/chi-tiet-du-an">
                    <div class="card-project">
                        <img src="<?= URL_A . $image ?>" alt="<?= $image ?>" class="w-100 h-100 object-fit-cover">
                        <div class="blur-img-project bg-dark-60 d-flex flex-column text-light justify-content-end p-2">
                            <div class="fw-bold">
                                <?= $name ?>
                            </div>
                            <div class="small text-light-80">
                                <?= $location ?>
                            </div>
                            <div class="small text-light-80">
                                <?= $acreage ?> m<sup>2</sup>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>

<script src="<?= URL_P_V ?>js/filter_tag_project.js"></script>