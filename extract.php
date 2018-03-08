<?php 

require_once('twitteroauth.php');

class Extract 
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
		$aArgs
	)
	{
		$this->conn		=		new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
		$this->conn->host=		"https://api.twitter.com/1.1/";

		$this->aSearchFilters = array(
			'"@',				
			chr(147) . '@',		
			'@',
			'â@',				
			'“@',				
		);

		$this->aDiceValues = array(
			'media' 	=> 1.0,
			'urls' 		=> 0.8,
			'mentions'	=> 0.5,
			'base' 		=> 0.7,
		);


		$this->parseArgs($aArgs);

		$this->loadSettings();

	}
}