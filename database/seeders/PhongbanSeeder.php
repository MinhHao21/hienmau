<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhongbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Phongban::insert([
            // giới thiệu
            [
                'name' => 'BAN GIÁM ĐỐC',
                'slug' => 'ban-giam-doc',
            ],
            [
                'name' => 'PHÒNG HÀNH CHÍNH - TỔNG HỢP',
                'slug' => 'phong-hanh-chinh-tong-hop',
            ],
            [
                'name' => 'PHÒNG NGHIÊN CỨU SƯU TẦM',
                'slug' => 'phong-nghien-cuu-suu-tam',
            ],
            [
                'name' => 'ĐOÀN DÂN CA VÍ GIẶM',
                'slug' => 'doan-dan-ca-vi-dam',
            ],
            [
                'name' => 'ĐOÀN CA MÚA NHẠC DÂN TỘC',
                'slug' => 'doan-ca-mua-nhac-dan-toc',
            ],
            [
                'name' => 'CÔNG ĐOÀN CƠ SỞ',
                'slug' => 'cong-doan-co-so',
            ],
            [
                'name' => 'ĐOÀN TNCS HỒ CHÍ MINH',
                'slug' => 'doan-tncs-ho-chi-minh',
            ],
        ]);

    }
}
