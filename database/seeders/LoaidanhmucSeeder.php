<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoaidanhmucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Loaidanhmuc::insert([
            [
                'name' => 'Tin tức',
                'slug' => 'tin-tuc',
                'duongdan' => 'tin-tuc',
            ],
            [
                'name' => 'Văn bản',
                'slug' => 'van-ban',
                'duongdan' => 'hinh-anh',
            ],
            [
                'name' => 'Video',
                'slug' => 'Video',
                'duongdan' => 'video',
            ],
            [
                'name' => 'Lĩnh vực',
                'slug' => 'linh-vuc',
                'duongdan' => 'van-ban',
            ],
            [
                'name' => 'Ban hành',
                'slug' => 'ban-hanh',
                'duongdan' => 'bao-cao',
            ],
            [
                'name' => 'Hỏi đáp',
                'slug' => 'hoi-dap',
                'duongdan' => 'hoi-dap',
            ],
        ]);

    }
}
