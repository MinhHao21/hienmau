<?php

namespace Database\Seeders;

use App\Models\Caulacbo;
use App\Models\Disannghethuat;
use App\Models\Nghesynghenhan;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(DiabanSeeder::class);
        $this->call(LoaidanhmucSeeder::class);
        // $this->call(DanhmucSeeder::class);
        $this->call(DocumenttypesSeeder::class);
        //$this->call(AudioSeeder::class);
        $this->call(VitriquangcaoSeeder::class);
        // $this->call(DanhmucconSeeder::class);
        //Disannghethuat::factory(10)->create();
        //Caulacbo::factory(10)->create();
        //Nghesynghenhan::factory(10)->create();
        //Post::factory(10)->create();
        //Video::factory(10)->create();

        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mayviet.net',
            'password' => Hash::make('secret'),
        ]);
    }
}
