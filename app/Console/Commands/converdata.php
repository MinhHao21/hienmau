<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class converdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $baiviet = Post::get();
        foreach ($baiviet as $key => $bv) {
            $dem = DB::table('post_tag')->where('post_id', $bv->id)->where('tag_id', $bv->danhmuc_id)->count();
            if ($dem == 0) {
                $this->info($key);
                DB::table('post_tag')->insert([
                    'post_id' => $bv->id,
                    'tag_id' => $bv->danhmuc_id,
                ]);
            }
        }
    }
}
