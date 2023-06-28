<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::insert([
            [
                'name' => 'Tin thông thường',
                'slug' => 'tin-thong-thuong',
            ],
            [
                'name' => 'Tin nổi bật',
                'slug' => 'tin-noi-bat',
            ],
            [
                'name' => 'Tin sự kiện',
                'slug' => 'tin-su-kien',
            ],
        ]);

    }


}
