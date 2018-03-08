<?
//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('codebird.php');

//Twitter OAuth Settings
$CONSUMER_KEY = '5DRHOI34z4Eb2P5INeZnTn5dP';
$CONSUMER_SECRET = 'uH10YyynLJZIbMEQk4Zq42UHSJBmXvbhT98Kmr8yRaHBJON6AU';
$ACCESS_TOKEN = '269931982-lvZn8v0Uf8hW9UKl2SqRFQesvWeqrb6knreHSgzw';
$ACCESS_TOKEN_SECRET = '1UGNYBESwuTHxeLgCVU8QAqdWxLpYLLqRHO2EQZuIAPUK';

//Get authenticated
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
$cb = Codebird::getInstance();
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
'screen_name' => $q,
'q' => $q,
'count' => $count
);

//Make the REST call
$data = (array) $cb->$api($params);

//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);
?>