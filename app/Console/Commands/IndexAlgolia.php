<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IndexAlgolia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracasts.index-algolia';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index all lessons with algolia';

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
        $this->info('is is being handled');
    }
}
