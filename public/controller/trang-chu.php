<?php

// test_array($_SESSION);

$data = [
    'image_introduce' => [
        [
            'name' => 'Thiết kế kiến trúc',
            'image' => 'image/bg_header.png'
        ],
        [
            'name' => 'Thiết kế cảnh quan',
            'image' => 'banner/03.jpg'
        ],
        [
            'name' => 'Thiết kế nội thất',
            'image' => 'banner/05.jpg'
        ],
        [
            'name' => 'Thi công xây dựng',
            'image' => 'banner/09.jpg'
        ],
    ]
];

view('public','home','Trang chủ',$data);