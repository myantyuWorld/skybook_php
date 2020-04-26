<?php
require_once("twitteroauth/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "cw7nnZYUhD8emeuo2GVFcAeiW";
$consumerSecret = "MeFHPZjqUYYRob2XODtB4tG3d6329Q7HyZw3NOf9B1IuAwB6xv";
$accessToken = "1110529792720297984-K1lF3JuE7mrlitv0oRGxyNIxI1dcI9";
$accessTokenSecret = "ePL3ExiQWkRCWbYVpdrGTvLpUNSn5a0CBGyZPm8UztbOr";
  
$twObj = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);
$req = $twObj->OAuthRequest("https://api.twitter.com/1.1/statuses/user_timeline.json","GET",array("count"=>"10"));
$tw_arr = json_decode($req);

echo "--- user_timeline.php --- \r\n";
 
if (isset($tw_arr)) {
    foreach ($tw_arr as $key => $val) {
        echo $tw_arr[$key]->text;
        echo date('Y-m-d H:i:s', strtotime($tw_arr[$key]->created_at));
        echo "\r\n";
    }
} else {
    echo 'つぶやきはありません。';
}
