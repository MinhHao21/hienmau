<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Danhmuc;
use Illuminate\Console\Command;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\DB;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:converpost';

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
                        $posts = Post::find($row->id);
                        if (preg_match('/<img[^>]+>/i', $row->content) == 1) {
                            preg_match_all('/<img[^>]+>/i', $row->content, $result);
                            if ($result) {
                                if ($result[0]) {
                                    if ($result[0][0]) {
                                        preg_match_all('/(src)=("[^"]*")/i', $result[0][0], $img);
                                        if (count($img[0])>0) {
    
                                            if (preg_match('/src=/', $img[0][0]) == 1) {
                                                $data = str_replace('src=', '', $img[0][0]);
                                                $data = str_replace('"', '', $data);
    
                                                $posts->thumbnail = $data;
                                            } else {
                                                $posts->thumbnail = null;
                                            }
                                        } else {
                                            $posts->thumbnail = null;
                                        }
                                    } else {
                                        $posts->thumbnail = null;
                                    }
                                }
                            } else {
                                $posts->thumbnail = null;
                            }
                            $posts->save();
                        }
                    }
                }
            );

        
    }

}
