<link rel="stylesheet" href="<?= URL_P_V ?>css/login.css">

<div class="container bg-login px-0 mt-1">
    <img src="<?= URL_A ?>banner/03.jpg" alt="banner" class="object-fit-cover">
    <div class="blur-img bg-dark-40"></div>
    <div class="content px-3 px-lg-0">
        <div class="col-12 mt-5 py-5">
            <div class="hw-50 d-flex flex-column justify-content-center align-items-center">
                <form action="" method="post" class="box p-3 col-12 col-md-6 col-lg-4 rounded-4">
                    <div class="input">
                        <label for="username" class="text-light-40">
                            Tài khoản
                        </label>
                        <input class="text-light" id="username" name="username" value="<?= $username ?>" autocomplete="off"
                            placeholder="Vui lòng nhập username" type="text">
                    </div>
                    <div class="input mt-2">
                        <label for="password" class="text-light-40">
                            Mật khẩu
                        </label>
                        <input class="text-light" id="password" name="password" value="" autocomplete="off"
                            placeholder="Vui lòng nhập mật khẩu" type="password">
                    </div>
                    <div class="d-flex justify-content-end pe-2 mt-2">
                        <a href="/quen-mat-khau" class="nav-link small d-flex align-items-center gap-1">
                            <i class="bi bi-key small"></i>
                            <small>Lấy lại mật khẩu</small>
                        </a>
                    </div>
                    <button name="login" type="submit" class="input-btn btn-outline-light mt-4">
                        Đăng nhập
                    </button>
                    <a href="/dang-ky"
                        class="nav-link small d-flex justify-content-center align-items-center gap-1 mt-4">
                        <i class="bi bi-person-plus small"></i>
                        <small>Tạo tài khoản mới</small>
                    </a>
                </form>
                <div class="small text-light-40 mt-5 mb-3">
                    hoặc tiếp tục với
                </div>
                <a href="/dang-nhap/google" class="p-3 col-12 col-md-6 col-lg-4 rounded-4 small btn btn-sm btn-outline-light">
                    <i class="bi bi-google"></i>
                    Tài khoản Google
                </a>
            </div>
        </div>
    </div>
</div>