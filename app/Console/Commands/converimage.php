<?php

namespace App\Console\Commands;

use Exception;
use App\Models\Post;
use App\Models\Fileupload;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class converimage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:image';

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
        
        DB::table('posts')->orderBy('id')->chunk(50,
        function ($rows) {

            foreach ($rows as $row) {
                $this->info($row->id);
                $post = Post::find($row->id);
                str_replace('src="/documents/', 'src="storage/documents/', $post->content);
                $post->save();
            }
        }
    );





    }
     
}

