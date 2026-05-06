<?php   

if($_SERVER['SERVER_NAME'] == "localhost")
{

//for local server
define("ROOT", "http://localhost/melodify/public");

define("DBDRIVER", "mysql");
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "music_website_db");

}else{

//for online server
define("ROOT", "//melodify.great-site.net");

define("DBDRIVER", "mysql");
define("DBHOST", "sql111.infinityfree.com");
define("DBUSER", "if0_41847466");
define("DBPASS", "RH3qj53UxNX1p");
define("DBNAME", "if0_41847466_melodify");
}
?>