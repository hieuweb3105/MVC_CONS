<?php


$data = [
    'list_project' => [
        [
            'name' => 'Villa Hoa Hồng Trắng',
            'image' => 'project/project_01_01.jpg',
            'location' => 'Quận 1, Hồ Chí Minh',
            'acreage' => '280',
            'tag' => ['nổi bật','villa','kiến trúc','thiết kế nội thất','thiết kế cảnh quan','phong cách hiện đại']
        ],
        [
            'name' => 'Black Badge Home',
            'image' => 'project/project_02_01.jpg',
            'location' => 'Thủ Đức, Hồ Chí Minh',
            'acreage' => '150',
            'tag' => ['nổi bật','kiến trúc','phong cách hiện đại']
        ],
        [
            'name' => 'Khu Nghỉ Dưỡng Kenny',
            'image' => 'project/project_03_01.jpg',
            'location' => 'ĐaKao, Đà Lạt',
            'acreage' => '300',
            'tag' => ['nổi bật','thiết kế cảnh quan','phong cách hiện đại']
        ],
        [
            'name' => 'Villa Vườn Dừa',
            'image' => 'project/project_04_01.jpg',
            'location' => '01 Trần Hưng Đạo, Nha Trang',
            'acreage' => '100',
            'tag' => ['nổi bật','villa','kiến trúc','thiết kế cảnh quan','phong cách hiện đại']
        ],
        [
            'name' => 'Bedroom Tone White',
            'image' => 'banner/05.jpg',
            'location' => 'Quận 2, Hồ Chí Minh',
            'acreage' => '10',
            'tag' => ['thiết kế nội thất','phong cách hiện đại']
        ],
        [
            'name' => 'Thư viện trong nhà',
            'image' => 'banner/07.jpg',
            'location' => 'Thủ Đức, Hồ Chí Minh',
            'acreage' => '12',
            'tag' => ['thiết kế nội thất','phong cách hiện đại']
        ],
        [
            'name' => 'Wood - Gỗ',
            'image' => 'banner/06.jpg',
            'location' => 'Tà Đùng, Đăk Nông',
            'acreage' => '15',
            'tag' => ['thiết kế nội thất']
        ],
        [
            'name' => 'Platinum - Bạch Kim',
            'image' => 'banner/08.jpg',
            'location' => 'Hồ Chí Minh',
            'acreage' => '12',
            'tag' => ['thiết kế nội thất','phong cách hiện đại']

        ],
    ]
];

view('public','project','Dự án',$data);