<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Google\Client as GoogleClient;
use Google\Service\Sheets as GoogleSheets;

class DailyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Respectively send an exclusive quote to everyone hourly via email.';

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
        $client = new GoogleClient();

        $client->setApplicationName('googlesheet');

        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(storage_path('app/credentials.json'));

        $sheets = new GoogleSheets($client);

        $spreadsheetId = '1jJhWXqMN4dFaUiS-bkiQ9pEXPUFPzy-n7LMcn60r5LA';

        $range = 'Sheet1!D1:E1';
        $response = $sheets->spreadsheets_values->get($spreadsheetId, $range);

        $values = $response->getValues();
        
    }
}
