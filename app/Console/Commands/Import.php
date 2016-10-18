<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class Import extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:article';

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
     * @return mixed
     */
    public function handle()
    {
        $folders = [
            __DIR__ . '/../../../../God/docker_practice/basic_concept',
            __DIR__ . '/../../../../God/docker_practice/cases',
            __DIR__ . '/../../../../God/docker_practice/compose',
            __DIR__ . '/../../../../God/docker_practice/container',
        ];

        foreach($folders as $folder) {

            $dir = opendir($folder);

            while($file = readdir($dir)) {
                if('.' == $file || '..' == $file) {
                    continue;
                }
                $originalContent = file_get_contents($folder . '/' . $file);
                $position = strpos($originalContent, PHP_EOL);
                $title = trim(substr($originalContent, 0, $position), "#\r\n");
                $originalContent = strstr($originalContent, PHP_EOL);

                Article::create([
                    'user_id' => 1,
                    'category_id' => 7,
                    'original_content' => $originalContent,
                    'short_content' => convert_markdown_to_pure($originalContent),
                    'title' => $title,
                ]);
            }

            closedir($dir);
        }
    }
}
