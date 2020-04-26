# 手順
1. XAMPPインストール ⇒　xampp-windows-x64-7.4.5-0-VC15-installer.exe  
PHPのバージョン  
* 7.4.5
```
$ sudo rpm --import https://rpms.remirepo.net/RPM-GPG-KEY-remi
$ sudo yum install yum-utils https://rpms.remirepo.net/enterprise/remi-release-7.rpm
$ sudo yum-config-manager --enable remi-php74
$ sudo yum install php php-mbstring php-intl
$ php -v
PHP 7.4.5 (cli) (built: Apr 14 2020 12:54:33) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
```
2. [Twitter Developers に アプリケーションを登録](https://developer.twitter.com/en)
3. アプリケーションの配置
```
$ cd {__XAMPP_DIR__}\htdoc
$ git clone https://github.com/myantyuWorld/skybook_php.git
$ cd skybook_php
$ git clone https://github.com/abraham/twitteroauth.git
$ cd twitteroauth　→　vim TwitterOAuto.php　⇒　oauthRequest ⇒　private　⇒　publicへ変更
$ php -f user_timeline.php // 自分（うま）のタイムライン表示
＞自分のタイムラインを表示できました。
$ php -f search_hashtag.php // #キャンプで検索
```
