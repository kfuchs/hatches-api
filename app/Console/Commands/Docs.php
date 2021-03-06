<?php namespace Hatches\Console\Commands;

use Hatches\Commands\DocsConfig;
use Illuminate\Console\Command;
use Fab\SuperFab;

class Docs extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'docs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate API documentation with Sami!';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(SuperFab $superFab)
    {
        $this->comment(PHP_EOL.$superFab->paint('Generating some totally rad API documentation for you'.PHP_EOL));
        return exec('php vendor/sami/sami/sami.php update app/Commands/DocsConfig.php');
    }

}