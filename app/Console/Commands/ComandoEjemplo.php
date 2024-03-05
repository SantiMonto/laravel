<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ComandoEjemplo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comandoEjemplo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Hola, este es mi primer comando personalizado!');
    }
}
