<?php
require_once("twitteroauth/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "cw7nnZYUhD8emeuo2GVFcAeiW";
$consumerSecret = "MeFHPZjqUYYRob2XODtB4tG3d6329Q7HyZw3NOf9B1IuAwB6xv";
$accessToken = "1110529792720297984-K1lF3JuE7mrlitv0oRGxyNIxI1dcI9";
$accessTokenSecret = "ePL3ExiQWkRCWbYVpdrGTvLpUNSn5a0CBGyZPm8UztbOr";

echo "--- search_hashtag.php ---\r\n";
  
$twObj = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessTokenSecret);
$req = $twObj->OAuthRequest('https://api.twitter.com/1.1/search/tweets.json','GET',
array(
    'lang' => 'ja',
    'q' => '%23キャンプ' // #キャンプで検索
));
$tweets = json_decode($req);

if (isset($tweets) && empty($tweets->errors)) {
$tweets = $tweets->statuses;
echo '<dl>';
foreach ($tweets as $val) {
    echo '<dt>' .
        date('Y-m-d H:i:s', strtotime($val->created_at)) .
        ' [' . $val->user->name . ']' .
        '</dt>';
    echo '<dd>' . $val->text . '</dt>';
}
echo '</dl>';
} else {
echo 'つぶやきはありません。';
}
