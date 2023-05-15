<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Google\Client as GoogleClient;
use App\Models\SoldLead;
use Google\Service\Sheets as GoogleSheets;

class DailyQuote extends Command
{

    protected $signature = 'quote:daily';


    protected $description = 'Respectively send an exclusive quote to everyone hourly via email.';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $client = new GoogleClient();

        $client->setApplicationName('googlesheet');

        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(storage_path('app/credentials.json'));

        $sheets = new GoogleSheets($client);

        $spreadsheetId = '1jJhWXqMN4dFaUiS-bkiQ9pEXPUFPzy-n7LMcn60r5LA';

        $range = 'Sheet1!A1:Z';
        $response = $sheets->spreadsheets_values->get($spreadsheetId, $range);

        $values = $response->getValues();
        $headers = $values[0]; // use the first row as table headers
        $rows = array_slice($values, 1); // remove the first row
        $numColumnsSheet = count($headers);
        $numColumnsTable = DB::getSchemaBuilder()->getColumnListing('my_table');
        if ($numColumnsSheet != count($numColumnsTable)) {
            // handle the error here
        }

        // prepare the data for insertion into the database
        $data = [];
        foreach ($rows as $row) {


            $row = array_slice($row, 0, $numColumnsSheet); // limit to the number of columns in the sheet
            $data[] = array_combine($headers, $row);
        }
        SoldLead::truncate();
        foreach ($data as $key => $row) {

            $soldlead = SoldLead::create([
                'timestamp'         => $row['Timestamp'] ?? '0000',
                'name'              => $row['Name'] ?? 'null',
                'contact_number'    => $row['Contact number'] ?? 'null',
                'email'             => $row['Email address'] ?? 'null',
                'Postcode'          => $row['Postcode'] ?? 'null',
                'notes'             => $row['Notes'] ?? 'null',
                'source_id'         => $row['ID'] ?? 'null',
                'lead_source'       => $row['Lead Source'] ?? 'null',
                'lead_cost'         => $row['Lead Cost'] ?? 'null',
                'sold_id'           => $row['Sold?'] ?? 'null',
                'job_value'         => $row['Job Value'] ?? 'null',
                'address'           => $row['Address'] ?? 'null',
            ]);

        }
        return 0;
    }
}
