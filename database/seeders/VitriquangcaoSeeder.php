<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VitriquangcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Vitriquangcao::insert([
            [
                'name' => 'Dưới tin nổi bật',
                'slug' => 'duoi-tin-noi-bat',
            ],
            [
                'name' => 'Phía trên cột phải',
                'slug' => 'phia-tren-cot-phai',
            ],
            [
                'name' => 'Phía dưới cột phải',
                'slug' => 'phia-duoi-cot-phai',
            ],
        ]);

    }
}
