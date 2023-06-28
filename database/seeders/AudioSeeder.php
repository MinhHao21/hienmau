<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Audio::insert([
            [
                'danhmuc_id' => 22,
                'name' => 'Dân ca Nghệ Tĩnh',
                'slug' => 'dan-ca-nghe-tinh',
            ],
            [
                'danhmuc_id' => 22,
                'name' => 'ca khúc số 2',
                'slug' => 'ca-khuc-so-2',
            ],
            [
                'danhmuc_id' => 22,
                'name' => 'ca khúc số 3',
                'slug' => 'ca-khuc-so-3',
            ],
            [
                'danhmuc_id' => 22,
                'name' => 'ca khúc số 4',
                'slug' => 'ca-khuc-so-4',
            ],
            [
                'danhmuc_id' => 22,
                'name' => 'ca khúc số 5',
                'slug' => 'ca-khuc-so-5',
            ],
            [
                'danhmuc_id' => 22,
                'name' => 'ca khúc số 6',
                'slug' => 'ca-khuc-so-6',
            ],
        ]);
    }
}
