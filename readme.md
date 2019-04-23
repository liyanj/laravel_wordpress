##laravel_wordpress


## About laravel_wordpress

The laravel_wordpress is composed of Laravel 5.4 as Frontend and WordPress 4.7.2 as Backend (admin panel). The Corcel is employed to retrieve WordPress data in Eloquent way.

## Install laravel_wordpress

1. Clone or download this repository to your web root.
2. Create mysql database named as laravel_wordpress. Execute laravel_wordpress.sql to seed data.
3. In table wp_options, update the option_value of both siteurl and home according to your site domain name. In my case, it is "http://test.laravel-wordpress.com/admin" because my VHost name is "http://test.laravel-wordpress.com". 
Pls ensure "index.html" takes precedence over "index.php". If you use nginx such as "index index.html index.php". You can discover the detailed reason in file laravel_wordpress/public/admin/index.html.
3. In table wp_options, update the option_value of both siteurl and home according to your site domain name. In my case, it is "http://test.laravel-wordpress.com/admin" because my VHost name is "http://test.laravel-wordpress.com". 
4. In /config/database.php, modify your database configuration as below.
'wordpress' => [ 
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'laravel_wordpress',
            'username'  => '',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => 'wp_',
            'strict'    => false,
            'engine'    => null,
             ],
             
5. In /public/admin/wp-config.php, modify your database configuration as below.
             define('DB_NAME', 'laravel_wordpress');
             define('DB_USER', '');
             define('DB_PASSWORD', '');
             define('DB_HOST', 'localhost');
             define('DB_CHARSET', 'utf8');
             define('DB_COLLATE', '');
                
## Testing

Please visit below url to enjoy your laravel_wordpress.

http://test.laravel-wordpress.com/ : Laravel default welcome page;

http://test.laravel-wordpress.com/user : Get data from table wp_users.

http://test.laravel-wordpress.com/post : Get data from table wp_posts.

http://test.laravel-wordpress.com/comment : Get data from table wp_comments.

http://test.laravel-wordpress.com/admin : Access to the backend(admin panel) of WordPress. Username:root, Password:123456.

## License

The laravel_wordpress is open-sourced software. Feel free to enjoy it.

##Contacts

Any issues, do not hesitate to contact me via email( LIYJ87@126.COM ) or Wechat( NiceLifeStyle ).

Thanks to Laravel, WordPress and Mr. Junior Grossi (Author of the Corcel).
