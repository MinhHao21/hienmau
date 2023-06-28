<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class converxml extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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

     public function catchuoixml($text, $dem)
    {
        $batdau = 0;
        $kethuc = 0;
        $dem += 1;

        for ($i = 0; $i < strlen($text); $i++) {

            if ($text[$i] == '<') {
                $batdau = $i;
            }
            if ($text[$i] == '>') {
                $kethuc = $i;
                $data = substr($text, $batdau, $kethuc + 1 - $batdau);
                $text = str_replace($data, "", $text);
            }
        }
        // $this->info($dem);
        // $this->info($text);

        if ($dem < 5) {
            $text = $this::catchuoixml($text, $dem);
        }
        return $text;
    }
    public function handle()
    {
        $myXMLData =  "'<?xml version='1.0' encoding='UTF-8'?><root available-locales='vi_VN' default-locale='vi_VN'><Title language-id='vi_VN'>Trung tâm học tập cộng đồng xã Thạch Bằng: một điểm sáng về xây dựng xã hội học tập</Title></root>'";
        $data = $this::catchuoixml($myXMLData, $dem = 0);
        $this->info($data);
    }
}
