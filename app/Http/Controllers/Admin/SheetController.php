<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Google\Client as GoogleClient;
use Google\Service\Sheets as GoogleSheets;


class SheetController extends Controller
{
    public function index (){
        $client = new GoogleClient();

        $client->setApplicationName('googlesheet');

        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(storage_path('app/credentials.json'));

        $sheets = new GoogleSheets($client);

        $spreadsheetId = '1jJhWXqMN4dFaUiS-bkiQ9pEXPUFPzy-n7LMcn60r5LA';

        $range = 'Sheet1!D1:E1';
        $response = $sheets->spreadsheets_values->get($spreadsheetId, $range);

        $values = $response->getValues();
        dd($values);
    }
     public function sheet2(){
        $client = new GoogleClient();

        $client->setApplicationName('googlesheet');

        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS_READONLY]);
        $client->setAuthConfig(storage_path('app/credentials.json'));

        $sheets = new GoogleSheets($client);

        $spreadsheetId = '1jJhWXqMN4dFaUiS-bkiQ9pEXPUFPzy-n7LMcn60r5LA';

        $range = 'Sheet2!D1:E5';
        $response = $sheets->spreadsheets_values->get($spreadsheetId, $range);
        dd($response);
        $values = $response->getValues();

    }
}
