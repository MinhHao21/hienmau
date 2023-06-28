<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Diaban::insert([
            // giới thiệu
            [
                'name' => 'Huyện Anh Sơn',
                'slug' => 'huyen-anh-son',
            ],

            [
                'name' => 'Huyện Con Cuông',
                'slug' => 'huyen-con-cuong',
            ],
            [
                'name' => 'Huyện Diễn Châu',
                'slug' => 'huyen-dien-chau',
            ],
            [
                'name' => 'Huyện Đô Lương',
                'slug' => 'huyen-do-luong',
            ],
            [
                'name' => 'Huyện Hưng Nguyên',
                'slug' => 'huyen-hung-nguyen',
            ],
            [
                'name' => 'Huyện Kỳ Sơn',
                'slug' => 'huyen-ky-son',
            ],
            [
                'name' => 'Huyện Nam Đàn',
                'slug' => 'huyen-nam-dan',
            ],
            [
                'name' => 'Huyện Nghi Lộc',
                'slug' => 'huyen-nghi-loc',
            ],
            [
                'name' => 'Huyện Nghĩa Đàn',
                'slug' => 'huyen-nghia-dan',
            ],

            [
                'name' => 'Huyện Quế Phong',
                'slug' => 'huyen-que-phong',
            ],
            [
                'name' => 'Huyện Quỳ Châu',
                'slug' => 'huyen-quy-chau',
            ],
            [
                'name' => 'Huyện Quỳ Hợp',
                'slug' => 'huyen-quy-hop',
            ],
            [
                'name' => 'Huyện Quỳnh Lưu',
                'slug' => 'huyen-quynh-luu',
            ],
            [
                'name' => 'Huyện Tân Kỳ',
                'slug' => 'huyen-tan-ky',
            ],
            [
                'name' => 'Huyện Thanh Chương',
                'slug' => 'huyen-thanh-chuong',
            ],
            [
                'name' => 'Huyện Tương Dương',
                'slug' => 'huyen-tuong-duong',
            ],
            [
                'name' => 'Huyện Yên Thành',
                'slug' => 'huyen-yen-thanh',
            ],

        ]);

    }
}
