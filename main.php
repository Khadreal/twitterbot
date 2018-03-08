<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

/*$consumerKey = "5DRHOI34z4Eb2P5INeZnTn5dP";
$consumerSecret = "uH10YyynLJZIbMEQk4Zq42UHSJBmXvbhT98Kmr8yRaHBJON6AU";
$accessToken = "269931982-lvZn8v0Uf8hW9UKl2SqRFQesvWeqrb6knreHSgzw";
$accessTokenSecret = "1UGNYBESwuTHxeLgCVU8QAqdWxLpYLLqRHO2EQZuIAPUK" ;


$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);



$search = $connection->get("users/search", ["q" => "Twitter", "page" => 1, "count" => 3]);*/
//https://api.twitter.com/1.1/users/search.json?q=Twitter%20API&page=1&count=3
//GET https://api.twitter.com/1.1/search/tweets.json?q=twitterapi


//var_dump($search);

class Main
{
	private $conn;
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
		$this->conn		=	new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);
	}

	public function run()
	{
		$data = $this->conn->get("users/search", ["q" => "Twitter", "page" => 1, "count" => 20]);
		
		//var_dump($data);
		return $data;
		return json_decode(json_encode($data),true);
	}
}
$scripts = new Main;

$users = $scripts->run();

foreach ($users as $user)
{
	echo $user->name ."  -   " ;
	echo $user->followers_count ."<br>" ;

}