<?php

// ---[  DOMAIN   ] --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- [ ]

const DOMAIN = 'h.vn';

// ---[  SETTING  ] --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- [ ]

const URL       = 'https://' . DOMAIN . '/';
const URL_A     = URL . 'asset/';
const URL_AD    = URL . 'admin/';
const URL_AD_V  = URL . 'admin/view/';
const URL_P     = URL . 'public/';
const URL_P_V   = URL . 'public/view/';

// ---[  DEFAULT  ] --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- [ ]

const DEFAULT_ADMIN_CASE = 'admin/thong-ke';
const DEFAULT_USER_CASE = 'trang-chu';
const DEFAULT_IMAGE = URL_A . 'image/default-img.png';
const DEFAULT_AVATAR_MALE = URL_A . 'image/default-avatar-male.png';
const DEFAULT_AVATAR_FEMALE = URL_A . 'image/default-avatar-female.png';
const DEFAULT_BANNER_PROFILE = URL_A . 'image/default-banner-profile.jpg';

// ---[  WEBTEXT  ] --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- [ ]

const WEB_NAME = 'name';
const WEB_TITLE = 'describe';
const WEB_AUTHOR = 'your name';
const WEB_PHONE = '09xx xxx xxx';
const WEB_EMAIL = 'yourmail@gmail.com';
const WEB_ADDRESS = 'Your Address';
const WEB_LOGO = URL_A . 'image/logo.png';
const WEB_FAVICON = URL_A.'image/favicon.png';
const WEB_DESCRIPTION = '';
const WEB_KEYWORD = '';

// ---[  CONNECT  ] --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- [ ]

const DB_BOOL = true;               //  bật tắt trạng thái hoạt động DB, mặc định 'true' [!] Chỉ Tắt Khi Không Sử Dụng Database MySQL
const DB_HOST = 'localhost';        //  tên host
const DB_USER = 'root';             //  tài khoản
const DB_PASS = '';                 //  mật khẩu
const DB_NAME = '';         //  tên cơ sở dữ liệu

// ---[  CUSTOMS  ] --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- --- [ ]


// ---[  BOOL  ] --- --- --- --- --- --- --- ---

const BOOL_CHATIVE = false;         //  tính năng chat trực tuyến chative
const BOOL_SPINNER = false;         //  hiệu ứng tải trang
const BOOL_UPGRADE = false;         //  trang bảo trì
const BOOL_LOADER  = false;         //  hiệu ứng page loader

// ---[  TIME  ] --- --- --- --- --- --- --- ---

const TIME_SHOW_TOAST = 3000;       //  thời gian hiển thị thông báo toast (milisecond - mili giây)
const TIME_LOAD_SLIDE = 2500;       //  thời gian chuyển slide carousel (milisecond - mili giây)

// ---[  LIMIT  ] --- --- --- --- --- --- --- ---

const LIMIT_SIZE_FILE = 4;          //  giá trị tối đa cho phép lưu file (mb - megabyte)

// ---[  MAIL  ] --- --- --- --- --- --- --- ---

const MAILER_USERNAME = '';
const MAILER_PASSWORD = '';
const MAILER_YOURNAME = '';
const MAILER_SMTP = 'tls';
const MAILER_PORT = '587';
const MAILER_HOST = 'smtp.gmail.com';

// ---[  GOOGLE OAUTH API  ] --- --- --- --- --- --- --- ---

const GOOGLE_CLIENT_ID      = '';
const GOOGLE_CLIENT_SECRET  = '';
const GOOGLE_REDIRECT_URL   = 'https://'.DOMAIN.'/google-login-callback';


// ---[  LINK SOCIAL  ] --- --- --- --- --- --- --- ---


const SOCIAL_FB = 'https://facebook.com/hieuweb3105';
const SOCIAL_INS = 'https://instagram.com/hieuweb3105';
const SOCIAL_YTB = 'https://youtube.com/@hieuweb3105';

// ---[  ICON  ] --- --- --- --- --- --- --- ---

const ARR_ICON_TOAST = [
    'success' => '<i class="bi bi-check-circle text-success"></i>',
    'failed' => '<i class="bi bi-x-circle text-danger"></i> ',
    'warning' => '<i class="bi bi-exclamation-triangle text-warning"></i> ',
];