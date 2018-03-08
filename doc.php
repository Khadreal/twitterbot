<?php
require_once __DIR__ . '/vendor/autoload.php';

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
 
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/client_secret.json');
$client = new Google_Client;
$client->useApplicationDefaultCredentials();
 
$client->setApplicationName("Something to do with my representatives");
$client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);
 
if ($client->isAccessTokenExpired()) {
    $client->refreshTokenWithAssertion();
}
 
$accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
ServiceRequestFactory::setInstance(
    new DefaultServiceRequest($accessToken)
);


$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
$spreadsheetFeed = $spreadsheetService->getSpreadsheetFeed();


$spreadsheet = $spreadsheetFeed->getByTitle('Twitter Bot');

$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();

$worksheet = $worksheets[1];
$listFeed = $worksheet->getListFeed();
$cellFeed = $worksheet->getCellFeed();
$cellFeed->editCell(1,1, "email");
$cellFeed->editCell(1,2, "age");





    $listFeed->insert([
        'email' => "hello hh",
        'age'	=> 30
    ]);
