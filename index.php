<?php 

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "5DRHOI34z4Eb2P5INeZnTn5dP";
$consumerSecret = "uH10YyynLJZIbMEQk4Zq42UHSJBmXvbhT98Kmr8yRaHBJON6AU";
$accessToken = "269931982-lvZn8v0Uf8hW9UKl2SqRFQesvWeqrb6knreHSgzw";
$accessTokenSecret = "1UGNYBESwuTHxeLgCVU8QAqdWxLpYLLqRHO2EQZuIAPUK" ;

/*class extractbot 
{
	private $connection;
	private $content;
	private $consumerKey = "5DRHOI34z4Eb2P5INeZnTn5dP";
	private $consumerSecret = "uH10YyynLJZIbMEQk4Zq42UHSJBmXvbhT98Kmr8yRaHBJON6AU";
	private $accessToken = "269931982-lvZn8v0Uf8hW9UKl2SqRFQesvWeqrb6knreHSgzw";
	private $accessTokenSecret = "1UGNYBESwuTHxeLgCVU8QAqdWxLpYLLqRHO2EQZuIAPUK" ;

	public function __construct 
	(
		
	)
	{
		$this->connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
		//$this->content = $this->connection->get("account/verify_credentials");
	}

	public function index()
	{
		return "hello";
	}
}*/


$tw_username = 'khadreal'; 
$data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names='.$tw_username); 
$parsed =  json_decode($data,true);
$tw_name = $parsed[0]['screen_name'];
$tw_followers =  $parsed[0]['followers_count'];

print $tw_name;


/*$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
// Empty array that will be used to store followers.
$profiles = array();
// Get the ids of all followers.
$ids = $connection->get('followers/ids');
// Chunk the ids in to arrays of 100.
$ids_arrays = array_chunk($ids->ids, 100);
// Loop through each array of 100 ids.
foreach($ids_arrays as $implode) {
  // Perform a lookup for each chunk of 100 ids.
  $results = $connection->get('users/lookup', array('user_id' => implode(',', $implode)));
  // Loop through each profile result.
  foreach($results as $profile) {
    // Use screen_name as key for $profiles array.
    $profiles[$profile->screen_name] = $profile;
  }
}
// Array of user objects.
var_dump($profiles);*/