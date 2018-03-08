<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;


class Main
{

	private $sheet_id = "Twitterbot";
	private $application_name = "Twitter Bot";
	private $client_secret_path = __DIR__ . '/sheets_api_secret.json' ;
	private $access_token = "";
	



	private $conn;
	private $client;
	private $aSearchFilters = array();
	private $aDiceValues = array();
	private $consumerKey = "5DRHOI34z4Eb2P5INeZnTn5dP";
	private $consumerSecret = "uH10YyynLJZIbMEQk4Zq42UHSJBmXvbhT98Kmr8yRaHBJON6AU";
	private $accessToken = "269931982-lvZn8v0Uf8hW9UKl2SqRFQesvWeqrb6knreHSgzw";
	private $accessTokenSecret = "1UGNYBESwuTHxeLgCVU8QAqdWxLpYLLqRHO2EQZuIAPUK" ;


	public function __construct
	(
		
	)
	{
		$this->scopes = implode(' ', [Google_Service_Sheets::SPREADSHEETS]);

		$this->conn		=	new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);

		$client = new Google_Client();
		$client->setApplicationName($this->application_name);
		$client->setScopes($this->scopes);
		$client->setAuthConfig($this->client_secret_path);
		$client->setAccessToken($this->access_token);
	}

	public function run()
	{
		$data = $this->conn->get("users/search", ["q" => "Twitter", "page" => 1, "count" => 20]);
		
		//var_dump($data);
		return $data;
		return json_decode(json_encode($data),true);
	}

	public function spreadsheets()
	{
		$spreadsheet = (new Google\Spreadsheet\SpreadsheetService)
		   ->getSpreadsheetFeed()
		   ->getByTitle('Copy of Legislators 2017');
		 
		// Get the first worksheet (tab)
		$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();
		$worksheet = $worksheets[0];
		return  $worksheet;
	}

	public function worksheet()
	{
		$listFeed = $this->spreadsheets->getListFeed();

		
		foreach ($listFeed->getEntries() as $entry) {
		  echo $representative = $entry->getValues();
		}
	}


}


$scripts = new Main;

$users = $scripts->run();

$scripts->worksheet();

/*foreach ($users as $user)
{
	echo $user->name ."  -   " ;
	echo $user->followers_count ."<br>" ;

}*/