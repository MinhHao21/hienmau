<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumenttypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DocumentType::insert([
            [
                'name' => 'Thông báo',
                'slug' => 'thong-bao',
            ],
            [
                'name' => 'Quyết định',
                'slug' => 'quyet-dinh',
            ],
            [
                'name' => 'Công văn',
                'slug' => 'cong-van',
            ],
            [
                'name' => 'Chính sách',
                'slug' => 'chinh-sach',
            ],
        ]);
    }
}
