<!-- Footer -->
<footer class="container px-lg-0">
    <div class="my-5 text-center border border-1 border-dark border-opacity-25 rounded-4 py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class=" d-flex align-items-center justify-content-start gap-1">
                        <a class="text-decoration-none" href="/">
                            <img id="logo-header" src="<?= WEB_LOGO ?>" alt="logo">
                        </a>
                        <div class="text-dark-50 text-start text-nowrap">
                            <div class="d-flex flex-column justify-content-center">
                                <div class="text-dark-80">
                                    <?= WEB_NAME ?>
                                </div>
                                <div class="small text-dark-60">
                                    <?= WEB_TITLE ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 gap-1 text-dark-50 ps-lg-2">
                        <div class="d-flex align-items-center text-start gap-2 small">
                            <i class="bi bi-person-circle"></i>
                            <div class="text-dark-60"><?= WEB_AUTHOR ?></div>
                        </div>
                        <div class="d-flex align-items-center text-start gap-2 small">
                            <i class="bi bi-telephone"></i>
                            <div class="text-dark-60"><?= WEB_PHONE ?></div>
                        </div>
                        <div class="d-flex align-items-center text-start gap-2 small">
                            <i class="bi bi-envelope"></i>
                            <div class="text-dark-60"><?= WEB_EMAIL ?></div>
                        </div>
                        <div class="d-flex align-items-center text-start gap-2 small">
                            <i class="bi bi-geo-alt"></i>
                            <div class="text-dark-60"><?= WEB_ADDRESS ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">

                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-center justify-content-lg-end my-3 my-lg-0 gap-2">
                    <a href="https://github.com/hieuweb3105" class="fs-5 text-dark-60" target="_blank">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://fb.com/hieuweb3105/" class="fs-5 text-dark-60" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://youtube.com/@hieuweb3105" class="fs-5 text-dark-60" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://instagram.com/hieuweb3105" class="fs-5 text-dark-60" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/in/hieuweb3105" class="fs-5 text-dark-60" target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="position-fixed end-0 bottom-0 mb-5 me-lg-4">
        <button class="btn btn-lg text-dark-80 d-none animate__animated" id="scrollButton"><i class="fs-1 bi bi-arrow-up-circle-fill"></i></button>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

<!-- JS custom -->
<script src="<?= URL_P_V ?>js/loader.js"></script>
<script src="<?= URL_P_V ?>js/scroll.js"></script>
<script src="<?= URL_P_V ?>js/paragraph.js"></script>
<!-- CDN JS Bootstrap 5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<!-- CDN JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- CDN Chative -->
<?php if(BOOL_CHATIVE): ?>
    <script src="https://messenger.svc.chative.io/static/v1.0/channels/s3ac3bbe7-7c9a-44d6-ab70-cffe6b2a1375/messenger.js?mode=livechat" defer="defer"></script>
<?php endif ?>

</html>